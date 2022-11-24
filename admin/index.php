<?php
    require_once '../model/pdo.php';
    require_once '../model/category.php';
    require_once '../model/product.php';

    require_once "header.php";
    require_once "sidebar.php";

    //controller
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {

            /*controller danh mục */
            case 'addCate':
                if ((isset($_POST['saveCate'])) && ($_POST['saveCate'])) {
                    $nameCate = $_POST['nameCate'];
                    insert_category($nameCate);
                    $thongbao = 'Thêm thành công';
                }
                include_once 'category/add.php';
                // header('Location: category/list.php');
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
                    update_category($id, $nameCate);
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
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {}
                    insert_product($nameProd, $price, $sale, $fileName, $desc, $cateId);
                    echo $thongbao = 'Thêm mới thành công';
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
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinhsp"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_product($id, $name, $price, $sale, $fileName, $descrip, $cateId);
                    $thongbao = 'Cập nhật thành công';
                }
                $listProd = load_all_product("", 0);
                include_once 'product/list.php';
                break;
            default:
                require_once "main.php";
                break;
        }
    } else {
        require_once "main.php";
    }

    require_once "footer.php";
