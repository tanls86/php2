<?php 
class OrderDao extends database
{
    public  function addorder($ma_kh,$ho_ten,$dien_thoai,$dia_chi,$tong_tien,$ngay_mua,$ghi_chu,$email)
    {
        $sql = "INSERT INTO don_hang(ma_kh,ho_ten,dien_thoai,dia_chi,tong_tien,ngay_mua,ghi_chu,email,status) 
        VALUE (?,?,?,?,?,?,?,?,?)";
        parent::pdo_execute($sql,$ma_kh,$ho_ten,$dien_thoai,$dia_chi,$tong_tien,$ngay_mua,$ghi_chu,$email,0);
       return $ma_dh=$this->conn->lastInsertId();
    }
    
    
    public function addorderdetail($ma_dh,$ma_hh,$so_luong,$gia)
    {   
     
     $sql = "INSERT INTO don_hang_ct(ma_dh,ma_hh,so_luong,gia) 
        VALUE(?,?,?,?) ";
        
      return  parent::pdo_execute($sql,$ma_dh,$ma_hh,$so_luong,$gia);
                 
              
    }

 public   function don_hang_select_all()
{
    $sql="SELECT * FROM don_hang ORDER BY ma_dh DESC";
 return parent:: pdo_query($sql);
  
}
public function don_hang_chi_tiet($ma_dh)
{
    $sql= " SELECT dh.ho_ten,dh.dia_chi,dh.email,dh.dien_thoai,dh.tong_tien,dh.ghi_chu,
    dhct.*,
    sp.ten_hh
    FROM don_hang dh 
    INNER JOIN don_hang_ct dhct ON dh.ma_dh =dhct.ma_dh
    INNER JOIN hang_hoa sp ON dhct.ma_hh = sp.ma_hh
    WHERE dh.ma_dh='".$ma_dh."'
      ";
     return  parent:: pdo_query($sql);

}
public function delete_dh($ma_dh)
{
    $sql="DELETE FROM don_hang WHERE ma_dh=? ";
    return  parent:: pdo_execute($sql,$ma_dh);
}

public function update_dh($id)
{
  $sql ='UPDATE don_hang SET status=1 WHERE ma_dh=?'; 
  return parent::pdo_execute($sql,$id);
}

}