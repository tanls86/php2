<?php include "./view/common/header.php"; ?>
<?php include "./view/common/menu.php"; ?>
<!--pos home section-->
<div class=" pos_home_section">
    <div class="row pos_home">
        <div class="col-lg-3 col-md-8 col-12">
            <!--sidebar banner-->
            <div class="sidebar_widget banner mb-35">
                <div class="banner_img mb-35">
                    <a href="#"><img src=".\view\assets\img\banner\banner5.jpg" alt=""></a>
                </div>
                <div class="banner_img">
                    <a href="#"><img src=".\view\assets\img\banner\banner6.jpg" alt=""></a>
                </div>
            </div>
            <!--sidebar banner end-->

            <!--categorie menu start-->
            <div class="sidebar_widget catrgorie mb-35">
                <h3>Categories</h3>
                <ul>

                    <?php foreach ($categories as $category) : ?>
                      <a href="?url=detel&action=find_loai&id=<?=$category['ma_loai'] ?>">  <li class="has-sub"><i class="fa fa-caret-right"></i> <?= $category['ten_loai'] ?>

                        </li></a>

                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="sidebar_widget newsletter mb-35">
                <div class="block_title">
                    <h3>newsletter</h3>
                </div>
                <form action="#">
                    <p>Sign up for your newsletter</p>
                    <input placeholder="Your email address" type="text">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
            <!--newsletter block end-->

            <!--sidebar banner-->
            <div class="sidebar_widget bottom ">
                <div class="banner_img">
                    <a href="#"><img src="view\assets\img\banner\banner9.jpg" alt=""></a>
                </div>
            </div>
            <!--sidebar banner end-->



        </div>
        <div class="col-lg-9 col-md-12">
            <!--banner slider start-->
            <div class="banner_slider slider_1">
                <div class="slider_active owl-carousel">
                    <div class="single_slider" style="background-image: url(./view/assets/img/slider/slide_1.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>Women's Fashion</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(./view/assets/img/slider/slider_2.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>New Collection</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(./view/assets/img/slider/slider_3.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>Best Collection</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--banner slider start-->

            <!--new product area start-->
            <div class="new_product_area">
                <div class="block_title">
                    <h3>New Products</h3>
                </div>
                <div class="row">
                    <div class="product_active owl-carousel">
                        <?php foreach ($products as $product) : $don_gia=$product['don_gia']-($product['don_gia']*$product['giam_gia']/100) ?>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="?url=detel&ma_hh=<?= $product['ma_hh'] ?>"> <img src="admin\assets\img\products\<?= $product['hinh'] ?>" alt="" height="327px"></a>
                                      
                                        <div class="product_action">
                                            <a href="?url=cart&ma_hh=<?= $product['ma_hh'] ?>&action=add_cart"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$ <?= number_format($product['don_gia']) ?></span>
                                        <h3 class="product_title"><a href="?url=detel&ma_hh=<?= $product['ma_hh'] ?>"><?= $product['ten_hh'] ?></a></h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            
                                            <li><a href="?url=detel&ma_hh=<?= $product['ma_hh'] ?>" >View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>


            <div class="featured_product">
                <div class="block_title">
                    <h3>Featured Products</h3>
                </div>
                <div class="row">
                    <div class="product_active owl-carousel">
                        <?php foreach ($products_db as $product_db) : $don_gia=$product_db['don_gia']-($product_db['don_gia']*$product_db['giam_gia']/100) ?>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="?url=detel&ma_hh=<?= $product_db['ma_hh'] ?>"> <img src="admin\assets\img\products\<?= $product_db['hinh'] ?>" alt="" style="
    height: 327px;
"></a>
                                        <div class="hot_img">
                                            <img src="view\assets\img\cart\span-hot.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="?url=cart&ma_hh=<?= $product_db['ma_hh'] ?>&action=add_cart"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">$<?= number_format($don_gia) ?></span>
                                        <h3 class="product_title"><a href="single-product.html"><?= $product_db['ten_hh'] ?></a></h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            
                                            <li><a href="?url=detel&ma_hh=<?= $product['ma_hh'] ?>" >View Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <?php endforeach; ?>
                    
                    </div>
                </div>
            </div>
            <!--featured product end-->

            <!--banner area start-->
            <div class="banner_area mb-60">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single_banner">
                            <a href="#"><img src="view\assets\img\banner\banner7.jpg" alt=""></a>
                            <div class="banner_title">
                                <p>Up to <span> 40%</span> off</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single_banner">
                            <a href="#"><img src="view\assets\img\banner\banner8.jpg" alt=""></a>
                            <div class="banner_title title_2">
                                <p>sale off <span> 30%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--banner area end-->

            <!--brand logo strat-->
            <div class="brand_logo mb-60">
                <div class="block_title">
                    <h3>Brands</h3>
                </div>
                <div class="row">
                    <div class="brand_active owl-carousel">
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="view\assets\img\brand\brand1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="view\assets\img\brand\brand2.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="view\assets\img\brand\brand3.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="view\assets\img\brand\brand4.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="view\assets\img\brand\brand5.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="view\assets\img\brand\brand6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--brand logo end-->
        </div>
    </div>
</div>
<!--pos home section end-->
</div>
<!--pos page inner end-->
</div>
</div>
<!--pos page end-->

<?php include "./view/common/footer.php"; ?>