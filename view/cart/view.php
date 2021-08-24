<?php include "./view/common/header.php";
include "./view/common/menu.php"; ?>
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Shopping Cart</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<?php
            if (isset($message)):
                ?>
                <div class="text-danger" role="alert">
                    <h5><?= $message ?></h5>
                </div>
            <?php
            endif;
            ?>
<div class="shopping_cart_area"style="min-height: 400px;">
    
        <div class="row" >
            <div class="col-12">
                <div class="table_desc">
                    <div class="cart_page table-responsive">
                        <table>
                            <thead>
                                <tr>

                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_total">Total</th>
                                    <th class="product_remove"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if (isset($carts)) {
                                    foreach ($carts as $cart) : ?>

                                        <tr>
                                            <form action="index.php" method="get">
                                                <input type="hidden" value="cart" name="url">
                                                <input type="hidden" name="action" value="update">
                                                <input type="hidden" name="ma_hh" value="<?= $cart['ma_hh'] ?>">
                                                <td class="product_thumb"><a href="#"><img src="admin\assets\img\products\<?=$cart['hinh'] ?>" height="70px" alt=""></a></td>
                                                <td class="product_name"><a href="#"><?= $cart['ten_hh'] ?></a></td>
                                                <td class="product-price">$ <?= number_format( $cart['don_gia']) ?></td>

                                                <td class="product_quantity"><input min="0" max="100" name="so_luong" value="<?= $cart['so_luong'] ?>" type="number"></td>
                                                <td class="product_total">$ <?= number_format($cart['total'])  ?></td>
                                                <td class="product_remove"><a href="?url=cart&action=delete&ma_hh=<?= $cart['ma_hh'] ?>"><i class="fa fa-trash-o"></i></a>
                                                    <button type="submit" style="border:none;background-color:white" class="product_remove"> <a><i class="fa fa-edit"></i></a> </button>

                                                </td>
                                            </form>
                                        </tr>

                                <?php endforeach;}
                                 ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!--coupon code area start-->
        <?php if (isset($carts)) {
                                    ?>
        <div class="coupon_area">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code">
                        <h3>Cart Totals</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Subtotal</p>
                                <p class="cart_amount">$ <?=number_format($tong_tien) ?></p>
                            </div>
                            <div class="cart_subtotal ">
                                <p>Shipping</p>
                                <p class="cart_amount"><span>Flat Rate:</span> $0.00</p>
                            </div>
                            <a href="#">Calculate shipping</a>

                            <div class="cart_subtotal">
                                <p>Total</p>
                                <p class="cart_amount">$ <?=number_format($tong_tien) ?></p>
                            </div>
                            <?php if(isset($_SESSION['user']) && $tong_tien>0 ){ ?>
                            <div class="checkout_btn">
                                <a href="index.php?url=cart&action=checkout">Proceed to Checkout</a>
                            </div>
                            <?php }
                            else{   ?>
                                    <a href="#">Bạn cần đăng nhập để thanh toán</a>
                                    <div class="checkout_btn">
                                    <a href="?url=account&action=login">Đăng nhập</a>
                                    </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--coupon code area end-->
        <?php }
                                    ?>
</div>

<?php 
include '"./view/common/footer.php'; ?>