<?php
  if (isset($_POST['update'])) {
    $status = $_POST['status'];
    $id = $_POST['id'];

    $query = "UPDATE bills
    SET bill_status = '$status'
    WHERE id = $id";

    pdo_execute($query);
    header("location: index.php?act=mybill");
  }
?>

<br>
<h1 class="text-capitalize text-center  ">Đơn hàng của bạn</h1>
<br>
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th class="text-center" scope="col">Mã đơn hàng</th>
      <th class="text-center" scope="col">Ngày đặt</th>
      <th class="text-center" scope="col">Số lượng mặt hàng</th>
      <th class="text-center" scope="col">Tổng giá trị hóa đơn</th>
      <th class="text-center" scope="col">Tình trạng</th>
      <th class="text-center" scope="col"> Hủy đơn </th>
      <th class="text-center" scope="col">Xem chi tiết</th>
    </tr>
  </thead>
  <tbody>
    <?php if(is_array($listBill)) :?>
        <?php foreach ($listBill as $bill) :?>
            <?php
                $countProd = count_all_prod_bill_detail($bill['id']);
                $stt = get_status($bill['bill_status']);
            ?>
            <tr>
              <td class="text-center" scope="row">DH<?=$bill['id']?></td>
              <td><?=$bill['order_date']?></td>
              <td><?=$countProd['SUM(quantity)']?></td>
              <td><?=$bill['total']?> ₫</td>
              <td><?=$stt?></td>
              <td>
                  <form action="" method="post">
                    <input type="hidden" name="id" value="<?=$bill['id']?>">
                    <input type="hidden" name="status" value="3">
                    <?php if($stt == 'Đang xử lí') :?>
                      <button type="submit" value="Submit" name="update" va class="btn btn-danger"  onclick="return confirm('Bạn chắc chắn muốn hủy đơn hàng?');">Hủy</button>
                    <?php else :?>
                      <button type="submit" value="Submit" name="update" va class="btn btn-danger"  onclick="return confirm('Bạn chắc chắn muốn hủy đơn hàng?');" hidden>Hủy</button>
                    <?php endif ;?>
                  </form>
              </td>
              <td><a href="index.php?act=billdetail&id=<?=$bill['id']?>">Chi tiết</a></td>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
  </tbody>
</table>