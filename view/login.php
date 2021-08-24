<?php include "./view/common/header.php"; ?>
<?php include "./view/common/menu.php"; ?>
<!--pos home section-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>login</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<div class="customer_login">
    <div class="row">
        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>login</h2>
                <?php 

                ?>
                <form action="?url=account" method="POST">
                    <p>
                        <label>Username <span>*</span></label>
                        <input type="text" name="ma_kh"  required>
                    </p>
                    <p>
                        <label>Passwords <span>*</span></label>
                        <input type="password" name="pass"  required>
                    </p>
                    <div class="login_submit">
                       

                        <!-- <label for="remember">
                            <input id="remember" name="remember"  type="checkbox">
                            Remember me
                        </label> -->

                       
                    </div>
                    <div class="login_submit">
                     <input type="hidden" name="action" value="login_save">
                        <button type="submit">login</button>
                    </div>
                </form>
            </div>
        </div>
        <!--login area start-->

        <!--register area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form register">
                <h2>Register</h2>
                <form action="?url=account" method="POST" enctype="multipart/form-data">
                    <p>
                        <label>User name: <span>*</span></label>
                        <input type="text" name="user_name" required>
                    </p>
                    <p>
                        <label>Email address </label>
                        <input type="text" name="email" required >
                    </p>
                    <p>
                        <label>Passwords <span>*</span></label>
                        <input type="password" name="pass" required>
                    </p>
                    <p>
                        <label>Confirm passwords <span>*</span></label>
                        <input type="password" name="pass2">
                    </p>
                    <p>
                        <label>Họ tên </label>
                        <input type="text" name="ho_ten" required>
                    </p>
                    <p>
                        <label>Điện thoại </label>
                        <input type="number" name="dien_thoai"required>
                    </p>
                    <p>
                        <label>Địa chỉ </label>
                        <input type="text" name="dia_chi" required>
                    </p>
                    <p>
                        <label>Hình ảnh : *(Không bắt buộc) </label>
                        <input type="file" name="hinhanh" >
                    </p>
                    <input type="hidden" name="vai_tro" value="0">
                    <input type="hidden" name="action" value="dang_ky" >
                    <div class="login_submit">
                        <button type="submit" name="ok" >Register</button>
                    </div>
                </form>
            </div>
        </div>
        <!--register area end-->
    </div>
</div>
<!--pos page end-->

<?php include "./view/common/footer.php"; ?>