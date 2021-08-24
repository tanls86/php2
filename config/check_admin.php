<?php 

if(isset($_SESSION['admin'])){
    if($_SESSION['admin']['vai_tro'] == 1){
       return;
    }
   
}else
{
      header('location:./login.php');
}
  


?>