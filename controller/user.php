<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'list';
}
$userdao = new user();
$cate = new loai();
$categories = $cate->loai_select_all();
switch ($action) {
    case 'list':
        $users =  $userdao->khach_hang_select_all();
        include "./view/user/list.php";
        break;
    case 'add':
        include './view/user/add.php';
        break;
    case 'add_save':
        $ma_kh = $_POST['ma_kh'];
        $ho_ten = $_POST['ho_ten'];
        $pass = $_POST['password'];
        $pass2 = $_POST['password2'];
        $email = $_POST['email'];
        $dien_thoai = $_POST['dien_thoai'];
        $dia_chi = $_POST['dia_chi'];
        $hinh = $userdao->upload();
        $hinh = strlen($hinh) > 0 ? $hinh : 'user.png';
        $kt = $userdao->khach_hang_select_by_id($ma_kh);
        if ($kt) {
            $message = 'Tài khoản đã tồn tại';
            echo "<script type='text/javascript'>alert('Tài khoản đã tồn tại.');</script>";
        } elseif ($pass != $pass2) {
            $message = 'Xác nhận mật khẩu không đúng !';
            echo "<script type='text/javascript'>alert('Xác nhận mật khẩu không chính xác.');</script>";
        } elseif (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email)) {
            $message = 'Địa chỉ email không hợp lệ !';
            echo "<script type='text/javascript'>alert('Điạ chỉ email không hợp lệ.');</script>";
        } else {
            $userdao->khach_hang_insert($ma_kh, $pass, $ho_ten, $email, $dien_thoai, $hinh, $dia_chi, 0);
            $message = 'Thêm mới thành công !';
        }

        include './view/user/add.php';
        break;
    case 'edit':
        $id = $_GET['id'];
        $user = $userdao->khach_hang_select_by_id($id);
        extract($user);
        include './view/user/edit.php';
        break;
    case 'edit_save':
        $ma_kh = $_POST['ma_kh'];
        $ho_ten = $_POST['ho_ten'];
        $pass = $_POST['password'];
        $pass2 = $_POST['password2'];
        $email = $_POST['email'];
        $dien_thoai = $_POST['dien_thoai'];
        $dia_chi = $_POST['dia_chi'];
        if ($_FILES['hinhanh']['name'] != null) {
            $hinh = $userdao->upload();
        } else {
            $hinh = $_POST['hinhcu'];
        }

        $userdao->khach_hang_update($ma_kh, $pass, $ho_ten, $email, $hinh, $dia_chi, 0, $dien_thoai);
        echo "<script type='text/javascript'>alert('Cập nhật thành công.');</script>";
        $users =  $userdao->khach_hang_select_all();
        include "./view/user/list.php";
        break;
    case 'delete':
        $id = $_GET['id'];
        $userdao->khach_hang_delete($id);
        echo "<script type='text/javascript'>alert('Xóa thành công.');</script>";
        $users =  $userdao->khach_hang_select_all();
        include "./view/user/list.php";
        break;
    case 'login':
        $ma_kh = $userdao->get_cookie("username");
        $mat_khau = $userdao->get_cookie("pass");
        include './view/login.php';
        break;
    case 'login_save':
        $username = $_POST['ma_kh'];
        $pass = $_POST['pass'];
        if (isset($_POST['remember'])) {
            $remember = $_POST['remember'];
        } else {
            $remember = "";
        }


        $user = $userdao->login($username, $pass);

        if ($user) {
            $_SESSION['user'] = $user;
            if ($remember != null) {
                $userdao->add_cookie('username', $username, 7);
                $userdao->add_cookie('pass', $pass, 7);
            }
            echo "<script type='text/javascript'>alert('Đăng nhập thành công.');</script>";
            header('location:./');
        } else {

            echo "<script type='text/javascript'>alert('Tài khoản hoặc mật khẩu không chính xác.');</script>";
            include './view/login.php';
        }

        // 
        break;

    case 'dang_ky':
        $username = $_POST['user_name'];
        $email = $_POST['email'];
        $hoten = $_POST['ho_ten'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        $dien_thoai = $_POST['dien_thoai'];
        $vai_tro = $_POST['vai_tro'];
        $dia_chi = $_POST['dia_chi'];
        $hinh = $userdao->upload();
        $hinh = strlen($hinh) > 0 ? $hinh : 'user.png';
        $kt = $userdao->khach_hang_select_by_id($username);
        // var_dump($kt);die;
        if ($kt) {
            $message = 'Tài khoản đã tồn tại';
            echo "<script type='text/javascript'>alert('Tài khoản đã tồn tại.');</script>";
        } elseif ($pass != $pass2) {
            $message = 'Xác nhận mật khẩu không đúng !';
            echo "<script type='text/javascript'>alert('Xác nhận mật khẩu không chính xác.');</script>";
        } elseif (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email)) {
            $message = 'Địa chỉ email không hợp lệ !';
            echo "<script type='text/javascript'>alert('Điạ chỉ email không hợp lệ.');</script>";
        } else {
            $userdao->khach_hang_insert($username, $pass, $hoten, $email, $dien_thoai, $hinh, $dia_chi, $vai_tro);

            echo "<script type='text/javascript'>alert('Đăng ký thành công.');</script>";
        }


        include './view/login.php';
        break;
    case 'logout':
        unset($_SESSION['user']);
        unset($_SESSION['cart']);
        header('location:./');
        break;
}
