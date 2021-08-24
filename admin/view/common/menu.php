<div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets\images\flags\us.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets\images\flags\germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets\images\flags\italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets\images\flags\spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets\images\flags\russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                        </a>

                    </div>
                </li>


           

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="./assets/img/user/<?=$_SESSION['admin']['hinh'] ?>" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                          <?= $_SESSION['admin']['ma_kh'] ?><i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h6 class="m-0">
                                Welcome !
                            </h6>
                        </div>

                        <!-- item-->
                       
                        <!-- item-->
                        <a href="index.php?controller=controller&action=logout" class="dropdown-item notify-item">
                            <i class="dripicons-power"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li>

            </ul>

            <ul class="list-unstyled menu-left mb-0">

                <li class="float-left">
                    <button class="button-menu-mobile open-left disable-btn">
                        <i class="fe-menu"></i>
                    </button>
                </li>
                <li class="app-search d-none d-sm-block">
                    <form  action="?controller=product&action=admin_search" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" name="keywords" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
<div class="left-side-menu">
<div id="sidebar-menu">

<ul class="metismenu" id="side-menu">

    <li class="menu-title">Điều hướng</li>

    <li>
        <a href="../">
            <i class="fe-airplay"></i>

            <span>Home </span>
        </a>
    </li>

    <li>
        <a href="?controller=user&action=list">
            <i class="fe-briefcase"></i>
            <span>Thành viên</span>
        </a>
    </li>

    <li>
        <a href="?controller=category&action=list">
            <i class="fe-type"></i>
            <span> Loại hàng </span>
        </a>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="fe-hard-drive"></i>
            <span> Sản phẩm</span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="?controller=product&action=add">Thêm mới sản phẩm</a>
            </li>
            <li>
                <a href="?controller=product&action=list">Danh sách sản phẩm</a>
            </li>

        </ul>
    </li>


    <li>
        <a href="?controller=orderController">
            <i class="fe-edit"></i>
            <span class="badge badge-primary float-right">04</span>
            <span> Đơn hàng  </span>
        </a>
      
    </li>
  

    

</ul>

</div>
</div>