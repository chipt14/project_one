<?php

    function insert_category($nameCate, $fileName)
    {
        $sql = "INSERT INTO categories (name, img) VALUES ('$nameCate', '$fileName')";
        pdo_execute($sql);
    }

    function delete_category($id)
    {
        $sql = "DELETE FROM categories WHERE id = $id"; 
        pdo_execute($sql);
    }

    function load_all_category()
    {
        $sql = "SELECT * FROM categories ORDER BY id DESC";
        $listCate = pdo_query($sql);
        return $listCate;
    }

    function load_one_category($id)
    {
        $sql = "SELECT * FROM categories WHERE id = $id";
        $dm = pdo_query_one($sql);
        return $dm;
    }

    function update_category($id, $nameCate, $fileName)
    {
        if($fileName != ""){
            $sql = "UPDATE categories SET name = '$nameCate', img = '$fileName' WHERE id = $id";
        } else{
            $sql = "UPDATE categories SET name = '$nameCate' WHERE id = $id";
        }
        pdo_execute($sql);
    }

    function load_name_category($cate_id)
    {
        if($cate_id > 0) {
            $sql = "SELECT * FROM categories WHERE id = $cate_id";
            $cate_id = pdo_query_one($sql);
            extract($cate_id);
            return $name;
        } else {
            return "";
        }
    }