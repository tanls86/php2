<?php 
class cartdao
{



public function addItem($ma_hh,$so_luong)
{
   
    $productDao=new sanpham();
    $so_luong=intval($so_luong);
    $product=$productDao->hang_hoa_select_by_id($ma_hh);
    $don_gia = $product['don_gia'] - ($product['don_gia'] * ($product['giam_gia'] / 100));
    
  

   
    if (isset($_SESSION['cart'][$ma_hh])) 
    {
        $_SESSION['cart'][$ma_hh]['so_luong'] +=$so_luong;
        $_SESSION['cart'][$ma_hh]['total']=  $_SESSION['cart'][$ma_hh]['so_luong']*  $_SESSION['cart'][$ma_hh]['don_gia'];
    } else
     {
      
      
        $total= $don_gia*$so_luong;
        $item =
            [
                'ma_hh' => $product['ma_hh'],
                'ten_hh' => $product['ten_hh'],
                'don_gia' => $don_gia,
                'total' => $total,
                'hinh' => $product['hinh'],
                'so_luong' => $so_luong

            ];
        $_SESSION['cart'][$ma_hh] = $item; 
        
        
        
    } 
    
return   $_SESSION['cart'];
}



public function delete($ma_hh)
{
    unset($_SESSION['cart'][$ma_hh]);
}

public function updateItem($ma_hh,$so_luong)
{ 
    if (isset($_SESSION['cart'][$ma_hh])) {

    $_SESSION['cart'][$ma_hh]['so_luong'] = $so_luong;
    $_SESSION['cart'][$ma_hh]['total']=  $_SESSION['cart'][$ma_hh]['so_luong']*  $_SESSION['cart'][$ma_hh]['don_gia'];
    }
}

public function cartCount()
{
    return count($_SESSION['cart']);
}

public function clearCart()
{
  unset(  $_SESSION['cart']) ;
}

}