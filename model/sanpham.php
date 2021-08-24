<?php

class sanpham extends database
{
    public function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta,$so_luong)
    {
        $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta,soluong) VALUES (?,?,?,?,?,?,?,?,?,?)";
        parent::pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet , $so_luot_xem, $ngay_nhap, $mo_ta,$so_luong);
    }
    public
    function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta,$so_luong)
    {
        $sql = "UPDATE hang_hoa SET ten_hh=?, don_gia=?, giam_gia=?, hinh=?, ma_loai=?, dac_biet=?, so_luot_xem=?, ngay_nhap=?, mo_ta=? ,soluong=? WHERE ma_hh=?";
        parent::pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta,$so_luong, $ma_hh);
    }
    public
    function hang_hoa_delete($ma_hh)
    {
        $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
        if (is_array($ma_hh)) {
            foreach ($ma_hh as $ma) {
                parent::pdo_execute($sql, $ma);
            }
        } else {
            parent::pdo_execute($sql, $ma_hh);
        }
    }
    public
    function hang_hoa_select_all()
    {
        $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC";
        return parent::pdo_query($sql);
    }
    
    public
    function hang_hoa_select_by_id($ma_hh)
    {
        $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
        return parent::pdo_query_one($sql, $ma_hh);
    }
    public
    function hang_hoa_exist($ma_hh)
    {
        $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
        return parent::pdo_query_value($sql, $ma_hh) > 0;
    }
    public
    function hang_hoa_tang_so_luot_xem($ma_hh)
    {
        $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
        parent::pdo_execute($sql, $ma_hh);
    }

    public function hang_hoa_select_top5()
    {
        $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 5";
        return parent::pdo_query($sql);
    }
    public function hang_hoa_select_don_gia($keyword)
    {
        $sql = "SELECT * FROM hang_hoa  don_gia ORDER BY don_gia ?";
        return parent::pdo_query($sql,$keyword);
    }
  

    public
    function hang_hoa_select_dac_biet()
    {
        $sql = "SELECT * FROM hang_hoa WHERE dac_biet=0";
        return parent::pdo_query($sql);
    }
    public
    function hang_hoa_select_by_loai($ma_loai)
    {
        $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
        return parent::pdo_query($sql, $ma_loai);
    }
    public
    function hang_hoa_select_keyword($keyword)
    {
        $sql = "SELECT * FROM hang_hoa hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
        return parent::pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
    }
    public
    function hang_hoa_select_page()
    {
        if (!isset($_SESSION['page_no'])) {
            $_SESSION['page_no'] = 0;
        }
        if (!isset($_SESSION['page_count'])) {
            $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
            $_SESSION['page_count'] = ceil($row_count / 10.0);
        }
        if (exist_param("page_no")) {
            $_SESSION['page_no'] = $_REQUEST['page_no'];
        }
        if ($_SESSION['page_no'] < 0) {
            $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
        }
        if ($_SESSION['page_no'] >= $_SESSION['page_count']) {
            $_SESSION['page_no'] = 0;
        }
        $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh  LIMIT " . $_SESSION['page_no'] . ", 10";
        return parent::pdo_query($sql);
    }
    public function upload()
    {
        if (isset($_POST["ok"])) //kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
        {

            if ($_FILES["hinhanh"]["name"] != NULL) {

                if ($_FILES["hinhanh"]["type"] == "image/jpeg"
                    || $_FILES["hinhanh"]["type"] == "image/png"
                    || $_FILES["hinhanh"]["type"] == "image/gif"
                ) {
                    $path = "assets/img/products/"; // file luu vào thu muc chua file upload
                    $tmp_name = $_FILES['hinhanh']['tmp_name'];
                    $name = $_FILES['hinhanh']['name'];
// Upload file
                    move_uploaded_file($tmp_name, $path . $name);
                }
            }
        }
        }
}
