<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fashe</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" href="./views/public/css/style.css">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="./views/public/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./views/public/css/util.css">
	<link rel="stylesheet" type="text/css" href="./views/public/css/main.css">
<!--===============================================================================================-->

</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="https://www.facebook.com/thanhchi.pham.14?mibextid=LQQJ4d" class="topbar-social-item fa fa-facebook"></a>
					<a href="https://www.instagram.com/haygoitoilachi/" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Miễn phí giao hàng cho tất cả đơn hàng
				</span>

				<div class="topbar-child2">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
					</svg>
					<span class="px-1">037.295.3295</span>
					<a href="tel:+84 37 295 3295" class="tooltip tooltipstered">
			     		<i class="icon-phone" style="font-size:16px;"></i><span>+84 37 295 3295</span>
			  		</a>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="./views/public/images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">TRANG CHỦ</a>
							</li>

							<li>
								<a href="index.php?act=product">SẢN PHẨM</a>
								<ul class="sub_menu">
									<?php foreach ($listCate as $cate) :?>
										<li class="text-uppercase"><a href="index.php?act=product&cateId=<?=$cate['id']?>"><?=$cate['name']?></a></li>
									<?php endforeach ?>
								</ul>
							</li>

							<li>
								<a href="index.php?act=blog">BLOG</a>
								<ul class="sub_menu">
									<?php foreach ($listBlog as $blog) :?>
										<li class="text-uppercase"><a href="index.php?act=blog&cateId=<?=$blog['blog_id']?>"><?=$blog['blog_name']?></a></li>
									<?php endforeach ?>
								</ul>
							</li>

							<li>
								<a href="index.php?act=aboutus">GIỚI THIỆU</a>
							</li>

							<li>
								<a href="index.php?act=contact">LIÊN HỆ</a>
							</li>

							<?php if (!isset($_SESSION['acc'])) :?>
								<li> | </li>
	
								<li>
									<form action="index.php?act=mybill" method="post" name="search">
										<input type="text" name="keyw" placeholder="Tìm kiếm đơn hàng" required>
										<button type="submit" value="submit" name="btn-submit"><i class="fa fa-search"></i></button>
									</form>
								</li>
							<?php endif ;?>
							
						</ul>
					</nav>
				</div>
				<!-- Header Icon -->
				<div class="header-icons">
					<?php if (isset($_SESSION['acc'])) { 
						extract($_SESSION['acc']);
					?>
						<div class="wrap_menu">
							<nav class="menu">
								<ul class="main_menu">
									<li>
										<span>Xin chào! <?=$username?></span>
										<ul class="sub_menu">
											<li><a href="index.php?act=editAcc">Cập nhật tài khoản</a></li>
											<li><a href="index.php?act=mybill">Đơn hàng của bạn</a></li>
											<?php if($role_id == 1) { ?>
												<li><a href="admin/index.php">Đăng nhập Admin</a></li>
											<?php } ?>
											<li><a href="index.php?act=logout">Thoát</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					<?php
						} else {
					?>
						<a href="index.php?act=login" class="header-wrapicon1 dis-block">
							<i class="fa fa-sign-in fa-lg pt-2" title="Đăng nhập / Đăng kí"></i>
						</a>
					<?php } ?>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<a href="index.php?act=viewcart">
							<img src="./views/public/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON" title="Giỏ hàng">
						</a>
						<!-- <span class="header-icons-noti">0</span> -->
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="./views/public/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="index.php?act=login" class="header-wrapicon1 dis-block">
						<i class="fa fa-sign-in fa-lg pt-2" title="Đăng nhập / Đăng kí"></i>
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<a href="index.php?act=viewcart">
							<img src="./views/public/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						</a>
						<span class="header-icons-noti">0</span>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
                            Miễn phí giao hàng cho tất cả đơn hàng
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
                            <span>037.295.3295</span>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php">Trang chủ</a>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php">Sản phẩm</a>
						<ul class="sub-menu">
							<?php foreach ($listCate as $cate) :?>
								<li class="text-uppercase"><a href="index.php?act=product&cateId=<?=$cate['id']?>"><?=$cate['name']?></a></li>
							<?php endforeach ?>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php?act=blog">Blog</a>
						<ul class="sub-menu">
							<?php foreach ($listBlog as $blog) :?>
								<li class="text-uppercase"><a href="index.php?act=product&cateId=<?=$blog['blog_id']?>"><?=$blog['blog_name']?></a></li>
							<?php endforeach ?>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php?act=aboutus">Giới thiệu</a>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php?act=contact">Liên hệ</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<?php if(isset($_SESSION['acc'])) :?>
	<?php else :?>
		<div class="flex-c-m size22 bg0 s-text21 pos-relative" id="discount_">
			<span>
				Đăng ký để nhận mã giảm giá 10% cho lần mua hàng đầu tiên tại shop
				<a href="index.php?act=register" class="s-text22 hov6 p-l-5">
					Đăng ký ngay
				</a>
			</span>
	
			<button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">
				<i class="fa fa-remove fs-13" aria-hidden="true"></i>
			</button>
		</div>
	<?php endif ?>