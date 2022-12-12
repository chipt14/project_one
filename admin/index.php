<?php
    session_start();
    ob_start();

    require_once '../model/pdo.php';
    require_once '../model/category.php';
    require_once '../model/product.php';
    require_once '../model/account.php';
    require_once '../model/cart.php';
    require_once '../model/comment.php';
    require_once '../model/contact.php';
    require_once '../model/blog.php';
    require_once '../model/post.php';

    require_once "header.php";
    require_once "sidebar.php";

    //controller
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {

            /*controller cate */
            case 'addCate':
                if ((isset($_POST['saveCate'])) && ($_POST['saveCate'])) {
                    $nameCate = $_POST['nameCate'];
                    $fileName = $_FILES['image']['name'];
                    $target_dir = "../uploads/admin/category/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {}
                    insert_category($nameCate, $fileName);
                    $thongbao = 'Thêm mới thành công';
                }
                include_once 'category/add.php';
                break;
            case 'listCate':
                $listCate = load_all_category();
                include_once 'category/list.php';
                break;
            case 'deleteCate':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    delete_category($_GET['id']);
                }
                $listCate = load_all_category();
                include_once 'category/list.php';
                break;
            case 'editCate':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $cate = load_one_category($_GET['id']);
                }
                include_once 'category/update.php';
                break;
            case 'updateCate':
                if ((isset($_POST['saveCate'])) && ($_POST['saveCate'])) {
                    $id = $_POST['id'];
                    $nameCate = $_POST['nameCate'];
                    $fileName = $_FILES['image']['name'];
                    $target_dir = "../uploads/admin/category/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {}
                    update_category($id, $nameCate, $fileName);
                }
                $listCate = load_all_category();
                include_once 'category/list.php';
                break;  
            
            /*controller product */
            case 'addProd':
                if ((isset($_POST['saveProd'])) && ($_POST['saveProd'])) {
                    $cateId = $_POST['cateId'];
                    $nameProd = $_POST['nameProd'];
                    $price = $_POST['price'];
                    $sale = $_POST['sale'];
                    $desc = $_POST['desc'];
                    $fileName = $_FILES['image']['name'];
                    $target_dir = "../uploads/admin/product/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {}
                    insert_product($nameProd, $price, $sale, $fileName, $desc, $cateId);
                    $thongbao = 'Thêm mới thành công';
                }
                $listCate = load_all_category();
                include_once 'product/add.php';
                break;
            case 'listProd':
                if ((isset($_POST['listok'])) && ($_POST['listok'])) {
                    $keyword = $_POST['keyw'];
                    $cate_id = $_POST['cate_id'];
                } else {
                    $keyword = '';
                    $cate_id = '';
                }
                $listCate = load_all_category();
                $listProd = load_all_product($keyword, $cate_id);
                include_once 'product/list.php';
                break;
            case 'deleteProd':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    delete_product($_GET['id']);
                }
                $listProd = load_all_product("", 0);
                include_once 'product/list.php';
                break;
            case 'editProd':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $prod = load_one_product($_GET['id']);
                }
                $listCate = load_all_category();
                include_once 'product/update.php';
                break;
            case 'updateProd':
                if ((isset($_POST['saveProd'])) && ($_POST['saveProd'])) {
                    $id = $_POST['id'];
                    $cateId = $_POST['cateId'];
                    $name = $_POST['nameProd'];
                    $price = $_POST['price'];
                    $sale = $_POST['sale'];
                    $descrip = $_POST['descrip'];
                    $fileName = $_FILES['image']['name'];
                    $target_dir = "../uploads/admin/product/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {}
                    update_product($id, $name, $price, $sale, $fileName, $descrip, $cateId);
                    $thongbao = 'Cập nhật thành công';
                }
                $listProd = load_all_product("", 0);
                include_once 'product/list.php';
                break;
            
            /*controller bill */
            case 'listBill':
                $listBill = load_all_bill($keyword = "", 0);
                include_once 'bill/list.php';
                break;
            case 'billDetail':
                $listViewDetail = load_all_view_detail($_GET['id']);
                include_once 'bill/detail.php';
                break;
            /*controller user */
            case'listUser':
                $listAcc = load_all_account();
                include_once 'account/list.php';
                break;
            case 'addUser':
                if ((isset($_POST['saveUser'])) && ($_POST['saveUser'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];
                   
                    // echo"<pre>";
                    // var_dump($listRole);
                    // die;
                    insert_account_admin($username, $password, $email, $address, $tel, $role);
                    $thongbao = 'Thêm mới thành công';
                }
                $listRole = load_all_role();
                include_once 'account/add.php';
                break;
            case 'deleteAcc':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    delete_account($_GET['id']);
                }
                $listAcc = load_all_account();
                include_once 'account/list.php';
                break;
            case 'editAcc':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $acc = load_one_account($_GET['id']);
                }
                $listAcc = load_all_account();
                include_once 'account/update.php';
                break;
            case 'updateAcc':
                if ((isset($_POST['saveAcc'])) && ($_POST['saveAcc'])) {
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];

                    update_account_admin($id, $username, $password, $email, $address, $tel, $role);
                }
                $listAcc = load_all_account();
                include_once 'account/list.php';
                break;  
            
            /*controller comment */
            case 'listCmt':
                $listCmt = load_all_comment(0);
                include_once 'comment/list.php';
                break;
            case 'deleteCmt':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    delete_comment($_GET['id']);
                }
                $listCmt = load_all_comment(0);
                include_once 'comment/list.php';
                break;

            /*controller contact */
            case 'listCont':
                $listCont = load_all_contact();
                include_once 'contact/list.php';
                break;

            /*controller blog */
            case 'addBlog':
                if ((isset($_POST['save-blog'])) && ($_POST['save-blog'])) {
                    $nameBlog = $_POST['name-blog'];

                    insert_blog($nameBlog);
                    $thongbao = 'Thêm mới thành công';
                }
                include_once 'blog/add.php';
                break;
            case 'listBlog':
                $listBlog = load_all_blog();
                include_once 'blog/list.php';
                break;
            case 'deleteBlog':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    delete_blog($_GET['id']);
                }
                $listBlog = load_all_blog();
                include_once 'blog/list.php';
                break;
            case 'editBlog':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $blog = load_one_blog($_GET['id']);
                }
                include_once 'blog/update.php';
                break;
            case 'updateBlog':
                if ((isset($_POST['save-blog'])) && ($_POST['save-blog'])) {
                    $id = $_POST['id'];
                    $nameBlog = $_POST['name-blog'];
                    
                    update_blog($id, $nameBlog);
                }
                $listBlog = load_all_blog();
                include_once 'blog/list.php';
                break;
            
            /*controller post */
            case 'addPost':
                if ((isset($_POST['save-post'])) && ($_POST['save-post'])) {
                    $blogId = $_POST['blog-id'];
                    $title = $_POST['title'];
                    $descrip = $_POST['desc'];  
                    $content = $_POST['content'];

                    $fileName = $_FILES['image']['name'];
                    $target_dir = "../uploads/admin/blog/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);

                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date = date('F j, Y');

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {}
                    insert_post($title, $descrip, $content, $fileName, $date, $blogId);
                    $thongbao = 'Thêm mới thành công';
                }
                $listBlog = load_all_blog();
                include_once 'post/add.php';
                break;
            case 'listPost':
                $listPost = load_all_Post();
                include_once 'post/list.php';
                break;

            default:
                $revenue = total_revenue();
                $product = total_product();
                $client = count_client();
                require_once "main.php";
                break;
        }
    } else {
        $revenue = total_revenue();
        $product = total_product();
        $client = count_client();
        require_once "main.php";
    }

    require_once "footer.php";
