<div class="content-page">
    <div class="content">
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Danh mục loại hàng</h4>
                            <p class="sub-header"><a href="?controller=category&action=add"><button type="button" class="btn btn-outline-purple btn-rounded waves-effect waves-light">Add</button></a></p>
                            <form action="?controller=category&action=edit_save" method="POST">
                                <div class="form-row align-items-center">
                                    <div class="col-10">
                                        <label class="sr-only" for="inlineFormInput">Name</label>
                                        <input type="text" disabled class="form-control mb-2" id="inlineFormInput" placeholder="ID Auto number">
                                    </div>
                                    <div class="col-10">

                                        <div class="input-group mb-2">

                                            <input type="text" name="ten_loai" value="<?= $ten_loai ?>" class="form-control" id="inlineFormInputGroup" required>
                                            <input type="hidden" name="ma_loai" value="<?= $ma_loai ?>" class="form-control" id="inlineFormInputGroup" required>
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <button type="submit" class="btn btn-primary mb-2">Add</button>
                                    </div>
                                </div>
                            </form>


                    </div> <!-- end card-body -->
                </div>
            </div>
        </div>
    </div>
</div>