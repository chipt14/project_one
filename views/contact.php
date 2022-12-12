	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(uploads/about.jpg);">
		<h2 class="l-text2 t-center">
			Contact
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-5 p-b-30">
					<h4 class="m-text26 p-b-36 p-t-15">
							Thông tin của chúng tôi
						</h4>
					<i class="fa fa-home"><span class="m-text12 text-capitalize">Bắc Từ Liêm, Hà Nội</span></i><br>
														<p class="s-text5 text-capitalize">thứ 2 - 7 / 8h-22h</p>	
					<i class="fa fa-phone m-t-30"> <span class="m-text12">037.295.3295</span></i><br>
														<p class="s-text5 text-capitalize">thứ 2 - 7 / 8h-22h</p>			
					<i class="fa fa-envelope m-t-30"> <span class="m-text12">chiptph24352@fpt.edu.vn</span></i>
														<p class="s-text5">Gửi cho chúng tôi bất kì câu hỏi gì vào bất kì lúc nào</p>		
				</div>

				<div class="col-md-6 p-b-30">
					<form action="" method="post" class="leave-comment">
						<h4 class="m-text26 p-b-36 p-t-15">
							Gửi cho chúng tôi ý kiến của bạn
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="full-name" placeholder="Họ tên">
						</div>
						<span style="color: red;">
							<?php echo isset($error['fullname']) ? $error['fullname'] : ''; ?>
						</span>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Số điện thoại">
						</div>
						<span style="color: red;">
							<?php echo isset($error['phonenumber']) ? $error['phonenumber'] : ''; ?>
						</span>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email">
						</div>
						<span style="color: red;">
							<?php echo isset($error['email']) ? $error['email'] : ''; ?>
						</span>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Lời nhắn"></textarea>
						<span style="color: red;">
							<?php echo isset($error['message']) ? $error['message'] : ''; ?>
						</span>

						<div class="w-size25">
							<!-- Button -->
							<button type="submit" value="submit" name="save-contact" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Gửi
							</button>
						</div>

						<?php if (isset($thongbao)) :?>
							<span style="color: red;"><?=$thongbao?></span>
						<?php endif ?>
					</form>
				</div>
			</div>
		</div>
	</section>