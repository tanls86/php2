<?php include "./view/common/header.php"; ?>
<?php include "./view/common/menu.php"; ?>

<div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.html">home</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>contact</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contact_area">
                            <div class="row">
                                   <div class="col-lg-6 col-md-12">
                                       <div class="contact_message">
                                            <h3>Tell us your project</h3>   
                                            <form id="contact-form" method="POST" action="?url=contact">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input name="name" placeholder="Name *" type="text">    
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input name="email" placeholder="Email *" type="email">    
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <input name="subject" placeholder="Subject *" type="text">   
                                                    </div>
                                                    

                                                    <div class="col-12">
                                                        <div class="contact_textarea">
                                                            <textarea placeholder="Message *" name="message" class="form-control2"></textarea>     
                                                        </div>   
                                                        <input type="hidden" name="action" value="send_mail">
                                                        <button type="submit"> Send Message </button>  
                                                    </div> 
                                                    <div class="col-12">
                                                        <p class="form-messege">
                                                    </p></div>
                                                </div>
                                            </form>    
                                        </div> 
                                   </div>
                                  
                                   <div class="col-lg-6 col-md-12">
                                       <div class="contact_message contact_info">
                                            <h3>contact us</h3>    
                                             <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                                            <ul>
                                                <li><i class="fa fa-fax"></i>  Address : No 40 Baria Sreet 133/2 NewYork City</li>
                                                <li><i class="fa fa-phone"></i> <a href="#">Infor@roadthemes.com</a></li>
                                                <li><i class="fa fa-envelope-o"></i> 0(1234) 567 890</li>
                                            </ul>        
                                            <h3><strong>Working hours</strong></h3>
                                            <p><strong>Monday – Saturday</strong>:  08AM – 22PM</p>       
                                        </div> 
                                   </div>
                               </div>
                        </div>

<?php include "./view/common/footer.php"; ?>