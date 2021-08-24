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
                                    <input class="form-control" type="text"  placeholder="usernane" name="ma_kh">
                                </div>
                              
                                <div class="form-group">
                                    <label> Họ tên</label>
                                    <input class="form-control" type="text" placeholder="full name" name="ho_ten">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input class="form-control" type="password" placeholder="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu</label>
                                    <input class="form-control" type="password" placeholder="confirm password" name="password2">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" placeholder="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Điện thoai</label>
                                    <input class="form-control" type="number" placeholder="Điện thoại" name="dien_thoai">
                                </div>
                                <div class="form-group">
                                    <label> Địa chỉ</label>
                                    <input class="form-control" type="text" placeholder="Adress" name="dia_chi">
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
                               <input type="hidden" name="action" value="add_save">
                                <button type="submit" name="ok" href="" class="btn btn-outline-info waves-effect waves-light mt-4">Add</button>
                        </div> <!-- end card-body -->
                    </div>
                </div>
              
            </div>
        </form>
    </div>
</div>