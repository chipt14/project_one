<?php
    function insert_user($email, $user, $pass)
    {
        $sql = "INSERT INTO users (email, user, password) VALUES ('$email', '$user', $pass)";
        pdo_execute($sql);
    }

    function check_user($user, $pass)
    {
        $sql = "SELECT * FROM users WHERE user = '$user' AND password = $pass";
        $us = pdo_query_one($sql);
        return $us;
    }