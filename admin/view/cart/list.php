<div class="content-page">
    <div class="content">
        <div class="row pt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Danh sách đơn hàng</h4>

                        <?php
                        if (isset($message)) :
                        ?>
                            <div class="text-danger" role="alert">
                                <h5><?= $message ?></h5>
                            </div>
                        <?php
                        endif;
                        ?>
                        <div id="key-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div>
                                    <table id="key-datatable" class="table dt-responsive nowrap dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="key-datatable_info" style="position: relative; width: 1176px;">
                                        <thead>
                                            <tr role="row">
                                                <th>STT</th>
                                                <th> Mã đơn hàng</th>
                                                <th>Người mua</th>
                                                <th> Điện thoại</th>
                                                <th>Địa chỉ</th>
                                                <th> Ngày mua </th>
                                                <th>Trạng thái</th>
                                                <th> Tổng tiền</th>


                                                <th></th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php $dem = 0;
                                            foreach ($orders as $item) : $dem++;  ?>
                                                <tr role="row" class="odd">
                                                    <td><?= $dem ?></td>
                                                    <td><?= $item['ma_dh'] ?></td>
                                                    <td><?= $item['ho_ten'] ?></td>
                                                    <td><?= $item['dien_thoai'] ?></td>
                                                    <td><?= $item['dia_chi'] ?></td>
                                                    <td><?= $item['ngay_mua'] ?></td>
                                                    <td>
                                                        <?php if ($item['status'] == 1) : ?>
                                                            <input type="text" class="btn btn-info" disabled placeholder="Company" value="Đã thanh toán">
                                                        <?php endif; ?>
                                                        <?php if ($item['status'] == 0) : ?>
                                                            <a class="btn btn-danger" href="?controller=orderController&action=update&id=<?= $item['ma_dh'] ?>" onclick="return confirm('Bạn có chắc chắn muốn thay đổi trạng thái hay không !')" >Chưa thanh toán</a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>$ <?= number_format($item['tong_tien'])  ?></td>

                                                    <td class="td-actions text-right">
                                                        <a href="?controller=orderController&action=view&ma_dh=<?= $item['ma_dh'] ?>"> <button class="btn btn-success">Chi tiết</button></a>
                                                        <a href="?controller=orderController&action=delete&ma_dh=<?= $item['ma_dh'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không !') "> <button class="btn btn-danger">delete</button></a>

                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div>
        </div>
    </div>
</div>