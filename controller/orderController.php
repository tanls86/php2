<?php 
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'list';
}
$controller="orderController";
$orderdao=new OrderDao();
$orders= $orderdao->don_hang_select_all();
switch ($action) {
    case 'list':
        $controller="orderController";

$orders= $orderdao->don_hang_select_all();
       include './view/cart/list.php';
       break;
    case 'view': 
        $ma_dh=$_GET['ma_dh'];
        $order=$orderdao->don_hang_chi_tiet($ma_dh);
        include "./view/cart/view.php";
        break;
    case 'delete': 
        $ma_dh=$_GET['ma_dh'];
        $orderdao->delete_dh($ma_dh);
        $message="Xóa thành công !" ;       
$orders= $orderdao->don_hang_select_all(); 
include './view/cart/list.php';
        
        break;
        case 'update': 
        $ma_dh=$_GET['id']; 
        $orderdao->update_dh($ma_dh);
        $orders= $orderdao->don_hang_select_all();
       include './view/cart/list.php';
        break;
    default:
        # code...
        break;
}