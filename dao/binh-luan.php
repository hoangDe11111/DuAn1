<?php
require_once 'pdo.php';
function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl, $rating)
{
    $sql = "INSERT INTO comments(userId, productId, content, dateCmt, rating) VALUES (?,?,?,?,?)";

    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $rating);
}
function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl)
{
    $sql = "UPDATE comments SET userId=?,productId=?,content=?,dateCmt=? WHERE cmtId=?";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
}
function binh_luan_delete($ma_bl)
{
    $sql = "DELETE FROM comments WHERE cmtId=?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}
function binh_luan_select_all()
{
    $sql = "SELECT * FROM comments bl ORDER BY dateCmt DESC";
    return pdo_query($sql);
}
function binh_luan_select_by_id($ma_bl)
{
    $sql = "SELECT * FROM comments WHERE cmtId=?";
    return pdo_query_one($sql, $ma_bl);
}
function binh_luan_exist($ma_bl)
{
    $sql = "SELECT count(*) FROM comments WHERE cmtId=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
function binh_luan_select_by_hang_hoa($ma_hh, $limit = 10)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $query = "SELECT count(*) FROM comments b 
    JOIN products h ON h.productId = b.productId  
    WHERE b.productId  = $ma_hh ORDER BY cmtId DESC";

    $_SESSION['total_bl'] = pdo_query_value($query);
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_bl'] / $limit);
    $sql = "SELECT b.*, h.name, k.fullName, k.img FROM binh_luan b 
    JOIN products h ON h.productId  = b.productId 
    JOIN users k ON k.userId =b.userId WHERE b.productId=? ORDER BY ma_bl DESC LIMIT $begin,$limit";
    return pdo_query($sql, $ma_hh);
}