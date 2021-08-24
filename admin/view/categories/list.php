<div class="content-page">
    <div class="content">      
        <div class="row pt-5">
  
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Danh mục loại hàng</h4>
                            <p class="sub-header"><a href="?controller=category&action=add"><button type="button" class="btn btn-outline-purple btn-rounded waves-effect waves-light">Add</button></a></p>
                            <?php
            if (isset($message)):
                ?>
                <div class="text-danger" role="alert">
                    <h5><?= $message ?></h5>
                </div>
            <?php
            endif;
            ?>
                            <div class="table-responsive">
                                <table class="table table-hover table-dark mb-0">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>ID</th>
                                            <th> Name</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                      
                                        $dem = 0;
                                        foreach ($categories as $category) :
                                            $dem++; ?>
                                            <tr>
                                                <th scope="row"><?= $dem ?></th>
                                                <td><?= $category['ma_loai'] ?></td>
                                                <td><?= $category['ten_loai'] ?></td>
                                                <td class="td-actions text-right">
                                                    <a href="?controller=category&action=edit&ma_loai=<?= $category['ma_loai'] ?>"> <button class="btn btn-success">cập nhật</button></a>
                                                    <a href="?controller=category&action=delete&ma_loai=<?= $category['ma_loai'] ?>" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ?')"> <button class="btn btn-danger">delete</button></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                    </div> <!-- end card-body -->
                </div>
            </div>
        </div>
    </div>
</div>