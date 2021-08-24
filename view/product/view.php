
<?php include "./view/common/header.php"; 
include "./view/common/menu.php"; ?>


                        <!--header end -->
                         <!--breadcrumbs area start-->
                        <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.html">home</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>product gallery</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->


                         <!--product wrapper start-->
                         <div class="product_details">
                            <div class="row">
                                    <div class="col-lg-5 col-md-6">  
                                           <img src="admin\assets\img\products\<?=$hinh ?>" alt="">
                                         
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="product_d_right">
                                            <h1><?= $ten_hh ?></h1>
                                          
                                            <div class="product_desc">
                                                <p><?=$mo_ta ?></p>
                                            </div>

                                            <div class="content_price mb-15">
                                                <span>$ <?php $gia=$don_gia-($don_gia*$giam_gia/100) ; echo number_format($gia); ?> </span>
                                                <span class="old-price">$ <?= number_format( $don_gia)?> </span>
                                            </div>
                                            <div class="box_quantity mb-20">
                                                <form action="index.php" method="POST">
                                                    <input type="hidden" name="url" value="cart"> 
                                                    <input type="hidden" name="action" value="add">
                                                     <input type="hidden" name="ma_hh" value="<?=$ma_hh ?>">
                                                    <label>Quantity</label>
                                                    <input min="1" max="100" value="1" name="so_luong" type="number">  

                                                    <?php if($soluong==1) 
                                                    { ?>
                                                    <button type="submit"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    <?php } else { ?>

                                                        <button type="button" disabled class="btn btn-danger" ><i class="fa fa-shopping-cart"></i> Liên hệ</button>
                                                        <?php }?>
                                                </form> 
                                             
                                                   
                                            </div>
                                            

                                                         

                                            <div class="product_stock mb-20">
                                             <span> Tình trạng </span>
                                               <p><?php if($soluong==1) echo "Còn hàng"; else echo 'Hết hàng '; ?> </p>
                                                
                                            </div>
                                            <div class="wishlist-share">
                                                <h4>Share on:</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                                </ul>      
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
        <!--product info start-->
                     
                
<?php include "./view/common/footer.php"; ?>