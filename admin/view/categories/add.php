<div class="content-page">
    <div class="content"><?php
            if (isset($message)):
                ?>
                <div class="text-danger" role="alert">
                    <h5><?= $message ?></h5>
                </div>
            <?php
            endif;
            ?>
        <div class="row pt-5" >
        
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form action="?controller=category&action=add_save" method="POST">
                            <div class="form-row align-items-center">
                                <div class="col-10">
                                    <label class="sr-only" for="inlineFormInput">Name</label>
                                    <input type="text" disabled class="form-control mb-2" id="inlineFormInput" placeholder="ID Auto number">
                                </div>
                                <div class="col-10">
                                  
                                    <div class="input-group mb-2">
                                       
                                        <input type="text" name="ten_loai" class="form-control" id="inlineFormInputGroup"  required placeholder="category name">
                                    </div>
                                </div>
                              
                                <div class="col-10">
                                    <button type="submit" class="btn btn-primary mb-2">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>