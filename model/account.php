<?php
    function load_all_account()
    {
        $sql = "SELECT * FROM accounts a JOIN role r ON a.role_id = r.role_id";
        $listAcc= pdo_query($sql);
        return $listAcc;
    }

    function load_one_account($id)
    {
        $sql = "SELECT * FROM accounts WHERE id = $id";
        $acc = pdo_query_one($sql);
        return $acc;
    }

    function insert_account($email, $username, $password)
    {
        $sql = "INSERT INTO accounts (email, username, password) VALUES ('$email', '$username', '$password')";
        pdo_execute($sql);
    }

    function insert_account_admin($username, $password, $email, $address, $tel, $role)
    {
        $sql = "INSERT INTO accounts (username, password, email, address, tel, role_id) VALUES ('$username', '$password', '$email', '$address', '$tel', $role)";
        pdo_execute($sql);
    }

    function delete_account($id)
    {
        $sql = "DELETE FROM accounts WHERE id = $id"; 
        pdo_execute($sql);
    }

    function check_account($username, $password)
    {
        $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
        $acc = pdo_query_one($sql);
        return $acc;
    }

    function update_account($id, $username, $password, $email, $address, $tel)
    {
        $sql = "UPDATE accounts SET username = '$username', password = '$password', email = '$email', address = '$address', tel = '$tel' WHERE id = $id";
        pdo_execute($sql);
    }

    function update_account_admin($id, $username, $password, $email, $address, $tel, $role)
    {
        $sql = "UPDATE accounts SET username = '$username', password = '$password', email = '$email', address = '$address', tel = '$tel', role_id = $role WHERE id = $id";
        pdo_execute($sql);
    }

    function load_all_role()
    {
        $sql = "SELECT * FROM role";
        $listRole = pdo_query($sql);
        return $listRole;
    }

    