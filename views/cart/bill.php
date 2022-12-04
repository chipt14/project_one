<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/banners/5bec3087ba690.jpg);">
    <h2 class="l-text2 t-center">
        pay		
    </h2>
</section>

<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <div class="p-r-20 p-r-0-lg">
                    <p class="m-text25">Sản phẩm</p>
                    <hr>
                    <?php $sum = 0 ?>
                    <?php foreach ($_SESSION['myCart'] as $cart) :?>
                        <?php 
                            if($cart[4] > 0) {
                                $sum += ($cart[4] * $cart[5]);
                            } else {
                                $sum += ($cart[3] * $cart[5]);
                            }
                        ?>
                        <div class="dis-flex">
                            <div class="col-md-4 m-t-20">
                                <div class="hov-img-zoom">
                                    <img src="uploads/admin/product/<?=$cart[2]?>" height="150">
                                </div>
                            </div>
                            <d  iv class="col-md-8 m-t-30">
                                <div class="s-text3">
                                    Tên sản phẩm: <?=$cart[1]?><br>
                                    <?php if(($cart[4]) > 0) :?>
                                        Giá sản phẩm: <?=($cart[4] * $cart[5])?> ₫<br>
                                    <?php else :?>
                                        Giá sản phẩm: <?=($cart[3] * $cart[5])?> ₫<br>
                                    <?php endif ?>
                                    Số lượng: <?=$cart[5]?><br>										
                                </div>
                            </d>
                        </div>
                    <?php endforeach ?>
                    <hr>
                    <div>
                        <form action="send_cart.php" method="post" class="flex-w flex-m w-full-sm" name="codeone" onsubmit="return checkCode()">
                            <div class="size11 bo4 m-r-10">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon_code" placeholder="Mã giảm giá">
                            </div>

                            <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                                <!-- Button -->
                                <button type="submit" name="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    Áp dụng
                                </button>
                            </div>
                        </form>
                        <span id="errCode" class="text-danger"></span>
                        <p class="s-text11">Lưu ý: Chỉ áp dụng cho một lần mua hàng</p>
                    </div>
                </div>
                <hr>
                <p class="s-text12 text-right">Tổng: <?=$sum?> ₫</p>
                </div>

                <div class="col-md-6 p-b-30">
                    <h4 class="m-text25 p-b-30">
                        Thông tin mua hàng
                        <hr>
                    </h4>
                <?php
                    if (isset($_SESSION['acc'])) {
                        $name = $_SESSION['acc']['username'];
                        $address = $_SESSION['acc']['address'];
                        $email = $_SESSION['acc']['email'];
                        $tel = $_SESSION['acc']['tel'];
                    } else {
                        $name = '';
                        $address = '';
                        $email = '';
                        $tel = '';
                    }
                ?>
                <form method="POST" action="index.php?act=billcomfirm" class="save_order" name="form" novalidate="novalidate">	
                    <input type="hidden" name="discount_code" value="">			
                    <input type="hidden" name="totalprice" value="350000">			
                    <!--  -->			
                    <div class="bo4 size15 m-b-30">
                        <input class="sizefull s-text7 p-l-22 p-r-22" value="<?=$name?>" type="text" name="name" placeholder="Họ tên">
                    </div>

                    <div class="bo4 size15 m-b-30">
                        <input class="sizefull s-text7 p-l-22 p-r-22" value="<?=$tel?>" type="text" name="tel" placeholder="Số điện thoại">
                    </div>
                
                    <div class="bo4 size15 m-b-30">
                        <input class="sizefull s-text7 p-l-22 p-r-22" value="<?=$email?>" type="text" name="email" placeholder="Địa chỉ email">
                    </div>

                    <div class="bo4 size15 m-b-30">
                        <input class="sizefull s-text7 p-l-22 p-r-22" value="<?=$address?>" type="text" name="address" placeholder="Địa chỉ nhận hàng">
                    </div>
                    
                    <!-- <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13" name="message" placeholder="Ghi chú"></textarea> -->
                        
                    <span class="text-danger" id="errcode"></span>					
                    <div class="w-size25">
                        <!-- Button -->
                        <button type="submit" name="order" value="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4 m-t-20">
                            Hoàn thành
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>