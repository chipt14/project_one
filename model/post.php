<?php
    function insert_post($title, $descrip, $content, $fileName, $date, $blogId)
    {
        $sql = "INSERT INTO posts (post_title, post_desc, post_content, post_img, post_date, blog_id) VALUES ('$title', '$descrip', '$content', '$fileName', '$date', $blogId)";
        pdo_execute($sql);
    }

    function load_one_post($id)
    {
        $sql = "SELECT * FROM posts WHERE post_id = $id";
        $post = pdo_query_one($sql);
        return $post;
    }

    function load_one_post_nameCate($id)
    {
        $sql = "SELECT blogs.blog_name FROM blogs JOIN posts ON blogs.blog_id = posts.blog_id WHERE posts.post_id = $id";
        $nameCate = pdo_query_one($sql);
        return $nameCate;
    }

    function load_all_post($keyword = "", $cateId = 0)
    {
        $sql = "SELECT * FROM posts p JOIN blogs b ON p.blog_id = b.blog_id WHERE 1";
        if($keyword != ""){
            $sql.=" AND post_title LIKE '%$keyword%'";
        }
        if($cateId > 0){
            $sql.=" AND p.blog_id = $cateId";
        }
        
        $listPost = pdo_query($sql);
        return $listPost;
    }