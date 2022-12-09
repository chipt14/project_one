<div class="main-panel">    
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Danh sách bình luận </h3>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th> ID </th>
                        <th> Nội dung </th>
                        <th> User ID </th>
                        <th> Product ID </th>
                        <th> Ngày bình luận </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach ($listCmt as $value) :?>
                            <tr>
                                <td> <?=$value['id']?></td>
                                <td class="d-inline-block text-truncate" style="max-width: 300px;"> <?=$value['content']?> </td>
                                <td> <?=$value['user_id']?> </td>
                                <td> <?=$value['prod_id']?> </td>
                                <td> <?=$value['date_cmt']?> </td>
                                <td> 
                                    <div class="template-demo" style="text-align: center;">
                                            <a href="index.php?act=deleteCmt&id=<?=$value['id']?>">
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