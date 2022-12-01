<?php
    session_start();
    require_once './views/header.php';

    require_once './model/pdo.php';
    require_once './model/product.php';
    require_once './model/category.php';
    require_once './model/account.php';
    require_once './global.php';

    $product = load_all_product_main();
    $listCate = load_all_category();
    $top10 = load_all_product_top10();
    $newProd = load_all_product_new();
    $saleProd = load_all_product_sale();

    if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'product':
                if((isset($_POST['keyw'])) && (isset($_POST['keyw']) > 0) ) {
                    $keyw = $_POST['keyw'];
                } else {
                    $keyw = "";
                }
                if((isset($_GET['cateId'])) && (isset($_GET['cateId']) > 0) ) {
                    $cateId = $_GET['cateId'];
                }else {
                    $cateId = 0;
                }
                $listProd = load_all_product($keyw, $cateId);
                $nameCate = load_name_category($cateId);
                include_once 'views/product.php';
                break;
            case 'product-detail':
                if((isset($_GET['prodId'])) && (isset($_GET['prodId']) > 0) ) {
                    $id = $_GET['prodId'];
                    $oneProd = load_one_product($id);
                    extract($oneProd);
                    $namCateProd = load_one_product_nameCate($id);
                    extract($namCateProd);
                    $prodSame = load_product_same($id, $cate_id);
                    include_once 'views/product-detail.php';
                }else {
                    include_once 'views/main.php';
                }
                break;
            case'register':
                if(isset($_POST['register'])){
    
                    $error = [];
                    $data = [];

                    if (!empty($_POST['register']))
                    {
                        $data['user'] = isset($_POST['user']) ? $_POST['user'] : '';
                        $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
                        $data['pass'] = isset($_POST['pass']) ? $_POST['pass'] : '';
                        $data['rePass'] = isset($_POST['rePass']) ? $_POST['rePass'] : '';
                
                    
                        if (empty($data['user'])){
                            $error['user'] = 'Bạn chưa nhập tên';
                        }
                    
                        if (empty($data['email'])){
                            $error['email'] = 'Bạn chưa nhập email';
                        }
                    
                        if (empty($data['pass'])){
                            $error['pass'] = 'Bạn chưa nhập mật khẩu';
                        }
                
                        if (empty($data['rePass'])){
                          $error['rePass'] = 'Bạn chưa nhập lại mật khẩu';
                        }
                
                        if (($data['pass']) != ($data['rePass'])) {
                          $error['passrePass'] = 'Mật khẩu phải trùng';
                        }
                    
                        if (!$error){
                          $email = $_POST['email'];
                          $username = $_POST['user'];
                          $password = $_POST['pass'];
                          insert_account($email, $username, $password);
                          $thongbao = "Đã đăng ký thành công. Hãy đăng nhập!";
                        }
                        else{
                            // echo 'Dữ liệu bị lỗi, không thể lưu trữ';
                        }
                    }
                  }
                include_once 'views/account/register.php';
                break;
            case'login':
                include_once 'views/account/login.php';
                break;
            case 'blog':
                include_once 'views/blog.php';
                break;
            case 'aboutus':
                include_once 'views/about.php';
                break;
            case 'contact':
                include_once 'views/contact.php';
                break;
            default:
                require_once './views/main.php';
                break;
        }
    } else{
        require_once './views/main.php';
    }
    require_once './views/footer.php';
