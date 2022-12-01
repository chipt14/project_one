<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Danh sách sản phẩm </h3>
              <nav aria-label="breadcrumb">
                <a href="index.php?act=addProd">
                    <button type="button" class="btn btn-gradient-danger btn-icon-text">
                    <i class="mdi mdi-upload btn-icon-prepend"></i> Thêm sản phẩm </button>
                </a>
              </nav>
            </div>
            <form action="index.php?act=listProd" method="post">
                <input type="text" name="keyw">
                <select name="cate_id" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($listCate as $cate) :?>
                        <option value="<?=$cate['id']?>"><?=$cate['name']?></option>
                    <?php endforeach ;?>
                </select>
                <input type="submit" name="listok" value="SEARCH" class="rounded btn-gradient-danger">
            </form>
            <br><br>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered text-center">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Mã loại </th>
                          <th> Tên sản phẩm </th>
                          <th style="width: 300px;"> Hình ảnh </th>
                          <th> Mô tả </th>
                          <th> Lượt xem </th>
                          <th> Giá </th>
                          <th> Giá sale </th>
                          <th> Hành động </th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php foreach ($listProd as $key => $value) :?>
                                <tr>
                                    <td> <?= ++$key ?> </td>
                                    <td> <?= $value['cate_id'] ?></td>
                                    <td> <?=$value['name']?> </td>
                                    <td> 
                                        <img src="../uploads/admin/product/<?= $value['img'] ?>" class="mb-2 mw-100 w-100 mh-100 rounded" alt="image" style="height: 100px !important;">
                                    </td>
                                    <td> <?=$value['descrip']?> </td>
                                    <td> <?=$value['views']?> </td>
                                    <td> <?=$value['price']?> </td>
                                    <td> <?=$value['sale']?> </td>
                                    <td> 
                                        <div class="template-demo" style="text-align: center;">
                                        <a href="index.php?act=editProd&id=<?=$value['id']?>">
                                            <button type="button" class="btn btn-outline-primary btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;">Sửa</button>
                                        </a>
                                        <a href="index.php?act=deleteProd&id=<?=$value['id']?>">
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
          