	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(uploads/blog.jpg);">
		<h2 class="l-text2 t-center">
			Blog
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
						<!-- item blog -->
						<?php foreach ($listPost as $value) :?>

							<div class="item-blog p-b-80">
								<a href="index.php?act=blog-detail&postId=<?=$value['post_id']?>" class="item-blog-img pos-relative dis-block hov-img-zoom">
									<img src="uploads/admin/blog/<?=$value['post_img']?>" alt="IMG-BLOG">
	
									<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
										<?=$value['post_date']?>
									</span>
								</a>
	
								<div class="item-blog-txt p-t-33">
									<h4 class="p-b-11">
										<a href="index.php?act=blog-detail&postId=<?=$value['post_id']?>" class="m-text24">
											<?=$value['post_title']?>
										</a>
									</h4>
	
									<div class="s-text8 flex-w flex-m p-b-21">
										<span>
											<?=$value['blog_name']?>
											<span class="m-l-3 m-r-6">|</span>
										</span>
									</div>
	
									<p class="p-b-12">
										<?=$value['post_desc']?>
									</p>
	
									<a href="index.php?act=blog-detail&postId=<?=$value['post_id']?>" class="s-text20">
										Đọc tiếp
										<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						<?php endforeach ?>
					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-r-50">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">
						<!-- Search -->
						<div class="pos-relative bo11 of-hidden">
							<form action="index.php?act=blog" method="post" id="form1">
								<input class="s-text7 size16 p-l-23 p-r-50" type="text" name="keyw" placeholder="Tìm kiếm" required>
							</form>
							<button type="submit" form="form1" value="Submit" class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
								<i class="fs-13 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>

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


	
