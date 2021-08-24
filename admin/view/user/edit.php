<div class="content-page">
    <div class="content">

        <form action="?controller=user" enctype="multipart/form-data" method="post">
            <div class="row pt-5">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="page-title">Thêm mới khách hàng</h4>
                        
                                <div class="form-group">
                                    <label>Tên tài khoản</label>
                                    <input class="form-control" type="text" disabled value="<?=$ma_kh ?>"  placeholder="usernane" name="ma_kh">
                                </div>
                              
                                <div class="form-group">
                                    <label> Họ tên</label>
                                    <input class="form-control" type="text"value="<?=$ho_ten ?>" placeholder="full name" name="ho_ten">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input class="form-control" type="password"  placeholder="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu</label>
                                    <input class="form-control" type="password" placeholder="confirm password" name="password2">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email"value="<?=$email ?>" placeholder="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Điện thoai</label>
                                    <input class="form-control" type="number" value="<?=$dien_thoai ?>" placeholder="Điện thoại" name="dien_thoai">
                                </div>
                                <div class="form-group">
                                    <label> Địa chỉ</label>
                                    <input class="form-control" type="text" placeholder="Adress"value="<?=$dia_chi ?>" name="dia_chi">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh :(=<?=$hinh ?>=)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="hinhanh" class="custom-file-input" id="inputGroupFile04">
                                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                            <input type="hidden" name="hinhcu" value="<?=$hinh ?>">
                                        </div>  
                                    </div>
                                </div>
                               <input type="hidden" name="action" value="edit_save">
                                <button type="submit" name="ok" href="" class="btn btn-outline-info waves-effect waves-light mt-4">Update</button>
                        </div> <!-- end card-body -->
                    </div>
                </div>
              
            </div>
        </form>
    </div>
</div>