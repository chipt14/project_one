<div class="main-panel">    
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Danh sách thành viên </h3>
            <nav aria-label="breadcrumb">
            <button type="button" class="btn btn-gradient-danger btn-icon-text">
                <i class="mdi mdi-upload btn-icon-prepend"></i> <a href="./add_user.html" style="text-decoration: none;">Thêm thành viên</a> </button>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> Tên đăng nhập </th>
                        <th> Mật khẩu </th>
                        <th> Email </th>
                        <th> Địa chỉ </th>
                        <th> Điện thoại </th>
                        <th> Vai trò </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listAcc as $key => $value) :?>
                            <tr>
                                <td> <?=++$key?> </td>
                                <td> <?=$value['username']?> </td>
                                <td> <?=$value['password']?> </td>
                                <td> <?=$value['email']?> </td>
                                <td> <?=$value['address']?> </td>
                                <td> <?=$value['tel']?> </td>
                                <td> <?=$value['role']?> </td>
                                <td> 
                                    <div class="template-demo" style="text-align: center;">
                                        <a href="index.php?act=editAcc&id=<?=$value['id']?>">
                                            <button type="button" class="btn btn-outline-primary btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;">Sửa</button>
                                        </a>
                                        <a href="index.php?act=deleteAcc&id=<?=$value['id']?>">
                                            <button type="button" class="btn btn-outline-warning btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;" onclick="return confirm('Bạn chắc chắn muốn xóa?');">Xóa</button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach  ?>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        </div>