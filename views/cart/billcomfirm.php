<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(uploads/cart.jpg);">
    <h2 class="l-text2 t-center">
        pay		
    </h2>
</section>

<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <div class="bo9 w-size10 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
            <h5 class="m-text20 p-b-24">
                Cảm ơn quý khách đã đặt hàng!
            </h5>
            <?php
                if ((isset($bill)) && (is_array($bill))) {
                    extract($bill);
                }
            ?>
            <!--  -->
            <div class="flex-w flex-sb-m p-b-12">
                <span class="s-text18 w-size19 w-full-sm">
                    Mã đơn hàng: 
                </span>

                <span class="m-text21 w-size20 w-full-sm">
                    DH<?=$bill['id']?>
                </span>
            </div>

            <!--  -->
            <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                <span class="s-text18 w-size19 w-full-sm">
                    Ngày đặt hàng:
                </span>

                <div class="w-size20 w-full-sm">
                    <p class="s-text8 p-b-23">
                        <?=$bill['order_date']?>
                    </p>
                </div>
            </div>

            <!--  -->
            <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                <span class="s-text18 w-size19 w-full-sm">
                    Thông tin đặt hàng:
                </span>

                <div class="w-size20 w-full-sm">
                    <p class="s-text8 p-b-23">
                        Người đặt hàng: <?=$bill['bill_name']?> <br>
                        <hr>
                        Địa chỉ: <?=$bill['bill_address']?> <br>
                        <hr>
                        Email: <?=$bill['bill_email']?> <br>
                        <hr>
                        SĐT: <?=$bill['bill_tel']?>
                    </p>
                </div>
            </div>

            <!--  -->
            <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                <span class="s-text18 w-size19 w-full-sm">
                    Shipping:
                </span>

                <div class="w-size20 w-full-sm">
                    <p class="s-text8 p-b-23">
                        Trả tiền khi nhận hàng.
                    </p>
                </div>
            </div>

            <!--  -->

            <!--  -->
            <div class="flex-w flex-sb-m p-t-26 p-b-30">
                <span class="m-text22 w-size19 w-full-sm">
                    Thành tiền:
                </span>

                <span class="m-text21 w-size20 w-full-sm">
                    <?=number_format($bill['total'])?>₫
                </span>
            </div>

            <div class="size15 trans-0-4">
                <!-- Button -->
                <a href="index.php">
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Checkout
                    </button>
                </a>
            </div>
		</div>
    </div>
</section>