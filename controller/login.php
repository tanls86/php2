<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'login';
}
        require_once '../config/config.php';
        require "../model/database.php";
        require "../model/user.php";
switch ($action) {
    case 'login':
      
        $username=$_POST['username']; 
        $pass=$_POST['pass'];
        if(isset($_POST['remember']))
        {
               $remember=$_POST['remember']; 
        }else
        {
                $remember="";
        }
     
   $userdao=new user();
          $user= $userdao->login($username,$pass);
    //   unset($_SESSION['admin']);die;
     // var_dump($user);die;
        if($user)
        {
            $_SESSION['admin']=$user;
            if($remember !=null)
            {
                $userdao->add_cookie('username',$username,7);
                $userdao->add_cookie('pass',$pass,7);
            } 
       echo "<script type='text/javascript'>alert('Đăng nhập thành công.');</script>";
      
      header('location:../admin/');  
     
    
           
     }else
        {
           
                 echo "<script type='text/javascript'>alert('Tài khoản hoặc mật khẩu không chính xác.');</script>";
                 header('location:./');
           
        }
       
         // 
            break;
        

    default:
        # code...
        break;
}
