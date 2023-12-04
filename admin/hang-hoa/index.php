<?php
require_once "../../dao/pdo.php";
require_once "../../dao/loai.php";
require_once "../../dao/hang-hoa.php";
require "../../global.php";

// check_login();

// chech_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = hang_hoa_select_page('productId', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    $ten_hh = $_POST['name'];
    $don_gia = $_POST['price'];
    $giam_gia = $_POST['sale'];
    $ma_loai = $_POST['categoryId'];
    $dac_biet = $_POST['special'];
    $so_luot_xem = $_POST['view'];
    $mo_ta = $_POST['describe'];
    $ngay_nhap = $_POST['date'];

    // $hinh = $_FILES['hinh']['name'];
    // Upload file lên host
    $hinh = save_file('img', "$UPLOAD_URL/products/");
    //insert vào db
    hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);

    //show dữ liệu
    $items = hang_hoa_select_page('productId', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_hh = $_REQUEST['productId'];
    $loai_hang = loai_select_all('ASC');
    $hang_hoa_info = hang_hoa_select_by_id($ma_hh);
 
    
    //show dữ liệu
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_hh = $_REQUEST['productId'];
    hang_hoa_delete($ma_hh);
    //hiển thị danh sách

    $items = hang_hoa_select_page('productId', 10);
 
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        // Vừa sửa gì ở đây quên cmnr
        $arr_ma_hh = $_POST['productId'];
        hang_hoa_delete($arr_ma_hh);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = hang_hoa_select_page('productId', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ma_hh = $_POST['productId'];
    $ten_hh = $_POST['name'];
    $don_gia = $_POST['price'];
    $giam_gia = $_POST['sale'];
    $ma_loai = $_POST['categoryId'];
    $dac_biet = $_POST['special'] == 1;
    $so_luot_xem = intval($_POST['view']);
    $mo_ta = $_POST['depict'];
    $ngay_nhap = $_POST['date'];

    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/products/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;    


    hang_hoa_update($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
    //hiển thị danh sách

    $items = hang_hoa_select_page('productId', 10);
    $VIEW_NAME = "list.php";
} else {
    $loai_hang = loai_select_all('ASC');
    $VIEW_NAME = "add.php";
}
require "../layout.php";