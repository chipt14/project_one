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
                            <?php foreach ($_SESSION['myCart'] as $cart) :?>
                                <?php 
                                    if($cart[4] > 0) {
                                        $sum += ($cart[4] * $cart[5]);
                                    } else {
                                        $sum += ($cart[3] * $cart[5]);
                                    }
								?>
                                <tr class="table-row">
                                    <td class="column-1">
                                        <div class="cart-img-product b-rad-4 o-f-hidden">
                                            <img src="uploads/admin/product/<?=$cart[2]?>" alt="IMG-PRODUCT">
                                        </div>
                                    </td>
                                    <td class="column-2"><?=$cart[1]?></td>
                                    <?php if(($cart[4]) > 0) :?>
                                        <td class="column-3"><?=$cart[4]?>₫</td>
                                    <?php else :?>
                                        <td class="column-3"><?=$cart[3]?>₫</td>
                                    <?php endif ?>
                                        <td class="column-4">
                                            <div class="flex-w bo5 of-hidden w-size17">
                                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                            </button>
    
                                            <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="<?=$cart[5]?>" class="column-3">
                                            
    
                                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="column-5">
                                        <?php
                                            if(($cart[4]) > 0) {
                                                echo ($cart[4] * $cart[5]).'₫';
                                            } else {
                                                echo ($cart[3] * $cart[5]).'₫';
                                            }
                                        ?>
                                    </td>
									<td class="column-6">
										<a href="index.php?act=delcart&idcart=<?=$i?>">
											<i class="fa fa-trash"></i>
										</a>
									</td>
                                </tr>
								<?php $i += 1; ?>
                            <?php endforeach ?>
                            
					    </tbody>
                    </table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<!-- <div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div> -->

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<a href="index.php?act=delcart">
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Xóa tất cả
							</button>
						</a>
					</div>
				</div>

				<div class="size11 trans-0-4 m-t-10 m-b-10 m-r-10">
					<input type="submit" name="btn_update_cart" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="Cập nhật giỏ hàng" style="cursor: pointer;">
				</div>

                <div class="size10 trans-0-4 m-t-10 m-b-10">
                    <p class="s-text12">Tổng: <?=$sum?> ₫</p>
                </div>
			</div>
			
			<div class="flex-w flex-col-r p-t-25 p-b-25  p-l-35 p-r-60 p-lr-15-sm">
				<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
					<a href="index.php?act=bill" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="color: white;">
						Đặt hàng
					</a>
				</div>
			</div>
			
		</div>
</section>