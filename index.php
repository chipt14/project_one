<?php
    session_start();
    ob_start();

    require_once './model/pdo.php';
    require_once './model/product.php';
    require_once './model/category.php';
    require_once './model/account.php';
    require_once './model/cart.php';
    require_once './model/comment.php';
    require_once './model/contact.php';


    if(!isset($_SESSION['myCart'])) {
        $_SESSION['myCart'] = [];
    }
    
    $listCate = load_all_category();
    $product = load_all_product_main();
    $top10 = load_all_product_top10();
    $newProd = load_all_product_new();
    $saleProd = load_all_product_sale();
    
    require_once './views/header.php';
    
    
    if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) 
        {
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
                    $listCmt = load_all_comment($id);
                    $countCmt = count_comment($id);
                    include_once 'views/product-detail.php';
                }else {
                    include_once 'views/main.php';
                }
                break;
            case 'blog':
                include_once 'views/blog.php';
                break;
            case 'aboutus':
                include_once 'views/about.php';
                break;
            case 'contact':
                if(isset($_POST['save-contact']))
                {
                    $error = [];
                    $data = [];

                    if (!empty($_POST['save-contact']))
                    {
                        $data['fullname'] = isset($_POST['full-name']) ? $_POST['full-name'] : '';
                        $data['phonenumber'] = isset($_POST['phone-number']) ? $_POST['phone-number'] : '';
                        $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
                        $data['message'] = isset($_POST['message']) ? $_POST['message'] : '';
                
                    
                        if (empty($data['fullname'])){
                            $error['fullname'] = 'Bạn chưa nhập tên';
                        }

                        if (empty($data['phonenumber'])){
                            $error['phonenumber'] = 'Bạn chưa nhập SĐT';
                        }
                    
                        if (empty($data['email'])){
                            $error['email'] = 'Bạn chưa nhập email';
                        }
                    
                        if (empty($data['message'])){
                            $error['message'] = 'Bạn chưa nhập lời nhắn';
                        }
                    
                        if (!$error){
                            $fullname = $_POST['full-name'];
                            $tel = $_POST['phone-number'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];

                            insert_contact($fullname, $tel, $email, $message);
                            $thongbao = "Lời nhắn của bạn đã được nhận. Chúng tôi sẽ liên hệ lại ngay!";
                        }
                        else{
                        }
                    }
                }
                include_once 'views/contact.php';
                break;
            case'register':
                if(isset($_POST['register']))
                {
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
                        }
                    }
                }
                include_once 'views/account/register.php';
                break;
            case'login':
                if(isset($_POST['login']))
                {
                    $error = [];
                    $data = [];

                    if (!empty($_POST['login']))
                    {
                        $data['user'] = isset($_POST['user']) ? $_POST['user'] : '';
                        $data['pass'] = isset($_POST['pass']) ? $_POST['pass'] : '';
                    
                        if (empty($data['user'])){
                            $error['user'] = 'Bạn chưa nhập tên';
                        }
                    
                        if (empty($data['pass'])){
                            $error['pass'] = 'Bạn chưa nhập mật khẩu';
                        }
                
                        if (!$error){
                            $username = $_POST['user'];
                            $password = $_POST['pass'];
                            $checkAcc = check_account($username, $password);
                            if (is_array($checkAcc)) {
                                $_SESSION['acc'] = $checkAcc;
                                header('Location: index.php');
                            } else {
                                $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra lại!";
                            }
                        }
                        else{
                            // echo 'Dữ liệu bị lỗi, không thể lưu trữ';
                        }
                    }
                }
                include_once 'views/account/login.php';
                break;
            case 'editAcc':
                if((isset($_POST['update'])) && (($_POST['update']))) {
                    $id= $_POST['id'];
                    $username = $_POST['user'];
                    $password = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];

                    update_account($id, $username, $password, $email, $address, $tel);
                    $_SESSION['acc']  = check_account($username, $password);
                    header('Location: index.php?act=editAcc');
                }
                include_once 'views/account/edit-acc.php';
                break;
            case 'logout':
                session_unset();
                header('Location: index.php');
                break;
            case 'addCart':
                if((isset($_POST['addCart'])) && (($_POST['addCart'])))
                {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $image = $_POST['img'];
                    $price = $_POST['price'];
                    $sale = $_POST['sale'];
                    
                    if (isset($_POST['quantity'])) {
                        $quantity = $_POST['quantity'];
                    } else{
                        $quantity = 1;
                    }

                    $i = 0;
                    $flag = 0;

                    if (isset($_SESSION['myCart']) && count($_SESSION['myCart']) > 0 ) {
                        foreach ($_SESSION['myCart'] as $cart)
                        {
                            if($cart[0] == $id){
                                $quantity += $cart[5];
                                $flag = 1;
                                $_SESSION['myCart'][$i][5] = $quantity;
                                break;
                            }
                            $i++;
                        }
                    }

                    if ($sale > 0) {
                        $intoMoney = $sale * $quantity;
                    } else {
                        $intoMoney = $price * $quantity;
                    }

                    if ($flag == 0) {
                        $prodAdd = [ $id, $name, $image, $price, $sale, $quantity, $intoMoney];
                        array_push($_SESSION['myCart'],$prodAdd);
                    }
                }
                include_once 'views/cart/viewcart.php';
                break;
            case 'delcart':
                if(isset($_GET['idcart'])) {
                    array_splice($_SESSION['myCart'], $_GET['idcart'], 1);
                } 
                else {
                    $_SESSION['myCart'] = [];
                }
                header('Location: index.php?act=viewcart');
                break;
            case 'viewcart':
                include_once 'views/cart/viewcart.php';
                break;
            case 'bill':
                include_once 'views/cart/bill.php';
                break;
            case 'billcomfirm':
                if((isset($_POST['order'])) && (($_POST['order']))) {

                    if(isset($_SESSION['acc'])){
                        $userId = $_SESSION['acc']['id'];
                    } else {
                        $userId = 0;
                    }

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    // $paymethod = $_POST['paymethod'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $orderDate = date('d/m/Y H:i:s');
                    $billTotal = bill_total();

                    $billId = insert_bill($userId, $name, $email, $address, $tel, $orderDate, $billTotal);

                    if(isset($_SESSION['acc'])){
                        foreach ($_SESSION['myCart'] as $cart) {
                            if ($cart['4'] > 0) {
                                $intoMoney = $cart[4] * $cart[5];
                                insert_bill_detail($_SESSION['acc']['id'], $cart[0], $cart[2], $cart[1], $cart[4], $cart[5], $intoMoney, $billId);
                            } else {
                                $intoMoney = $cart[3] * $cart[5];
                                insert_bill_detail($_SESSION['acc']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[5], $intoMoney, $billId);
                            }
                        }
                    } else {
                        foreach ($_SESSION['myCart'] as $cart) {
                            if ($cart['4'] > 0) {
                                $intoMoney = $cart[4] * $cart[5];
                                insert_bill_detail_passers($cart[0], $cart[2], $cart[1], $cart[4], $cart[5], $intoMoney, $billId);
                            } else {
                                $intoMoney = $cart[3] * $cart[5];
                                insert_bill_detail_passers($cart[0], $cart[2], $cart[1], $cart[3], $cart[5], $intoMoney, $billId);
                            }
                        }
                    }
                }
                if (isset($_POST['order'])) {
                    $_SESSION['myCart'] = [];
                }
                $bill = load_one_bill($billId);
                include_once 'views/cart/billcomfirm.php';
                break;
            case 'mybill':
                $listBill = load_all_bill($_SESSION['acc']['id']);
                include_once 'views/cart/mybill.php';   
                break;
            case 'billdetail':
                $listViewDetail = load_all_view_detail($_GET['id']);
                include_once 'views/cart/billdetail.php';   
                break;
            default:
                require_once './views/main.php';
                break;
        }
    } else{
        require_once './views/main.php';
    }
    require_once './views/footer.php';
