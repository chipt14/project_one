<?php
    session_start();
    require_once './views/header.php';

    // require_once './model/pdo.php';
    // require_once './model/product.php';
    // require_once './model/category.php';
    // require_once './model/user.php';
    // require_once './global.php';

    // $sanpham = load_all_product_main();
    // $dsdm = load_all_category();
    // $top10 = load_all_product_top10();

    // if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    //     $act = $_GET['act'];
    //     switch ($act) {
    //         case 'product':
    //             if((isset($_POST['keyw'])) && (isset($_POST['keyw']) > 0) ) {
    //                 $keyw = $_POST['keyw'];
    //             } else {
    //                 $keyw = "";
    //             }
    //             if((isset($_GET['cate_id'])) && (isset($_GET['cate_id']) > 0) ) {
    //                 $cateId = $_GET['cate_id'];
    //             }else {
    //                 $cateId = 0;
    //             }
    //             $listProd = load_all_product($keyw, $cateId);
    //             $nameCate = load_ten_danhmuc($cateId);
    //             include_once 'views/product.php';
    //             break;
    //         case 'product-detail':
    //             if((isset($_GET['idsp'])) && (isset($_GET['idsp']) > 0) ) {
    //                 $id = $_GET['idsp'];
    //                 $onesp = load_one_product($id);
    //                 extract($onesp);
    //                 $spcl = load_product_same($id, $cateId);
    //                 include_once 'views/product-detail.php';
    //             }else {
    //                 include_once 'views/main.php';
    //             }
    //             break;
    //         case 'dangky':
    //             if((isset($_POST['dangky'])) && (isset($_POST['dangky']))) {
    //                 $email = $_POST['email'];
    //                 $user = $_POST['user'];
    //                 $pass = $_POST['pass'];
    //                 insert_taikhoan($email, $user, $pass);
    //                 $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để bình luận!";
    //             }
    //             include_once 'views/taikhoan/dangky.php';
    //             break;
    //         case 'dangnhap':
    //             if((isset($_POST['dangnhap'])) && (isset($_POST['dangnhap']))) {
    //                 $user = $_POST['user'];
    //                 $pass = $_POST['pass'];
    //                 $checkUser = check_user($user, $pass);
    //                 if (is_array($checkUser)) {
    //                     $_SESSION['user'] = $checkUser;
    //                     // $thongbao = "Bạn đã đăng nhập thành công!";
    //                     header('Location: index.php');
    //                 } else {
    //                     $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra lại!";
    //                 }
    //             }
    //             include_once 'views/gioithieu.php';
    //             break;
    //         case 'aboutus':
    //             include_once 'views/about.php';
    //             break;
    //         case 'contact':
    //             include_once 'views/contact.php';
    //             break;
    //         default:
    //             require_once './views/main.php';
    //             break;
    //     }
    // } else{
    //     require_once './views/main.php';
    // }
    require_once './views/footer.php';
