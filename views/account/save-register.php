<?php
    require_once '../../model/pdo.php';
    require_once '../../model/user.php';

  if((isset($_POST['register'])) && (isset($_POST['register']))) {
    
    $error = array();
    $data = array();
    if (!empty($_POST['register']))
    {
        // Lấy dữ liệu
        $data['user'] = isset($_POST['user']) ? $_POST['user'] : '';
        $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $data['pass'] = isset($_POST['pass']) ? $_POST['pass'] : '';
        $data['rePass'] = isset($_POST['rePass']) ? $_POST['rePass'] : '';

    
        // Kiểm tra định dạng dữ liệu
        if (empty($data['user'])){
            $error['user'] = 'Bạn chưa nhập tên';
        }
    
        if (empty($data['email'])){
            $error['email'] = 'Bạn chưa nhập email';
        }
        else if (!is_email($data['email'])){
            $error['email'] = 'Email không đúng định dạng';
        }
    
        if (empty($data['pass'])){
            $error['pass'] = 'Bạn chưa nhập mật khẩu';
        }

        if (empty($data['rePass'])){
          $error['rePass'] = 'Bạn chưa nhập mật lại khẩu';
        }

        if (($data['pass']) != ($data['rePass'])) {
          $error['passrePass'] = 'Mật khẩu phải trùng';
        }
    
        // Lưu dữ liệu
        if (!$error){
          $email = $_POST['email'];
          $username = $_POST['user'];
          $password = $_POST['pass'];
          insert_account($email, $username, $password);
          $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để bình luận!";
        }
        else{
            // echo 'Dữ liệu bị lỗi, không thể lưu trữ';
        }
    }
    

    
  }

  require_once 'register.php';
?>

