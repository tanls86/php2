<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'index';
}
$prod = new sanpham();
$cate = new loai();
$categories = $cate->loai_select_all();
switch ($action) {
    case 'index':
        $products = $prod->hang_hoa_select_all();
        $products_db = $prod->hang_hoa_select_dac_biet();
        $categories = $cate->loai_select_all();
        include './view/index.php';
        break;
    case 'admin':
        include './admin/index.php';
        break;
    case 'contact':
        include './view/contact.php';
        break;
    case 'send_mail':
        // var_dump($_REQUEST);die;
        $subject = $_POST['subject'];
        $message = 'Tên: ' . $_POST['name'] . 'Email: ' . $_POST['email'] . 'Nội dung: ' . $_POST['message'];
        $to = "tanlspd04030@fpt.edu.vn";

        $header  =  "From: \r\n";
        $header .= "Content-type: text/html\r\n";
        mail($to, $subject, $message, $header);



        break;
    case 'logout':
        unset($_SESSION['admin']);
        echo '<script type="text/javascript">    location.reload(true); </script>';
        header('location:../admin/index.php');
        break;
    default:
        $items = $prod->hang_hoa_select_all();
        $products_db = $prod->hang_hoa_select_dac_biet();
        $categories = $cate->loai_select_all();
        $products_hot = $prod->hang_hoa_select_top5();
        include './view/product/find.php';
        break;
}
