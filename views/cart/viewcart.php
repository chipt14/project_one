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
			<!-- Total -->
			<!-- <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						$39.00
					</span>
				</div>

				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</p>

						<span class="s-text19">
							Calculate Shipping
						</span>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="selection-2 select2-hidden-accessible" name="country" tabindex="-1" aria-hidden="true">
								<option>Select a country...</option>
								<option>US</option>
								<option>UK</option>
								<option>Japan</option>
							</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 151.333px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-country-qq-container"><span class="select2-selection__rendered" id="select2-country-qq-container" title="Select a country...">Select a country...</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
						</div>

						<div class="size13 bo4 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
						</div>

						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
						</div>

						<div class="size14 trans-0-4 m-b-10">
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Update Totals
							</button>
						</div>
					</div>
				</div>

				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						$39.00
					</span>
				</div>

				<div class="size15 trans-0-4">
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
				</div>
			</div> -->
		</div>
</section>