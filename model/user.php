<?php

class user extends database
{

    public function login($username,$pass)
    {
        $pass = sha1($username . $pass); 
        $sql="SELECT * FROM khach_hang WHERE ma_kh=? AND mat_khau=?  ";
        return parent::pdo_query_one($sql,$username,$pass);    
    }

 
    public  function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $phone, $hinh, $dia_chi, $vai_tro)
    {
        $mat_khau = sha1($ma_kh . $mat_khau);
        $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, email,dien_thoai,dia_chi,vai_tro, hinh ) VALUES (?, ?, ?, ?, ?, ?, ?,?)";
        parent::pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $phone, $dia_chi, $vai_tro, $hinh);
    }

    public function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $dia_chi, $vai_tro, $dien_thoai)
    {
        $mat_khau = sha1($ma_kh . $mat_khau);
        $sql = "UPDATE khach_hang SET mat_khau=?,ho_ten=?,email=?,hinh=?,dia_chi=?,vai_tro=?,dien_thoai=? WHERE ma_kh=?";
        parent::pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $dia_chi , $vai_tro, $dien_thoai ,$ma_kh);
    }

    public  function khach_hang_delete($ma_kh)
    {
        $sql = "DELETE FROM khach_hang  WHERE ma_kh=?";
        if (is_array($ma_kh)) {
            foreach ($ma_kh as $ma) {
                parent::pdo_execute($sql, $ma);
            }
        } else {
            parent::pdo_execute($sql, $ma_kh);
        }
    }

    public function khach_hang_select_all()
    {
        $sql = "SELECT * FROM khach_hang WHERE vai_tro =0";
        return parent::pdo_query($sql);
    }

    public function khach_hang_select_by_id($ma_kh)
    {
        $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
        return parent::pdo_query_one($sql, $ma_kh);
    }




    public   function khach_hang_select_by_role($vai_tro)
    {
        $sql = "SELECT * FROM khach_hang WHERE vai_tro=?";
        return parent::pdo_query($sql, $vai_tro);
    }

    public  function khach_hang_change_password($ma_kh, $mat_khau_moi)
    {
        
        $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
        parent::pdo_execute($sql, $mat_khau_moi, $ma_kh);
    }

    public function check_admin()
    {
        if(isset($_SESSION['user'])){
            if($_SESSION['user']['vai_tro'] == 1){
                return;
            }
        }
        header('location:./view/login.php ');
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
                    $path = "admin/assets/img/user/"; // file luu vào thu muc chua file upload
                    $tmp_name = $_FILES['hinhanh']['tmp_name'];
                    $name = $_FILES['hinhanh']['name'];
// Upload file
                    move_uploaded_file($tmp_name, $path . $name);
                }return $name;
            }
            
        }
        
    }

   public function add_cookie($name, $value, $day){
        setcookie($name, $value,time() + (86400 * $day), "/");
    }
    /**
     * Xóa cookie
     * @param string $name là tên cookie
     */
   public function delete_cookie($name){
        add_cookie($name, '', -1);
    }
    /**
     * Đọc giá trị cookie
     * @param string $name là tên cookie
     * @return string giá trị của cookie
     */
public    function get_cookie($name){
        return $_COOKIE[$name]??'';
    }
    

}
