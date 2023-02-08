<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tbody>
                            <tr class="table-head">
                                <th class="column-1">Ảnh</th>
                                <th class="column-2">Tên sản phẩm</th>
                                <th class="column-3">Giá</th>
                                <th class="column-4 p-l-30">Số lượng</th>
                                <th class="column-5">Thành tiền</th>
                            </tr>
                            <?php
							 	$sum = 0;
								$i = 0;
							?>
                            <?php foreach ($listViewDetail as $value) :?>
                                
                                <tr class="table-row">
                                    <td class="column-1">
                                        <div class="cart-img-product b-rad-4 o-f-hidden">
                                            <img src="uploads/admin/product/<?=$value['img']?>" alt="IMG-PRODUCT">
                                        </div>
                                    </td>
                                    <td class="column-2"><?=$value['name']?></td>
									<td class="column-3"><?=number_format($value['price'])?> ₫</td>
									<td class="column-4 p-l-60"><?=$value['quantity']?></td>
									<td class="column-5"><?=number_format($value['into_money'])?> ₫</td>
                                </tr>
								<?php $i += 1; ?>
                            <?php endforeach ?>
                            
					    </tbody>
                    </table>
				</div>
			</div>

			<div class="flex-w flex-col-r p-t-25 p-b-25  p-l-35 p-r-60 p-lr-15-sm">
				<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
					<a href="index.php?act=mybill" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="color: white;">
						Quay về
					</a>
				</div>
			</div>
		</div>
</section>