                       <!--header area -->
                       <div class="header_area">
                           <!--header top-->
                           <div class="header_top">
                               <div class="row align-items-center">
                                   <div class="col-lg-6 col-md-6">
                                       <div class="switcher">
                                           <ul>
                                               <li class="languages"><a href="#"><img src="view\assets\img\logo\fontlogo.jpg" alt=""> English <i class="fa fa-angle-down"></i></a>
                                                   <ul class="dropdown_languages">
                                                       <li><a href="#"><img src="source\views\view\assets\img\logo\fontlogo.jpg" alt=""> English</a></li>
                                                       <li><a href="#"><img src="view\assets\img\logo\fontlogo2.jpg" alt=""> French </a></li>
                                                   </ul>
                                               </li>

                                               <li class="currency"><a href="#"> Currency : $ <i class="fa fa-angle-down"></i></a>
                                                   <ul class="dropdown_currency">
                                                       <li><a href="#"> Dollar (USD)</a></li>
                                                       <li><a href="#"> Euro (EUR) </a></li>
                                                   </ul>
                                               </li>
                                           </ul>
                                       </div>
                                   </div>
                                   <div class="col-lg-6 col-md-6">
                                       <div class="header_links">
                                           <ul>
                                               <li><a href="?url=contact&action=contact" title="Contact">Contact</a></li>

                                               <li><a href="?url=cart" title="My cart">My cart</a></li>

                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!--header top end-->

                           <!--header middel-->
                           <div class="header_middel">
                               <div class="row align-items-center">
                                   <!--logo start-->
                                   <div class="col-lg-3 col-md-3">
                                       <div class="logo">
                                           <a href="index.php"><img src="view\assets\img\logo\logo.jpg.png" alt=""></a>
                                       </div>
                                   </div>
                                   <!--logo end-->
                                   <div class="col-lg-9 col-md-9">
                                       <div class="header_right_info">
                                           <div class="search_bar">
                                               <form action="index.php" method="POST">
                                                   <input type="hidden" name="url" value="detel">
                                                   <input type="hidden" name="action" value="search">
                                                   <input placeholder="Search..." type="search" name="keywords">
                                                   <button type="submit"><i class="fa fa-search"></i></button>
                                               </form>
                                           </div>
                                           <div class="shopping_cart">
                                               <a href="#">
                                                   <?php
                                                    if (isset($_SESSION['user'])) {
                                                        echo $_SESSION['user']['ma_kh'];

                                                    ?>
                                                       <img height="40" width="50" src="admin\assets\img\user\<?= $_SESSION['user']['hinh'] ?>" alt="">

                                               </a>
                                               <a href="?url=account&action=logout" class="text-danger ">Đăng xuất</a>
                                           <?php     } else {
                                                        echo '<a href="?url=account&action=login" title="Login">Login</a>';
                                                    } ?>
                                           <!--mini cart-->

                                           </div>

                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!--header middel end-->
                           <div class="header_bottom">
                               <div class="row">
                                   <div class="col-12">
                                       <div class="main_menu_inner">
                                           <div class="main_menu d-none d-lg-block">
                                               <nav>
                                                   <ul>
                                                       <li class="active"><a href="index.php">Home</a>

                                                       </li>
                                                       <li><a href="index.php?action=f">shop</a>
                                                           <div class="mega_menu jewelry">
                                                               <div class="mega_items jewelry">
                                                                   <ul>
                                                                       <?php foreach ($categories as $catergory) : ?>
                                                                           <a href="?url=detel&action=find_loai&id=<?= $catergory['ma_loai'] ?>">
                                                                               <li>

                                                                                    <?= $catergory['ten_loai'] ?>
                                                                               </li>
                                                                           </a>
                                                                       <?php endforeach; ?>

                                                                       <!-- <li><a href="shop-list.html">shop list</a></li> -->

                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </li>



                                                       <li><a href="?url=contact&action=contact">contact us</a></li>

                                                   </ul>
                                               </nav>
                                           </div>
                                           <div class="mobile-menu d-lg-none">
                                               <nav>
                                                   <ul>
                                                       <li><a href="index.php">Home</a>

                                                       </li>
                                                       <li><a href="shop.html">shop</a>
                                                           <div>
                                                               <div>
                                                                   <ul>
                                                                       <li><a href="shop-list.html">shop list</a></li>
                                                                       <li><a href="shop-fullwidth.html">shop Full Width Grid</a></li>
                                                                       <li><a href="shop-fullwidth-list.html">shop Full Width list</a></li>
                                                                       <li><a href="shop-sidebar.html">shop Right Sidebar</a></li>
                                                                       <li><a href="shop-sidebar-list.html">shop list Right Sidebar</a></li>
                                                                       <li><a href="single-product.html">Product Details</a></li>
                                                                       <li><a href="single-product-sidebar.html">Product sidebar</a></li>
                                                                       <li><a href="single-product-video.html">Product Details video</a></li>
                                                                       <li><a href="single-product-gallery.html">Product Details Gallery</a></li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </li>
 

                                                   </ul>
                                               </nav>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!--header end -->