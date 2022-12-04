<?php
    function load_all_account()
    {
        $sql = "SELECT * FROM accounts ORDER BY id DESC";
        $listAcc= pdo_query($sql);
        return $listAcc;
    }

    function insert_account($email, $username, $password)
    {
        $sql = "INSERT INTO accounts (email, username, password) VALUES ('$email', '$username', $password)";
        pdo_execute($sql);
    }

    function check_account($username, $password)
    {
        $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = $password";
        $acc = pdo_query_one($sql);
        return $acc;
    }

    function update_account($id, $username, $password, $email, $address, $tel)
    {
        $sql = "UPDATE accounts SET username = '$username', password = '$password', email = '$email', address = '$address', tel = '$tel' WHERE id = $id";
        pdo_execute($sql);
    }