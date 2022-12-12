<?php
    function insert_blog($nameBlog)
    {
        $sql = "INSERT INTO blogs (blog_name) VALUES ('$nameBlog')";
        pdo_execute($sql);
    }
    
    function delete_blog($id)
    {
        $sql = "DELETE FROM blogs WHERE blog_id = $id"; 
        pdo_execute($sql);
    }
    
    function update_blog($id, $nameBlog)
    {
        $sql = "UPDATE blogs SET blog_name = '$nameBlog' WHERE blog_id = $id";
        pdo_execute($sql);
    }

    function load_all_blog()
    {
        $sql = "SELECT * FROM blogs";
        $listBlog = pdo_query($sql);
        return $listBlog;
    }

    function load_one_blog($id)
    {
        $sql = "SELECT * FROM blogs WHERE blog_id = $id";
        $blog = pdo_query_one($sql);
        return $blog;
    }