<?php 
// unset($_SESSION['admin']);
require_once '../config/config.php';
require_once '../config/check_admin.php';
require "../config/secure_conn.php";
include "./view/common/header.php";
include "./view/common/menu.php";

require "../model/database.php";
require "../model/user.php";

require "../model/loai.php";
require "../model/sanpham.php";
require "../model/order.php";

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} elseif (isset($_POST['controller'])) {
    $controller = $_POST['controller'];
} else {
    $controller = 'category';
}


include '../controller/' .$controller . '.php';
?>
<?php require './view/common/footer.php'; ?>
