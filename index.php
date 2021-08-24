<?php
require "./config/config.php";
require "./model/database.php";
require "./model/loai.php";
require "./model/sanpham.php";
require "./model/user.php";
require "./model/cart.php";
require "./model/order.php";
require './model/sendmail.php';
if (isset($_GET['url'])) {
    $url = $_GET['url'];
} elseif (isset($_POST['url'])) {
    $url = $_POST['url'];
} else {
    $url = '/';
}
switch ($url) {
    case '/':
        include './controller/controller.php';
        break;
    case 'admin':
        include './controller/controller.php&action=admin';
        break;
    case 'detel':
        include './controller/product.php';
        break;
    case 'cart':
        include './controller/cartController.php';
        break;
    case 'account': 
        include './controller/user.php';
        break;
    case 'contact': 
        include './controller/controller.php';
        break;
           
    default:
        echo "không tìm thấy trang web ";
        break;
}
