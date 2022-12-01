<div class="main-panel">
    <div class="content-wrapper">
                <div class="page-header">
                <h3 class="page-title">Danh sách danh mục</h3>
                <nav aria-label="breadcrumb">
                    <a href="index.php?act=addCate">
                        <button type="button" class="btn btn-gradient-danger btn-icon-text">
                        <i class="mdi mdi-upload btn-icon-prepend"></i> Thêm danh mục </button>
                    </a>
                </nav>
                </div>
                <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>MÃ</th>
                                    <th>TÊN</th>
                                    <th style="width: 300px;"> Hình ảnh </th>
                                    <th>HÀNH ĐỘNG</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listCate as $key => $value) :?>
                                    <tr>
                                        <td><?=++$key?></td>
                                        <td><?=$value['id']?></td>
                                        <td> 
                                            <p><?=$value['name']?></p>
                                        </td>
                                        <td> 
                                            <img src="../uploads/admin/category/<?= $value['img'] ?>" class="mb-2 mw-100 w-100 mh-100 rounded" alt="image" style="height: 100px !important;">
                                        </td>
                                        <td> 
                                            <div class="template-demo" style="text-align: center;">
                                            <a href="index.php?act=editCate&id=<?=$value['id']?>">
                                                <button type="button" class="btn btn-outline-primary btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;">Sửa</button>
                                            </a>
                                            <a href="index.php?act=deleteCate&id=<?=$value['id']?>">
                                                <button type="button" class="btn btn-outline-warning btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;" onclick="return confirm('Bạn chắc chắn muốn xóa?');">Xóa</button>
                                            </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ;?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>