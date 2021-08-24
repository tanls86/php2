<div class="content-page">
    <div class="content">

        <form action="?controller=product" enctype="multipart/form-data" method="post">
            <div class="row pt-5">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="page-title">Thêm mới sản phẩm</h4>
                        
                                <div class="form-group">
                                    <label>Mã sản phẩm</label>
                                    <input class="form-control" type="text" disabled placeholder="Auto number" name="">
                                </div>
                                <div class="form-group">
                                    <label>Loại hàng</label>
                                    <select name="ma_loai" class="form-control pro-edt-select form-control-primary">
                                        <?php foreach ($categories as $category) : if($category['ma_loai']==$ma_loai){ ?>
                                            <option value="<?= $category['ma_loai'] ?>" selected><?= $category['ten_loai'] ?></option>
                                        <?php }else{    ?>   
                                            <option value="<?= $category['ma_loai'] ?>"><?= $category['ten_loai'] ?></option>
                                        <?php } endforeach; ?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input class="form-control" type="text" value="<?=$ten_hh?>" required placeholder="Tên sản phẩm" name="ten_sp">
                                </div>
                                <div class="form-group">
                                    <label>Đơn giá</label>
                                    <input class="form-control" type="number" value="<?=$don_gia ?>" min="1" placeholder="Vnd" name="don_gia">
                                </div>
                                <div class="form-group">
                                    <label>Giảm giá</label>
                                    <input class="form-control" type="text" value="<?=$giam_gia ?>" placeholder="%" name="giam_gia">
                                </div>
                                <div class="form-group">
                                    <label>Ngày nhập</label>
                                    <input class="form-control" type="date" value="<?=$ngay_nhap ?>" name="date">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh: (=<?=$hinh ?>=)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="hinhanh" class="custom-file-input" id="inputGroupFile04">
                                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                            <input type="hidden" name="hinhcu" value="<?=$hinh ?>">
                                        </div>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <div class="form-control">
                                        <label for="ch">Còn hàng <input id="ch" value="1" type="radio" <?php if($soluong ==1){echo 'checked';}else{ echo '';} ?> name="soluong"></label>
                                        <label for="hh">Hết hàng <input id="hh" value="0" type="radio" <?php if($soluong ==0){echo 'checked';}else{ echo '';} ?>  name="soluong"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kiểu hàng</label>
                                    <div class="form-control">
                                        <label for="1">Bình thường <input id="1" value="1" type="radio" placeholder="" <?php if($dac_biet ==1){echo 'checked';}else{ echo '';} ?> name="kieuhang"></label>
                                        <label for="0">Đặc biệt <input id="0" value="0" type="radio" placeholder="" <?php if($dac_biet ==0){echo 'checked';}else{ echo '';} ?> name="kieuhang"></label>
                                    </div>

                                </div>

                        </div> <!-- end card-body -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <label>Mô tả</label>
                            <textarea rows="" name="content" class="ckediter" id="content" cols=""><?=$mo_ta ?></textarea>
                            <input type="hidden" name="action" value="edit_save">
                            <input type="hidden" name="ma_hh" value="<?=$ma_hh ?>">
                            <button type="submit" name="ok" href="" class="btn btn-outline-info waves-effect waves-light mt-4">Update</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>