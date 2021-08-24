<?php include "./view/common/header.php";
include "./view/common/menu.php"; ?>
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>checkout</li>
                </ul>

            </div>
        </div>
    </div>
</div>


<div class="Checkout_section">
                            <div class="row">
                              
                                </div>
                            <div class="checkout_form">
                                    <form  class="row" action="index.php" method="POST">
                                        <div class="col-lg-6 col-md-6">
                                  
                                                <h3>Billing Details</h3>
                                                <div class="row">

                                                    <div class="col-lg-12 mb-30">
                                                        <label>Full Name <span>*</span></label>
                                                        <input type="text" name="hoten" value="<?=$_SESSION['user']['ho_ten'] ?>" >    
                                                    </div>
                                                  
                                                  

                                                    <div class="col-12 mb-30">
                                                        <label>Street address  <span>*</span></label>
                                                        <input placeholder="House number and street name" name="diachi" value="<?=$_SESSION['user']['dia_chi'] ?>" type="text">     
                                                    </div>
                                                   
                                                    
                                                     
                                                    <div class="col-lg-6 mb-30">
                                                        <label>Phone<span>*</span></label>
                                                        <input type="number"value="<?=$_SESSION['user']['dien_thoai'] ?>"  name="phone"> 

                                                    </div> 
                                                     <div class="col-lg-6 mb-30">
                                                        <label> Email Address   <span></span></label>
                                                          <input type="text" name="email" value="<?=$_SESSION['user']['email'] ?>" > 

                                                    </div> 
                                               
                                                    <div class="col-12">
                                                        <div class="order-notes">
                                                             <label for="order_note">Order Notes</label>
                                                            <textarea id="order_note" name="ghichu" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                        </div>    
                                                    </div>     	    	    	    	    	    	    
                                                </div>
                                            
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                             
                                                <h3>Your order</h3> 
                                                <div class="order_table table-responsive mb-30">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach ($carts as $cart): ?>
                                                            <tr>
                                                                <td> <?=$cart['ten_hh'] ?> <strong> ×  <?=$cart['so_luong'] ?></strong></td>
                                                                <td> $ <?=$cart['total'] ?></td>
                                                            </tr>
                                                          <?php endforeach;  ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Cart Subtotal</th>
                                                                <td> $ <?=number_format($tong_tien) ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Shipping</th>
                                                                <td><strong>$0.00</strong></td>
                                                            </tr>
                                                            <tr class="order_total">
                                                                <th>Order Total</th>
                                                                <td><strong>$ <?=number_format($tong_tien) ?></strong></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>     
                                                </div>
                                               <input type="hidden" name="url" value="cart">
                                               <input type="hidden" name="action" value="checkout_save">
                                               <input type="hidden" name="tongtien" value="<?= $tong_tien?>">
                                               <input type="hidden" name="ma_kh" value="<?=$_SESSION['user']['ma_kh'] ?>">
                                                    <div class="order_button">
                                                        <button type="submit">Proceed to PayPal</button> 
                                                    </div>    
                                                </div> 
                                                    
                                        </div>
                                        </form> 
                                </div>        
                        </div>





<?php
include '"./view/common/footer.php'; ?>