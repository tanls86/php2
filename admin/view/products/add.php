<div class="content-page">
    <div class="content">

        <form action="?controller=product&action=add_save" enctype="multipart/form-data" method="post">
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
                                        <?php foreach ($categories as $category) : ?>
                                            <option value="<?= $category['ma_loai'] ?>"><?= $category['ten_loai'] ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input class="form-control" type="text" placeholder="Tên sản phẩm" required name="ten_sp">
                                </div>
                                <div class="form-group">
                                    <label>Đơn giá</label>
                                    <input class="form-control" type="text" placeholder="Vnd" required name="don_gia">
                                </div>
                                <div class="form-group">
                                    <label>Giảm giá</label>
                                    <input class="form-control" type="text" placeholder="%" name="giam_gia">
                                </div>
                                <div class="form-group">
                                    <label>Ngày nhập</label>
                                    <input class="form-control" type="date" name="date">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="hinhanh" class="custom-file-input" id="inputGroupFile04">
                                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                        </div>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <div class="form-control">
                                        <label for="ch">Còn hàng <input id="ch" value="1" type="radio" checked name="soluong"></label>
                                        <label for="hh">Hết hàng <input id="hh" value="0" type="radio"  name="soluong"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kiểu hàng</label>
                                    <div class="form-control">
                                        <label for="1">Bình thường <input id="1" type="radio"  checked name="kieuhang"></label>
                                        <label for="0">Đặc biệt <input id="0" type="radio"  name="kieuhang"></label>
                                    </div>

                                </div>

                        </div> <!-- end card-body -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <label>Mô tả</label>
                            <textarea rows="" name="content" class="ckediter" id="content" cols=""></textarea>

                            <button type="submit" name="ok" href="" class="btn btn-outline-info waves-effect waves-light mt-4">Add</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>