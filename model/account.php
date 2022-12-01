<?php
    function insert_account($email, $username, $password)
    {
        $sql = "INSERT INTO accounts (email, username, password) VALUES ('$email', '$username', $password)";
        pdo_execute($sql);
    }

    function check_acount($username, $password)
    {
        $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = $password";
        $sp = pdo_query_one($sql);
        return $sp;
    }