<?php
  if (isset($_POST['update'])) {
    $status = $_POST['status'];
    $id = $_POST['id'];

    $query = "UPDATE bills
    SET bill_status = '$status'
    WHERE id = $id";

    pdo_execute($query);
    header("location: index.php?act=listBill");
  }
?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Danh sách đơn hàng </h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered text-center">
                      <thead>
                        <tr>
                          <th> Mã đơn hàng</th>
                          <th> Khách hàng </th>
                          <th> Ngày đặt </th>
                          <th > Số lượng hàng </th>
                          <th> Giá trị đơn hàng</th>
                          <th> Tình trạng </th>
                          <th> Hành động </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($listBill as $bill) :?>
                          <?php
                            $countProd = count_all_prod_bill_detail($bill['id']);
                            $stt = get_status($bill['bill_status']);
                          ?>
                          <tr>
                            <td> DH<?=$bill['id']?> </td>
                            <td>
                              Tên: <?=$bill['bill_name']?><br>
                              Địa chỉ: <?=$bill['bill_address']?><br>
                              SĐT: <?=$bill['bill_tel']?><br>
                              Email: <?=$bill['bill_email']?>
                            </td>
                            <td> <?=$bill['order_date']?> </td>
                            <td><?=$countProd['SUM(quantity)']?></td>
                            <td> <?=$bill['total']?> ₫ </td>
                            <td>
                            <form action="" method="post">
                              <input type="hidden" name="id" value="<?=$bill['id']?>">
                              <select name="status" id="">
                                <option value=""><?=$stt?></option>
                                <option value="0">Đang xử lí</option>
                                <option value="1">Đang giao hàng</option>
                                <option value="2">Giao thành công</option>
                              </select>
                              <input type="submit" name="update" value="Update" class="rounded btn-gradient-danger">
                            </form>
                            </td>
                            <td> 
                              <div class="template-demo" style="text-align: center;">
                                <a href="index.php?act=billDetail&id=<?=$bill['id']?>">
                                  <button type="button" class="btn btn-outline-warning btn-fw" style="max-width:100%; min-width: 50px; padding: 14px 20px;">Chi tiết</button>
                                </a>
                              </div>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>