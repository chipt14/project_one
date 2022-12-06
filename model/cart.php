<?php
    function bill_total()
    {
        $sum = 0;
    
        foreach ($_SESSION['myCart'] as $cart) {
            if($cart[4] > 0) {
                $sum += ($cart[4] * $cart[5]);
            } else {
                $sum += ($cart[3] * $cart[5]);
            }
        }
        return $sum;
    }

    function insert_bill($userId, $name, $email, $address, $tel, $orderDate, $billTotal)
    {
        $sql = "INSERT INTO bills (user_id, bill_name, bill_email, bill_address, bill_tel, order_date, total) VALUES ($userId, '$name', '$email', '$address', '$tel', '$orderDate', $billTotal)";
        return pdo_execute_lastInsertId($sql);
        
    }
    
    function load_one_bill($id)
    {
        $sql = "SELECT * FROM bills WHERE id = $id";
        $bill = pdo_query_one($sql);
        return $bill;
    }

    function load_all_view_detail($id)
    {
        $sql = "SELECT * FROM bill_detail WHERE bill_id = $id";
        $listViewDetail = pdo_query($sql);
        return $listViewDetail;
    }

    function load_all_bill($userId)
    {
        $sql = "SELECT * FROM bills WHERE 1";
        if($userId > 0){
            $sql.=" AND user_id = $userId";
        }
        $sql.=" ORDER BY id DESC";
        $listBill = pdo_query($sql);
        return $listBill;
    }

    function insert_bill_detail($userId, $proId, $img, $name, $price, $quantity, $intoMoney, $billId)
    {
        $sql = "INSERT INTO bill_detail (user_id, pro_id, img, name, price, quantity, into_money, bill_id) VALUES ($userId, $proId, '$img', '$name', $price, $quantity, $intoMoney, $billId)";
        pdo_execute($sql);
    }

    function insert_bill_detail_passers($proId, $img, $name, $price, $quantity, $intoMoney, $billId)
    {
        $sql = "INSERT INTO bill_detail (pro_id, img, name, price, quantity, into_money, bill_id) VALUES ($proId, '$img', '$name', $price, $quantity, $intoMoney, $billId)";
        pdo_execute($sql);
    }

    function count_all_prod_bill_detail($billId)
    {
        $sql = "SELECT SUM(quantity) FROM bill_detail WHERE bill_id = $billId";
        $bill = pdo_query_one($sql);
        return $bill;
    }
    
    function get_status($x)
    {
        switch ($x) {
            case '0':
                $stt = 'Đang xử lí';
                break;
            case '1':
                $stt = 'Đang giao hàng';
                break;
            case '2':
                $stt = 'Giao thành công';
                break;
            default:
                $stt = 'Đang xử lí';
                break;
        }
        return $stt;
    }
