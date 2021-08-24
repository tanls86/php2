<div class="content-page">
    <div class="content">
        <div class="row pt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Hóa đơn chi tiết</h4>


                        <div id="key-datatable_wrapper" class="table-border dataTables_wrapper dt-bootstrap4 no-footer">
                        
                            <div class="row">
                                <div class="col-sm-12">
                                    <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div>
                                   <table>
                                   <tr>
                                            <th></th>
                                            <th colspan="1" >Người nhận :</th>
                                            <td><?=$order[0]['ho_ten'] ?></td>
                                            <td colspan="5"></td>
                                            </tr>
                                            <tr>
                                            <th></th>
                                            <th colspan="1" >Địa chỉ :</th>
                                            <td><?=$order[0]['dia_chi'] ?></td>
                                            <td colspan="5"></td>
                                            </tr>
                                            <tr>
                                            <th></th>
                                            <th colspan="1" >Điện thoại :</th>
                                            <td>0<?=$order[0]['dien_thoai'] ?></td>
                                            <td colspan="5"></td>
                                            </tr>
                                            <tr>
                                            <th></th>
                                            <th colspan="1" >Ghi chú :</th>
                                            <td><?=$order[0]['ghi_chu'] ?></td>
                                            <td colspan="5"></td>
                                            </tr>
                                   </table>
                                   
                                    <table border="1" id="key-datatable" class="table dt-responsive nowrap dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="key-datatable_info" style="position: relative; width: 1176px;">
                                        <thead>
                                        
                                        
                                            <tr role="row">
                                               
                                                <th> Mã đơn hàng</th>
                                                 <th>Tên mặt hàng</th>
                                                <th>Số lượng</th>
                                                <th> Thành tiền </th>
                                                 
                                               
                                                
                                               
                                               
                                            </tr>
                                        </thead>


                                        <tbody>
                                        <?php foreach($order as $item): ?>
                                            <tr role="row" class="odd">
                                               <td><?=$item['ma_dh']?></td>
                                               <td><?=$item['ten_hh']?></td>
                                               <td><?=$item['so_luong']?></td>
                                               <td>$ <?php $total= $item['so_luong']*$item['gia']; echo number_format($total);?></td>
                                               
                                              
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <td></td>
                                            <th colspan="">Tổng tiền</th>
                                            <td>$ <?=number_format($order[0]['tong_tien'] )?> </td>
                                            <td></td>
                                          
                                            </tr>
                                        </tfoot>
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