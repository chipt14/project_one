<footer class="bg6 p-b-43 p-l-45 p-r-45">
		<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h4 class="s-text12 p-b-13 p-t-40">
							thông tin về chúng tôi
						</h4>
	
						<div>
							<p class="s-text7 w-size27 text-justify">
								Bạn có bất kì câu hỏi gì. Hãy cho chúng tôi biết tại cửa hàng Bắc Từ Liêm, Hà Nội hoặc gọi cho chúng tôi theo số 037.295.3295 
							</p>
	
							<div class="flex-m p-t-30">
								<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
								<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
								<a href="#" class="fs-18 color1 p-r-20 fa fa-twitter"></a>
								<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
							</div>
						</div>
					</div>
					<div class="col-md-2 text-center" id="menu_footer">
						<h4 class="s-text12 p-b-10 p-t-40">
							liên kết
						</h4>
	
						<ul>
							<li class="p-b-9">
								<a href="index.php" class="s-text7 text-uppercase">Trang chủ</a>
							</li>
							<li class="p-b-9">
								<a href="index.php?act=product" class="s-text7 text-uppercase">Sản phẩm</a>
							</li>
							<li class="p-b-9">
								<a href="index.php?act=blog" class="s-text7 text-uppercase">Blog</a>
							</li>
							<li class="p-b-9">
								<a href="index.php?act=aboutus" class="s-text7 text-uppercase">Giới thiệu</a>
							</li>
							<li class="p-b-9">
								<a href="index.php?act=contact" class="s-text7 text-uppercase">Liên hệ</a>
							</li>
						</ul>
					</div>
					<div class="col-md-6 p-t-40">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.7244897881096!2d105.75024041391481!3d21.043707092646038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ec772374f1%3A0x9e15ccfa0d1c5e34!2zMTggUC4gS2nhu4F1IE1haSwgUGjDumMgRGnhu4VuLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1667838730371!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				<div class="col-md-12">
					<div class="t-center s-text8 p-t-40">
						Copyright © 2022 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Fashe</a>
					</div>
				</div>
			</div>  
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script type="text/javascript" src="./views/public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./views/public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./views/public/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="./views/public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./views/public/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./views/public/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="./views/public/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./views/public/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./views/public/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./views/public/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="./views/public/js/main.js"></script>

</body>
</html>