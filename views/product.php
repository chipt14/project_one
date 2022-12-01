

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(uploads/banner12.jpg);">
		<h2 class="l-text2 t-center">
			Product
		</h2>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							DANH MỤC
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="index.php?act=product" class="s-text13 active1">
									TẤT CẢ
								</a>
							</li>

							<?php foreach ($listCate as $value) :?>
								<li class="p-t-4">
									<a href="index.php?act=product&cateId=<?=$value['id']?>" class="s-text13">
										<?=$value['name']?>
									</a>
								</li>
							<?php endforeach ?>
						</ul>

						<!--  -->
						<div class="search-product pos-relative bo4 of-hidden">
							<form action="index.php?act=product" method="post" id="form1">
								<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="keyw" placeholder="Tìm kiếm sản phẩm..." required>
							</form>
							<button type="submit" form="form1" value="Submit" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					

					<!-- Product -->
					<div class="row">
						<?php foreach ($listProd as $value) :?>
							<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<?php if($value['sale'] > 0) :?>
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
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													THÊM VÀO GIỎ
												</button>
											</div>
										</div>
									</div>
	
									<div class="block2-txt p-t-20 text-center">
										<a href="index.php?act=product-detail&prodId=<?=$value['id']?>" class="block2-name dis-block s-text3 p-b-5">
											<?=$value['name']?>
										</a>
	
										<?php if(($value['sale'] > 0)) :?>
											<span class="block2-oldprice m-text7 p-r-5">
												<?=$value['price']?> ₫
											</span>

											<span class="block2-newprice m-text8 p-r-5">
												<?=$value['sale']?> ₫
											</span>
										<?php else :?>
											<span class="block2-price m-text6 p-r-5">
												<?=$value['price']?> ₫
											</span>
										<?php endif ;?>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
	</section>