<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
} else
{
    $action='list';
}

$cate = new loai();
$categories = $cate->loai_select_all();
switch ($action) {
    case 'list':
        // $categories = $cate->loai_select_all();
        include './view/categories/list.php';
        break;
    case 'add':
        include './view/categories/add.php';
        break;
    case 'add_save':
        
        $ten_loai = $_POST['ten_loai'];
        $cate->loai_insert($ten_loai);
        
        $message="Thêm thành công !";
        include './view/categories/add.php';
        break;
    case 'delete':
        $ma_loai = $_GET['ma_loai'];
        $cate->loai_delete($ma_loai);
        $message="Xóa thành thành công  !";
        $categories = $cate->loai_select_all();
        include './view/categories/list.php';
        break;
    case 'edit':
        $ma_loai = $_GET['ma_loai'];
        $categoty = $cate->loai_select_by_id($ma_loai);
        extract($categoty);
        include './view/categories/edit.php';
        break;
    case 'edit_save':
        $ten_loai = $_POST['ten_loai'];
        $ma_loai = $_POST['ma_loai'];
        $cate->loai_update($ma_loai,$ten_loai);
        $message="Cập nhật thành công !";
        $categories = $cate->loai_select_all();
        include './view/categories/list.php';
        break;
    default:
        $categories = $cate->loai_select_all();
        include './view/categories/list.php';
        break;
}
