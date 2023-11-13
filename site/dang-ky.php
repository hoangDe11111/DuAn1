<?php
session_start();
require '../dao/khach-hang.php';

if (isset($_POST['btn_register'])) {
    $ma_kh = $_POST['id'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $ho_ten = $_POST['fullName'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    $mat_khau = md5($password);

    if (khach_hang_exist($ma_kh)) {
        $MESSAGE = "Tên đăng nhập đã tồn tại!";
        echo "<script>alert('$MESSAGE');</script>";
    } else {
        try {
            khach_hang_insert($username, $mat_khau, $ho_ten, $email, $status);
            $_SESSION['id'] = $ma_kh;
            $_SESSION['password'] = $password;
            $MESSAGE = "Đăng ký thành viên thành công!";
          
            header('location: form.php');
            echo "<script>alert('$MESSAGE');</script>";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại! Lỗi: " . $exc->getMessage();
            echo "<script>alert('$MESSAGE');</script>";
        }
    }
}
?>