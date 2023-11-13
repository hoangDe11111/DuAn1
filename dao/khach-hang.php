<?php
require_once 'pdo.php';
function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh)
{
    $sql = "INSERT INTO users(userId,password,fullName,email,img) VALUES(?,?,?,?,?)";
    pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh);
}
function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh)
{
    $sql = "UPDATE users SET password=?,fullName=?,email=?,img=? WHERE userId=?";
    pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $ma_kh);
}
function khach_hang_delete($ma_kh)
{
    $sql = "DELETE FROM users WHERE userId=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}
function khach_hang_select_all()
{
    $sql = "SELECT * FROM users";
    return pdo_query($sql);
}
function khach_hang_select_by_id($ma_kh)
{
    $sql = "SELECT * FROM users WHERE userId=?";
    return pdo_query_one($sql, $ma_kh);
}
function khach_hang_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM users WHERE userId=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

function khach_hang_exist_email($email)
{
    $sql = "SELECT count(*) FROM users WHERE email=?";
    return pdo_query_value($sql, $email) > 0;
}

function khach_hang_change_password($ma_kh, $mat_khau_moi)
{

    $sql = "UPDATE users SET password=? WHERE userId=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}