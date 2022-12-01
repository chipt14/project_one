<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(views/public/images/slide1.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Collection 2022
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							SHIRT
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="index.php?act=product&cateId=76" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(views/public/images/slide2.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Collection 2022
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							TROUSER
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="index.php?act=product&cateId=75" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(views/public/images/slide3.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Collection 2022
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							ACCESSORIES
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button -->
							<a href="index.php?act=product&cateId=74" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<?php foreach ($listCate as $cate) :?>
					<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
						<!-- block1 -->
							<div class="block1 hov-img-zoom pos-relative m-b-30">
							<img src="uploads/admin/category/<?=$cate['img']?>" alt="IMG-BENNER">

							<div class="block1-wrapbtn w-size2">
								<!-- Button -->
								<a href="index.php?act=product&cateId=<?=$cate['id']?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
									<?=$cate['name']?>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					SẢN PHẨM CỦA CHÚNG TÔI
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#featured" role="tab" aria-expanded="true">Mới</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sale" role="tab" aria-expanded="false">Giảm giá</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#top-rate" role="tab" aria-expanded="false">Xem nhiều</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-35">
					<!-- - -->
					<div class="tab-pane fade active show" id="featured" role="tabpanel" aria-expanded="true">
						<div class="row">
							<?php foreach ($newProd as $value) :?>
								<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
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
	
											<span class="block2-price m-text6 p-r-5">
												<?=$value['price']?> ₫
											</span>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>

					<!--  -->
					<div class="tab-pane fade" id="sale" role="tabpanel" aria-expanded="false">
						<div class="row">
							<?php foreach ($saleProd as $value) :?>
								<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
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
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											<?=$value['name']?>
										</a>

										<span class="block2-oldprice m-text7 p-r-5">
											<?=$value['price']?> ₫
										</span>

										<span class="block2-newprice m-text8 p-r-5">
											<?=$value['sale']?> ₫
										</span>
									</div>
								</div>
							</div>
							<?php endforeach ?>
						</div>
					</div>

					<!--  -->
					<div class="tab-pane fade" id="top-rate" role="tabpanel" aria-expanded="false">
						<div class="row">
							<?php foreach ($top10 as $value) :?>
								<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
									<!-- Block2 -->
									<div class="block2">
										<?php if(($value['sale'] > 0)) :?>
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
											<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
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
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Banner video -->
	<section class="parallax0 parallax100" style="background-image: url(uploads/bg-video-01.jpg); background-position: center 63.0729px;">
		<div class="overlay0 p-t-190 p-b-200">
			<div class="flex-col-c-m p-l-15 p-r-15">
				<span class="m-text9 p-t-45 fs-20-sm">
					The Beauty
				</span>

				<h3 class="l-text1 fs-35-sm">
					Lookbook
				</h3>

				<span class="btn-play s-text4 hov5 cs-pointer p-t-25" data-toggle="modal" data-target="#modal-video-01">
					<i class="fa fa-play" aria-hidden="true"></i>
					Play Video
				</span>
			</div>
		</div>
	</section>

	<!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					BLOG
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="./views/public/images/blog-01.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									Black Friday Guide: Best Sales & Discount Codes
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

							<p class="s-text8 p-t-16">
								Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="./views/public/images/blog-02.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									The White Sneakers Nearly Every Fashion Girls Own
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

							<p class="s-text8 p-t-16">
								Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="./views/public/images/blog-03.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									New York SS 2018 Street Style: Annina Mislin
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

							<p class="s-text8 p-t-16">
								Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Partners -->
	<section class="partners p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				ĐỐI TÁC
			</h3>
		</div>

		<div class="flex-w bg6">
				<div id="jssor_1" style="position: relative; margin: 0px auto; top: 0px; left: 0px; width: 1080px; height: 150px; overflow: hidden; visibility: visible;" data-jssor-slider="1">
					<div style="position: absolute; display: block; top: 60px; left: 0px; width: 1080px; height: 30px;"><div style="position: absolute; display: block; top: 0px; left: 0px; width: 1080px; height: 30px; transform: scale(1.001);"><div data-u="slides" style="cursor: pointer; position: absolute; top: 0px; left: 0px; width: 1080px; height: 30px; overflow: hidden; margin: 0px; padding: 0px; transform-style: flat; z-index: 0; pointer-events: none;"><div style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; z-index: 0;"></div></div><div data-u="slides" style="cursor: pointer; position: absolute; top: 0px; left: 0px; width: 1080px; height: 30px; overflow: hidden; margin: 0px; padding: 0px; transform-style: flat; z-index: 0;">
		
											<div style="top: 0px; left: -225px; width: 150px; height: 30px; position: absolute; overflow: hidden; transform-style: flat; z-index: 1;"><div style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"><img data-u="image" src="./views/public/images/brands/brand1.png" border="0" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; max-width: 10000px; z-index: 1;" data-events="auto" data-display="block"></div><div data-events="auto" data-display="block" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; transform-style: preserve-3d; z-index: 1;">
								<a href="http://www.topshop.com/" target="_blank" data-events="auto" data-display="inline" style="z-index: 1; top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block;"></a>
							</div></div>
											<div style="top: 0px; left: 5px; width: 150px; height: 30px; position: absolute; overflow: hidden; transform-style: flat; z-index: 1;"><div style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"><img data-u="image" src="./views/public/images/brands/brand2.png" border="0" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; max-width: 10000px; z-index: 1;" data-events="auto" data-display="block"></div><div data-events="auto" data-display="block" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; transform-style: preserve-3d; z-index: 1;">
								<a href="https://shop.mango.com/vn" target="_blank" data-events="auto" data-display="inline" style="z-index: 1; top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block;"></a>
							</div></div>
											<div style="top: 0px; left: 235px; width: 150px; height: 30px; position: absolute; overflow: hidden; transform-style: flat; z-index: 1;"><div style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"><img data-u="image" src="./views/public/images/brands/brand3.png" border="0" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; max-width: 10000px; z-index: 1;" data-events="auto" data-display="block"></div><div data-events="auto" data-display="block" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; transform-style: preserve-3d; z-index: 1;">
								<a href="https://www.zara.com/vn/" target="_blank" data-events="auto" data-display="inline" style="z-index: 1; top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block;"></a>
							</div></div>
											<div style="top: 0px; left: 465px; width: 150px; height: 30px; position: absolute; overflow: hidden; transform-style: flat; z-index: 1;"><div style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"><img data-u="image" src="./views/public/images/brands/brand5.png" border="0" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; max-width: 10000px; z-index: 1;" data-events="auto" data-display="block"></div><div data-events="auto" data-display="block" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; transform-style: preserve-3d; z-index: 1;">
								<a href="https://www.asos.com/" target="_blank" data-events="auto" data-display="inline" style="z-index: 1; top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block;"></a>
							</div></div>
											<div style="top: 0px; left: 695px; width: 150px; height: 30px; position: absolute; overflow: hidden; transform-style: flat; z-index: 1;"><div style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"><img data-u="image" src="./views/public/images/brands/brand4.png" border="0" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; max-width: 10000px; z-index: 1;" data-events="auto" data-display="block"></div><div data-events="auto" data-display="block" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; transform-style: preserve-3d; z-index: 1;">
								<a href="https://www.bershka.com/" target="_blank" data-events="auto" data-display="inline" style="z-index: 1; top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block;"></a>
							</div></div>
											<div style="top: 0px; left: 925px; width: 150px; height: 30px; position: absolute; overflow: hidden; transform-style: flat; z-index: 1;"><div style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"><img data-u="image" src="./views/public/images/brands/brand6.png" border="0" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; max-width: 10000px; z-index: 1;" data-events="auto" data-display="block"></div><div data-events="auto" data-display="block" style="top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block; transform-style: preserve-3d; z-index: 1;">
								<a href="https://www.riverisland.com/" target="_blank" data-events="auto" data-display="inline" style="z-index: 1; top: 0px; left: 0px; width: 150px; height: 30px; position: absolute; display: block;"></a>
							</div></div>
					</div></div></div>
				</div>
			</div>
	</section>

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Giao hàng miễn phí
				</h4>

				<a href="#" class="s-text11 t-center">
					Miễn phí giao hàng cho tất cả đơn hàng mua tại shop
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					7 ngày đổi trả
				</h4>

				<span class="s-text11 t-center">
					Với 7 ngày đầu tiên bạn có thể đổi trả cho cửa hàng
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Thời gian mở cửa
				</h4>

				<span class="s-text11 t-center">
					Mở cửa từ thứ 2 - 7 / 8h-22h
				</span>
			</div>
		</div>
	</section>