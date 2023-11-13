<?php
require_once 'pdo.php';
function loai_insert($ten_loai)
{
    $sql = "INSERT INTO categories(name) VALUES(?)";
    pdo_execute($sql, $ten_loai);
}
function loai_update($ma_loai, $ten_loai)
{
    $sql = "UPDATE categories SET name=? WHERE categoryId=?";
    pdo_execute($sql, $ten_loai, $ma_loai);
}
function loai_delete($ma_loai)
{
    $sql = "DELETE FROM categories WHERE categoryId=?";
    if (is_array($ma_loai)) {
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai);
    }
}
//Mặc định sắp xếp xuôi/ truyền DESC vào thì ngược

function loai_select_all($order = 'ASC')
{
    $sql = "SELECT * FROM categories ORDER BY categoryId $order";
    return pdo_query($sql);
}
function loai_select_by_id($ma_loai)
{
    $sql = "SELECT * FROM categories WHERE categoryId=?";
    return pdo_query_one($sql, $ma_loai);
}
function loai_exist($ma_loai)
{
    $sql = "SELECT count(*) FROM categories WHERE categoryId=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}

function loai_exist_ten_loai_add($ten_loai)
{
    $sql = "SELECT count(*) FROM categories WHERE name=?";
    return pdo_query_value($sql, $ten_loai) > 0;
}
function loai_exist_ten_loai_update($ma_loai, $ten_loai)
{
    $sql = "SELECT count(*) FROM categories WHERE  categoryId!=? and name=?";
    return pdo_query_value($sql, $ma_loai, $ten_loai) > 0;
}