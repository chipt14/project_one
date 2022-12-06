<?php
    session_start();
    ob_start();
    include_once '../../model/pdo.php';
    include_once '../../model/comment.php';

    $prodId = $_REQUEST['prodId'];
 ?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="POST" name="formcmt" onsubmit="">
    <input type="hidden" name="productId" value="20">
    <input type="hidden" name="productlq" value="3">
    <h4 class="m-text26 p-b-36 p-t-15">
        Bình luận về sản phẩm
    </h4>
    <input type="hidden" name="prodId" value="<?=$prodId?>">
    <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13" name="content" placeholder="Viết đánh giá" required></textarea>
    <span class="text-danger" id="errcontent"></span>
    <div class="w-size25">
        <button type="submit" value="submit" name="btn_cmt" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4 m-t-20 btn-cmt">
            Bình luận
        </button>
    </div>
    <div class="m-t-10"></div>
    <a href="#" id="err" class="text-danger s-text2"></a>
</form>

<?php
    if (isset($_POST['btn_cmt']) && isset($_POST['btn_cmt'])) {

        $content = $_POST['content'];
        $userId = $_SESSION['acc']['id'];
        $prodId = $_POST['prodId'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $dateCmt = date('d/m/Y H:i:s'); 

        insert_comment($content, $userId, $prodId, $dateCmt);

        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
?>
