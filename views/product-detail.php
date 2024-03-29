	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.php" class="s-text16">
			TRANG CHỦ
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="index.php?act=product" class="s-text16">
			SẢN PHẨM
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="index.php?act=product&cateId=<?=$oneProd['cate_id']?>" class="s-text16">
			<?=$namCateProd['name']?>
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			<?=$oneProd['name']?>
		</span>
	</div>

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						
						<div class="item-slick3" data-thumb="uploads/admin/product/<?=$oneProd['img']?>">
							<div class="wrap-pic-w">
								<img src="uploads/admin/product/<?=$oneProd['img']?>" alt="IMG-PRODUCT">
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?=$oneProd['name']?>
				</h4>

				<?php if (($oneProd['sale']) > 0) :?>
					<span class="m-text17">
						<strike><?=number_format($oneProd['price'])?> ₫</strike>
					</span>
					<span class="m-text17">-</span>
					<span class="m-text17" style="color: #e65540;">
						<?=number_format($oneProd['sale'])?> ₫
					</span>
					
				<?php else :?>
					<span class="m-text17">
						<?=number_format($oneProd['price'])?> ₫
					</span>
					<?php endif ?>
					
					<p class="s-text8 p-t-10">
						Trạng thái: Còn hàng
					</p>
					
					<!--  -->
				<form action="index.php?act=addCart" method="post">
					<div class="p-t-33 p-b-60">
					<!-- <div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="size">
								<option>Choose an option</option>
								<option value="S">Size S</option>
								<option value="M">Size M</option>
								<option value="L">Size L</option>
								<option value="XL">Size XL</option>
							</select>
						</div>
					</div> -->

					<div class="p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="quantity" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
									<input type="hidden" name="id" id="" value="<?=$oneProd['id']?>">
									<input type="hidden" name="name" id="" value="<?=$oneProd['name']?>">
									<input type="hidden" name="img" id="" value="<?=$oneProd['img']?>">
									<input type="hidden" name="price" id="" value="<?=$oneProd['price']?>">
									<input type="hidden" name="sale" id="" value="<?=$oneProd['sale']?>">
									<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" type="submit" value="submit" name="addCart">
										THÊM VÀO GIỎ
									</button>
								</div>
							</div>
						</div>
					</div>
				</form>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">Mã sản phẩm: <?=$oneProd['id']?></span>
					<span class="s-text8  m-r-35">Danh mục: <?=$namCateProd['name']?></span>
					<span class="s-text8">Lượt xem: <?=$oneProd['views']?></span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Mô tả sản phẩm
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?=$oneProd['descrip']?>
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Đánh giá (<?=$countCmt?>)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<?php foreach ($listCmt as $cmt) :?>
							<div class="s-text8 flex-w flex-m p-b-21">
								<span>
									<i class="fa fa-user" aria-hidden="true"></i>
										<?=$cmt['username']?>												
									<span class="m-l-3 m-r-6">|</span>
								</span>
	
								<span>
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<?=$cmt['date_cmt']?>										
								</span>
								
								<p class="s-text8">
									<?=$cmt['content']?>
								</p>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>

		<!-- cmt -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script>
			$(document).ready(function()
			{
				$("#comment").load("views/comment/cmt.php", {prodId: <?=$oneProd['id']?>});
			});
		</script>
		<div class="col-md-6" id="comment">

		</div>

	</div>



	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					SẢN PHẨM LIÊN QUAN
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<?php foreach ($prodSame as $value) :?>
					
						<div class="item-slick2 p-l-15 p-r-15">
							<!-- Block2 -->
							<div class="block2">
								<?php if (($value['sale']) > 0) :?>
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
								<?php else :?>
                                	<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            	<?php endif ?>
									<img src="uploads/admin/product/<?=$value['img']?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<form action="index.php?act=addCart" method="post">
												<input type="hidden" name="id" id="" value="<?=$value['id']?>">
												<input type="hidden" name="name" id="" value="<?=$value['name']?>">
												<input type="hidden" name="img" id="" value="<?=$value['img']?>">
												<input type="hidden" name="price" id="" value="<?=$value['price']?>">
												<input type="hidden" name="sale" id="" value="<?=$value['sale']?>">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" type="submit" value="submit" name="addCart">
													THÊM VÀO GIỎ
												</button>
											</form>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20 text-center">
									<a href="index.php?act=product-detail&prodId=<?=$value['id']?>" class="block2-name dis-block s-text3 p-b-5">
										<?=$value['name']?>
									</a>

									<?php if (($value['sale']) > 0) :?>
										<span class="block2-oldprice m-text7 p-r-5">
											<?=number_format($value['price'])?> ₫
										</span>
		
										<span class="block2-newprice m-text8 p-r-5">
											<?=number_format($value['sale'])?> ₫
										</span>
									<?php else :?>
										<span class="block2-price m-text6 p-r-5">
											<?=number_format($value['price'])?> ₫
										</span>
									<?php endif ?>
								</div>
							</div>
						</div>
						
					<?php endforeach ?>
					
				</div>
			</div>

		</div>
	</section>