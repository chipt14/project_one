	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.php" class="s-text16">
			TRANG CHỦ
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="index.php?act=blog" class="s-text16">
			BLOG
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="index.php?act=blog&cateId=<?=$onePost['blog_id']?>" class="s-text16">
			<?=$nameCate['blog_name']?>
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			<?=$onePost['post_title']?>
		</span>
	</div>

	<!-- content page -->
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">
							<div class="blog-detail-img wrap-pic-w">
								<img src="uploads/admin/blog/<?=$onePost['post_img']?>" alt="IMG-BLOG">
							</div>

							<div class="blog-detail-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									<?=$onePost['post_title']?>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										<?=$onePost['post_date']?>
									</span>
								</div>

								<p class="p-b-25">
									<?=$onePost['post_content']?>
								</p>
								
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="rightbar">
						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Danh mục
						</h4>

						<ul>
							<li class="p-t-6 p-b-8">
								<a href="index.php?act=blog" class="s-text13 p-t-5 p-b-5">
									TẤT CẢ
								</a>
							</li>
							<?php foreach ($listBlog as $blog) :?>
								<li class="p-t-6 p-b-8 bo6">
									<a href="index.php?act=blog&cateId=<?=$blog['blog_id']?>" class="s-text13 p-t-5 p-b-5">
										<?=$blog['blog_name']?>
									</a>
								</li>
							<?php endforeach ;?>
						</ul>

						<!-- Featured Products -->
						<h4 class="m-text23 p-t-65 p-b-34">
							Sản phẩm nổi bật
						</h4>

						<ul class="bgwhite">
							<?php foreach ($top10 as $value) :?>
								<li class="flex-w p-b-20">
									<a href="index.php?act=product-detail&prodId=<?=$value['id']?>" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
										<img src="uploads/admin/product/<?=$value['img']?>" alt="IMG-PRODUCT">
									</a>
	
									<div class="w-size23 p-t-5">
										<a href="index.php?act=product-detail&prodId=<?=$value['id']?>" class="s-text20">
											<?=$value['name']?>
										</a>
	
										<span class="dis-block s-text17 p-t-6">
											<?=$value['price']?> ₫
										</span>
									</div>
								</li>
							<?php endforeach ;?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>