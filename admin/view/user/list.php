<div class="content-page">
    <div class="content">
        <div class="row pt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Danh sách khách hàng</h4>


                        <div id="key-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <?php
            if (isset($message)):
                ?>
                <div class="text-danger" role="alert">
                    <h5><?= $message ?></h5>
                </div>
            <?php
            endif;
            ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div>
                                    <table id="key-datatable" class="table dt-responsive nowrap dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="key-datatable_info" style="position: relative; width: 1176px;">
                                        <thead>
                                            <tr role="row">
                                                <th>STT</th>
                                                <th>Tên tài khoản</th>
                                                <th> Tên khách hàng</th>
                                                <th> Hình ảnh</th>
                                                <th> Email</th>
                                                <th> Điện thoại</th>
                                                <th> Địa chỉ</th>
                                                <th></th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                        <?php $dem=0;  foreach($users as $user): $dem++;  ?>
                                            <tr role="row" class="odd">
                                                <td ><?=$dem ?></td>
                                                <td><?=$user['ma_kh'] ?></td>
                                                <td><?=$user['ho_ten'] ?></td>
                                                <td><img src="./assets/img/user/<?=$user['hinh'] ?>" height="100" alt=""></td>
                                                <td><?=$user['email'] ?></td>
                                                <td><?=$user['dien_thoai'] ?></td>
                                                <td><?=$user['dia_chi'] ?></td>
                                               
                                                <td class="td-actions text-right">
                                                    <a href="?controller=user&action=edit&id=<?= $user['ma_kh'] ?>"> <button class="btn btn-success">cập nhật</button></a>
                                                    <a href="?controller=user&action=delete&id=<?= $user['ma_kh'] ?>&hinh=<?= $user['hinh'] ?>"onclick="return confirm('Bạn có chắc chắn muốn xóa không !') "> <button class="btn btn-danger">delete</button></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                          
                            <p class="sub-header"><a href="?controller=user&action=add"><button type="button" class="btn btn-outline-purple btn-rounded waves-effect waves-light">Add</button></a></p>
                        </div>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div>
        </div>
    </div>
</div>