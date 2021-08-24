<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'view';
}

$prod = new sanpham();
$cate = new loai();
$products = $prod->hang_hoa_select_all();
$products_db = $prod->hang_hoa_select_dac_biet();
$products_hot = $prod->hang_hoa_select_top5();
$categories = $cate->loai_select_all();
switch ($action) {
    case 'list':
        $products = $prod->hang_hoa_select_all();
        include "./view/products/list.php";
        break;
    case 'add':
        include "./view/products/add.php";
        break;
    case 'add_save':
        $ten_sp = $_POST['ten_sp'];
        $don_gia = $_POST['don_gia'];
        $giam_gia = $_POST['giam_gia'];
        if ($_FILES['hinhanh']['name'] != null) {
            $hinh = $_FILES['hinhanh']['name'];
        }

        $hinh = strlen($hinh) > 0 ? $hinh : 'product.png';

        $ma_loai = $_POST['ma_loai'];
        $kieuhang = $_POST['kieuhang'];
        $date = $_POST['date'];
        $mota = $_POST['content'];
        $soluong = $_POST['soluong'];
        $so_luot_xem = 0;
        $prod->hang_hoa_insert($ten_sp, $don_gia, $giam_gia, $hinh, $ma_loai, $kieuhang, $so_luot_xem, $date, $mota, $soluong);
        $prod->upload();
        echo "<script type='text/javascript'>alert('Thêm mới thành công.');</script>";
        include "./view/products/add.php";
        break;
    case 'delete':
        $hinh = $_GET['hinh'];
        $ma_hh = $_GET['ma_hh'];
        $prod->hang_hoa_delete($ma_hh);
        $products = $prod->hang_hoa_select_all();
        // unlink("assets/img/products/$hinh");
        include "./view/products/list.php";
        break;
    case 'edit':
        $ma_hh = $_GET['ma_hh'];
        $product =  $prod->hang_hoa_select_by_id($ma_hh);
        extract($product);
        include "./view/products/edit.php";
        break;
    case 'edit_save':
        //var_dump($_REQUEST);die;
        $ma_hh = $_POST['ma_hh'];
        $ten_sp = $_POST['ten_sp'];
        $don_gia = $_POST['don_gia'];
        $giam_gia = $_POST['giam_gia'];
        if ($_FILES['hinhanh']['name'] != null) {
            $hinh = $_FILES['hinhanh']['name'];
        } else {
            $hinh = $_POST['hinhcu'];
        }

        $ma_loai = $_POST['ma_loai'];
        $kieuhang = $_POST['kieuhang'];
        $date = $_POST['date'];
        $mota = $_POST['content'];
        $soluong = $_POST['soluong'];
        $so_luot_xem = 0; //$ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta,$so_luong
        $prod->hang_hoa_update($ma_hh, $ten_sp, $don_gia, $giam_gia, $hinh, $ma_loai, $kieuhang, $so_luot_xem, $date, $mota, $soluong);
        $prod->upload();
        echo "<script type='text/javascript'>alert('Cập nhật thành công.');</script>";
        $products = $prod->hang_hoa_select_all();
        include "./view/products/list.php";
        break;
    case 'view':
        $ma_hh = $_GET['ma_hh'];
        $product = $prod->hang_hoa_select_by_id($ma_hh);
        $prod->hang_hoa_tang_so_luot_xem($ma_hh);
        extract($product);
        include "./view/product/view.php";
        break;
    case 'find_loai':
        $ma_loai = $_GET['id'];
        $items = $prod->hang_hoa_select_by_loai($ma_loai);
        include "./view/product/find.php";
        break;
    case 'search':
        $keywords = $_POST['keywords'];
        $items = $prod->hang_hoa_select_keyword($keywords);
        include "./view/product/find.php";
        break;
    case 'orderby':
        $sort = $_GET['sort'];
        $items = $prod->hang_hoa_select_don_gia($sort);
        include "./view/product/find.php";
        break;
    case 'admin_search':
        $keywords=$_POST['keywords'];
        $items = $prod->hang_hoa_select_keyword($keywords);
        include './view/products/search.php';
        break;
}
