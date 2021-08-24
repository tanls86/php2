<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'view';
}
$cartdao = new cartdao();

$cate = new loai();
$categories = $cate->loai_select_all();
//unset($_SESSION['cart']);
$orderdao = new OrderDao();
if (isset($_SESSION['cart'])) {
    $carts = $_SESSION['cart'];
    $tong_tien = 0;
    foreach ($carts as $cart) {
        $tong_tien += $cart['total'];
    }
}
switch ($action) {
    case 'view':
        if (isset($_SESSION['cart'])) {
            $carts = $_SESSION['cart'];
            $tong_tien = 0;
            foreach ($carts as $cart) {
                $tong_tien += $cart['total'];
            }
        }
        include "./view/cart/view.php";
        break;
    case 'add':
        $ma_hh = $_POST['ma_hh'];
        $so_luong = $_POST['so_luong'];
        $carts = $cartdao->addItem($ma_hh, $so_luong);
        $tong_tien = 0;
        foreach ($carts as $cart) {
            $tong_tien += $cart['total'];
        }
        include "./view/cart/view.php";
        break;
    case 'add_cart':
       
        $ma_hh = $_GET['ma_hh'];
       
        $so_luong = 1;
        $carts = $cartdao->addItem($ma_hh, $so_luong);
        $tong_tien = 0;
        foreach ($carts as $cart) {
            $tong_tien += $cart['total'];
        }
        header('location:./');
        break;
    case 'update':
        if (isset($_GET['ma_hh'])) {
            $ma_hh = $_GET['ma_hh'];
        } elseif (isset($_POST['ma_hh'])) {
            $ma_hh = $_POST['ma_hh'];
        }
        if (isset($_GET['so_luong'])) {
            $so_luong = $_GET['so_luong'];
        } elseif (isset($_POST['so_luong'])) {
            $so_luong = $_POST['so_luong'];
        }
        if ($so_luong == 0) {
            $cartdao->delete($ma_hh);
        } else {
            $cartdao->updateItem($ma_hh, $so_luong);
        }


        header('location:./index.php?url=cart');
        break;
    case 'delete':
        $ma_hh = $_GET['ma_hh'];
        $cartdao->delete($ma_hh);
        header('location:./index.php?url=cart');
        break;
    case 'checkout':

        include "./view/cart/checkout.php ";
        break;
    case 'checkout_save':
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $hoten = $_POST['hoten'];
        $diachi = $_POST['diachi'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $ghichu = $_POST['ghichu'];
        $tongtien = $_POST['tongtien'];
        $ma_kh = $_POST['ma_kh'];
        $ngay_mua = date_format(date_create(), 'Y-m-d H:i:s');
        if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email)) {
            $message = 'Địa chỉ email không hợp lệ !';
            echo "<script type='text/javascript'>alert('Điạ chỉ email không hợp lệ.');</script>";
        }else
        {
              $madh = $orderdao->addorder($ma_kh, $hoten, $phone, $diachi, $tongtien, $ngay_mua, $ghichu, $email);
        foreach ($carts as $cart) {

            $orderdao->addorderdetail($madh, $cart['ma_hh'], $cart['so_luong'], $cart['don_gia']);
        }
        $to = "tanlspd04030@fpt.edu.vn";
        $subject = "Don hang #$madh đã được đặt !";
        $header  =  "From:$email \r\n";
        $header .= "Content-type: text/html\r\n";
        $messages = "
            người đặt:$hoten;<br>
            Tổng tiền:$tongtien;
            
            
            ";

        mail($to, $subject, $messages, $header);
        $cartdao->clearCart();

        $message = "Đặt hàng thành công";
        header('location:./index.php?url=cart');
        }
      
        
        break;
    default:
        # code...
        break;
}
