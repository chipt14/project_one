<?php
    function insert_comment($content, $userId, $prodId, $dateCmt)
    {
        $sql = "INSERT INTO comments (content, user_id, prod_id, date_cmt) VALUES ('$content', $userId, $prodId, '$dateCmt')";
        pdo_execute($sql);
    }

    function delete_comment($id)
    {
        $sql = "DELETE FROM comments WHERE id = $id"; 
        pdo_execute($sql);
    }

    function load_all_comment($prodId)
    {
        $sql = "SELECT * FROM accounts a JOIN comments c ON a.id = c.user_id WHERE 1";
        if ($prodId > 0) {
            $sql.= " AND prod_id = $prodId";
        }
        $listCmt = pdo_query($sql);
        return $listCmt;
    }

    function count_comment($prodId)
    {
        $sql = "SELECT * FROM comments WHERE prod_id = $prodId";
        $result = pdo_query($sql);
        return sizeof($result);
    }