<?php

    function insert_category($nameCate)
    {
        $sql = "INSERT INTO categories (name) VALUES ('$nameCate')";
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

    function update_category($id, $nameCate)
    {
        $sql = "UPDATE categories SET name = '$nameCate' WHERE id = $id";
        pdo_execute($sql);
    }