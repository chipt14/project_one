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
              <td><a href="index.php?act=billdetail&id=<?=$bill['id']?>">Chi tiết</a></td>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
  </tbody>
</table>