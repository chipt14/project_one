<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Đơn hàng chi tiết </h3>
              <nav aria-label="breadcrumb">
                <a href="index.php?act=listBill">
                  <button type="button" class="btn btn-gradient-danger btn-icon-text">
                    <i class="mdi mdi-upload btn-icon-prepend"></i> Trở lại </button>
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
                          <th style="width: 150px;"> Ảnh </th>
                          <th> Tên sản phẩm </th>
                          <th> Giá </th>
                          <th> Số lượng </th>
                          <th> Thành tiền </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($listViewDetail as $value) :?>
                         <tr>
                            <td>
                                <img src="../uploads/admin/product/<?= $value['img'] ?>" alt="" class="mb-2 mw-100 w-100 mh-100 rounded" alt="image" style="height: 100px !important;">
                            </td>
                            <td><?=$value['name']?></td>
                            <td><?=$value['price']?> ₫</td>
                            <td><?=$value['quantity']?></td>
                            <td><?=$value['into_money']?> ₫</td>
                         </tr>
                      <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>