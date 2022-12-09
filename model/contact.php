<?php
    function insert_contact($fullname, $tel, $email, $message)
    {
        $sql = "INSERT INTO contacts (full_name, tel, email, message) VALUES ('$fullname', '$tel', '$email', '$message')";
        pdo_execute($sql);
    }
    
    function load_all_contact()
    {
        $sql = "SELECT * FROM contacts";
        $listCont = pdo_query($sql);
        return $listCont;
    }