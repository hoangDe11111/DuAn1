<?php
require_once 'pdo.php';
function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta)
{
    $sql = "INSERT INTO products(name, price, sale, img, categoryId, special, view, date, describe) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet == 1, $so_luot_xem, $ngay_nhap, $mo_ta);
    $hinh = substr($hinh, 0, 1406);

}
function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta)
{
    $sql = "UPDATE products SET name=?, price=?, sale=?, img=?, categoryId=?, special=?, view=?, date=?, describe=? WHERE productId=?";
    pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet == 1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
}
function hang_hoa_delete($ma_hh)
{
    $sql = "DELETE FROM products WHERE productId=?";
    if (is_array($ma_hh)) {
        foreach ($ma_hh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_hh);
    }
}
function hang_hoa_select_all()
{
    $sql = "SELECT * FROM products ORDER BY productId desc";
    return pdo_query($sql);
}
function hang_hoa_select_by_id($ma_hh)
{
    $sql = "SELECT * FROM products WHERE productId=?";
    return pdo_query_one($sql, $ma_hh);
}
function hang_hoa_exist($ma_hh)
{
    $sql = "SELECT count(*) FROM products WHERE productId=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}
function hang_hoa_exist_add($ten_hh)
{
    $sql = "SELECT count(*) FROM products WHERE name=?";
    return pdo_query_value($sql, $ten_hh) > 0;
}
function hang_hoa_exist_update($ma_hh, $ten_hh)
{
    $sql = "SELECT count(*) FROM products WHERE productId!=? and name=?";
    return pdo_query_value($sql, $ma_hh, $ten_hh) > 0;
}

function hang_hoa_tang_so_luot_xem($ma_hh)
{
    $sql = "UPDATE products SET view = view + 1 WHERE productId=?";
    pdo_execute($sql, $ma_hh);
}
function hang_hoa_select_top10()
{
    $sql = "SELECT * FROM products WHERE view> 0 ORDER BY view DESC LIMIT 0, 10";
    return pdo_query($sql);
}
function hang_hoa_select_dac_biet()
{
    $sql = "SELECT * FROM products WHERE special=1";
    return pdo_query($sql);
}
function hang_hoa_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM products WHERE categoryId=?";
    return pdo_query($sql, $ma_loai);
}
function hang_hoa_select_keyword($keyword)
{
    $sql = "SELECT * FROM products hh "
        . " JOIN loai lo ON lo.categoryId=hh.categoryId "
        . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
function hang_hoa_select_page($order, $limit)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM products");
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
    $sql = "SELECT * FROM products ORDER BY $order DESC LIMIT $begin,$limit";
    return pdo_query($sql);
}