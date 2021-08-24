<?php include "./view/common/header.php"; 
include "./view/common/menu.php"; ?>

<div class="breadcrumbs_area">
                            <div class="row">
                                    <div class="col-12">
                                        <div class="breadcrumb_content">
                                            <ul>
                                                <li><a href="index.html">home</a></li>
                                                <li><i class="fa fa-angle-right"></i></li>
                                                <li>shop</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class=" pos_home_section">
                            <div class="row pos_home">
                                    <div class="col-lg-3 col-md-12">
                                       <!--layere categorie"-->
                                          <div class="sidebar_widget shop_c">
                                                <div class="categorie__titile">
                                                    <h4>Categories</h4>
                                                </div>
                                                <div class="sidebar_widget catrgorie mb-35">
                                                    <ul>
                                                    <?php foreach($categories as $catergory): ?>
                                                        <a href="?url=detel&action=find_loai&id=<?=$catergory['ma_loai'] ?>"> <li>
                                                          
                                                       - <?=$catergory['ten_loai'] ?> 
                                                        </li></a>   
                                                        <?php endforeach ; ?>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        <!--layere categorie end-->

                                        <!--color area start-->  
                                     
                                        <!--price slider start-->                                     
                                     
                                        <!--wishlist block start-->
                                       
                                        <!--wishlist block end-->

                                     

                                       

                                        <!--special product start-->
                                        <div class="sidebar_widget special">
                                            <div class="block_title">
                                                <h3>Hot Products</h3>
                                            </div>
                                            <?php foreach($products_hot as $item): $don_gia=$item['don_gia']-($item['don_gia']*$item['giam_gia']/100) ?>
                                            <div class="special_product_inner mb-20">
                                                <div class="special_p_thumb">
                                                <a href="?url=detel&ma_hh=<?=$item['ma_hh'] ?>"><img height="100" src="admin\assets\img\products\<?=$item['hinh'] ?>" alt=""></a> 
                                                </div>
                                                <div class="small_p_desc">
                                                    <div class="product_ratting">
                                                       <ul>
                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                       </ul>
                                                   </div>
                                                    <h3><a href="?url=detel&ma_hh=<?=$item['ma_hh'] ?>"><?=$item['ten_hh'] ?></a></h3>
                                                    <div class="special_product_proce">
                                                        <span class="old_price">$ <?=$item['don_gia'] ?></span>
                                                        <span class="new_price">$ <?=number_format($don_gia)  ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                         
                                        </div>
                                        <!--special product end-->


                                    </div>
                                    <div class="col-lg-9 col-md-12">
                                        <!--banner slider start-->
                                        <div class="banner_slider mb-35">
                                            <img src=".\view\assets\img\banner\bannner10.jpg" alt="">
                                        </div> 
                                        <!--banner slider start-->

                                        <!--shop toolbar start-->
                                        <div class="shop_toolbar mb-35">
                                           
                                            <div class="list_button">
                                                <ul class="nav" role="tablist">
                                                    <li>
                                                        <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="page_amount">
                                                <p>Showing 1–9 of 21 results</p>
                                            </div>
                                            
                                            <!-- <div class="select_option">
                                            <form action="index.php" method="POST">
                                                    <input type="hidden" name="url" value="detel">
                                                    <input type="hidden" name="action" value="orderby">
                                                    <label>Sort By</label>
                                                    <select name="orderby" id="short" style="display: none;">
                                                        <option selected="" value="1">Position</option>
                                                     <option value="Asc"> <a href="?url=detel&action=orderby&sort=ASC">Price: Lowest</a> </option> 
                                                      <option value="Desc"><a href="?url=detel&action=orderby&sort=DESC">Price: Highest</a>  </option>
                                                        
                                                    </select><div class="nice-select" tabindex="0"><span class="current">Position</span><ul class="list"><li data-value="1" class="option selected">Position</li><li data-value="1" class="option">Price: Lowest</li><li data-value="1" class="option">Price: Highest</li><li data-value="1" class="option">Product Name:Z</li><li data-value="1" class="option">Sort by price:low</li><li data-value="1" class="option">Product Name: Z</li><li data-value="1" class="option">In stock</li><li data-value="1" class="option">Product Name: A</li><li data-value="1" class="option">In stock</li></ul></div>
                                                        
                                                    </form>
                                            </div> -->
                                        </div>
                                        <!--shop toolbar end-->

                                        <!--shop tab product-->
                                        <div class="shop_tab_product">   
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="large" role="tabpanel">
                                                    <div class="row">
                                                    <?php foreach($items as $item): $don_gia=$item['don_gia']-($item['don_gia']*$item['giam_gia']/100)?>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                   <a href="?url=detel&ma_hh=<?=$item['ma_hh'] ?>"><img height="327px" src="admin\assets\img\products\<?=$item['hinh'] ?>" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                   <div class="product_action">
                                                                       <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                   </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price">$<?=number_format($don_gia) ?></span>
                                                                    <h3 class="product_title"><a href="?url=detel&ma_hh=<?=$item['ma_hh'] ?>"><?=$item['ten_hh'] ?></a></h3>
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                      
                                                                        <li><a href="?url=detel&ma_hh=<?=$item['ma_hh'] ?>" >View Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      <?php endforeach; ?>
                                                    </div>  
                                                </div>
                                                <div class="tab-pane fade" id="list" role="tabpanel">
                                                <?php foreach($items as $item): $don_gia=$item['don_gia']-($item['don_gia']*$item['giam_gia']/100)?>
                                                    <div class="product_list_item mb-35">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <div class="product_thumb">
                                                                <a href="?url=detel&ma_hh=<?=$item['ma_hh'] ?>"><img src="admin\assets\img\products\<?=$item['hinh'] ?>" alt=""></a> 
                                                                   <div class="hot_img">
                                                                       <img src="assets\img\cart\span-hot.png" alt="">
                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                                <div class="list_product_content">
                                                                   <div class="product_ratting">
                                                                       <ul>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                       </ul>
                                                                   </div>
                                                                    <div class="list_title">
                                                                    <h3 class="product_title"><a href="?url=detel&ma_hh=<?=$item['ma_hh'] ?>"><?=$item['ten_hh'] ?></a></h3>
                                                                    </div>
                                                                    <p class="design"> <?=$item['mo_ta'] ?></p>

                                                                    
                                                                    <div class="content_price">
                                                                        <span>$ <?=$don_gia ?></span>
                                                                        <span class="old-price">$ <?=$item['don_gia'] ?></span>
                                                                    </div>
                                                                    <div class="add_links">
                                                                        <ul>
                                                                            <li><a href="?url=cart&ma_hh=<?= $item['ma_hh'] ?>&action=add_cart" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                           
                                                                           
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <?php endforeach; ?>         
                                                </div>

                                            </div>
                                        </div>    
                                        <!--shop tab product end-->

                                        <!--pagination style start--> 
                                        <div class="pagination_style">
                                            <div class="item_page">
                                                <form action="#">
                                                    <label for="page_select">show</label>
                                                    <select id="page_select" style="display: none;">
                                                        <option value="1">9</option>
                                                        <option value="2">10</option>
                                                        <option value="3">11</option>
                                                    </select><div class="nice-select" tabindex="0"><span class="current">9</span><ul class="list"><li data-value="1" class="option selected">9</li><li data-value="2" class="option">10</li><li data-value="3" class="option">11</li></ul></div>
                                                    <span>Products by page</span>
                                                </form>
                                            </div>
                                            <div class="page_number">
                                                <span>Pages: </span>
                                                <ul>
                                                    <li>«</li>
                                                    <li class="current_number">1</li>
                                                    <li><a href="#">2</a></li>
                                                    <li>»</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--pagination style end--> 
                                    </div>
                                </div>  
                        </div>
<?php include "./view/common/footer.php"; ?>