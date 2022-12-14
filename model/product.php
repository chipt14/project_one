<?php
    function insert_product($nameProd, $price, $sale, $fileName, $desc, $cateId)
    {
        $sql = "INSERT INTO products (name, price, sale, img, descrip, cate_id) VALUES ('$nameProd', $price, $sale, '$fileName', '$desc', $cateId)";
        pdo_execute($sql);
    }

    function delete_product($id)
    {
        $sql = "DELETE FROM products WHERE id = $id"; 
        pdo_execute($sql);
    }

    function load_all_product($keyword = "", $cateId = 0)
    {
        $sql = "SELECT * FROM products WHERE 1";
        if($keyword != ""){
            $sql.=" AND name LIKE '%$keyword%'";
        }
        if($cateId > 0){
            $sql.=" AND cate_id = $cateId";
        }
        $sql.=" ORDER BY id DESC";
        $listProd = pdo_query($sql);
        return $listProd;
    }

    function load_all_product_main()
    {
        $sql = "SELECT * FROM products WHERE 1 ORDER BY id DESC LIMIT 0,9";
        $listProd = pdo_query($sql);
        return $listProd;
    }

    function load_all_product_top10()
    {
        $sql = "SELECT * FROM products WHERE 1 ORDER BY views DESC LIMIT 0,10";
        $listProd = pdo_query($sql);
        return $listProd;
    }

    function load_all_product_new()
    {
        $sql = "SELECT * FROM products WHERE sale = 0";
        $listProd = pdo_query($sql);
        return $listProd;
    }
    
    function load_all_product_sale()
    {
        $sql = "SELECT * FROM products WHERE sale > 0";
        $listProd = pdo_query($sql);
        return $listProd;
    }
    
    function load_one_product($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";
        $product = pdo_query_one($sql);
        return $product;
    }

    function load_one_product_nameCate($id)
    {
        $sql = "SELECT categories.name FROM categories JOIN products ON categories.id=products.cate_id WHERE products.id = $id";
        $nameCate = pdo_query_one($sql);
        return $nameCate;
    }

    

    function load_product_same($id, $cateId)
    {
        $sql = "SELECT * FROM products WHERE cate_id = $cateId AND id <> $id";
        $listProd = pdo_query($sql);
        return $listProd;
    }

    function update_product($id, $name, $price, $sale, $fileName, $descrip, $cateId)
    {
        if($fileName != ""){
            $sql = "UPDATE products SET name = '$name', price = $price, sale = $sale, img = '$fileName', descrip = '$descrip', cate_id = $cateId WHERE id = $id";
        } else{
            $sql = "UPDATE products SET name = '$name', price = $price, sale = $sale, descrip = '$descrip', cate_id = $cateId WHERE id = $id";
        }
        pdo_execute($sql);
    }
    
    function update_view($id)
    {
        $sql = "UPDATE products SET views = views + 1 WHERE id = $id";
        $result = pdo_execute($sql);
    }