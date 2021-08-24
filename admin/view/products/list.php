<div class="content-page">
    <div class="content">
        <div class="row pt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Danh sách sản phẩm</h4>


                        <div id="key-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <!-- <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="key-datatable_length"><label>Show <select name="key-datatable_length" aria-controls="key-datatable" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="key-datatable_filter" class="dataTables_filter float-lg-right"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="key-datatable"></label></div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div>
                                    <table id="key-datatable" class="table dt-responsive nowrap dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="key-datatable_info" style="position: relative; width: 1176px;">
                                        <thead>
                                            <tr role="row">
                                                <th>STT</th>
                                                <th>Mã sản phẩm</th>
                                                <th> Tên sản phẩm</th>
                                                <th> Hình ảnh</th>
                                                <th> Đơn giá</th>
                                                <th> Ngày nhập </th>
                                                <th> Số lượng</th>
                                                <th></th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                        <?php $dem=0;  foreach($products as $product): $dem++;  ?>
                                            <tr role="row" class="odd">
                                                <td ><?=$dem ?></td>
                                                <td><?=$product['ma_hh'] ?></td>
                                                <td><?=$product['ten_hh'] ?></td>
                                                <td><img src="./assets/img/products/<?=$product['hinh'] ?>" height="100" alt=""></td>
                                                <td><?=$product['don_gia'] ?></td>
                                                <td><?=$product['ngay_nhap'] ?></td>
                                                <td><?php if($product['soluong']==1) echo 'Còn hàng' ;else{ echo 'Hết hàng';} ?></td>
                                                <td style="display: none;">$162,700</td>
                                                <td class="td-actions text-right">
                                                    <a href="?controller=product&action=edit&ma_hh=<?= $product['ma_hh'] ?>"> <button class="btn btn-success">cập nhật</button></a>
                                                    <a href="?controller=product&action=delete&ma_hh=<?= $product['ma_hh'] ?>&hinh=<?= $product['hinh'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không !') " > <button class="btn btn-danger">delete</button></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="key-datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="key-datatable_paginate">
                                        <ul class="pagination pagination-rounded float-lg-right">
                                            <li class="paginate_button page-item previous disabled" id="key-datatable_previous"><a href="#" aria-controls="key-datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="mdi mdi-chevron-left"></i></a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="key-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="key-datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="key-datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="key-datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="key-datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="key-datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                            <li class="paginate_button page-item next" id="key-datatable_next"><a href="#" aria-controls="key-datatable" data-dt-idx="7" tabindex="0" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <p class="sub-header"><a href="?controller=product&action=add"><button type="button" class="btn btn-outline-purple btn-rounded waves-effect waves-light">Add</button></a></p>
                        </div>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div>
        </div>
    </div>
</div>