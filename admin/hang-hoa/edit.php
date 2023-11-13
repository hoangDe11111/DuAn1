<?php

$img_path = $UPLOAD_URL . '/products/' . $hinh;
if (is_file($img_path)) {
    $img = "<img src='$img_path' height='80'>";
} else {
    $img = "no photo";
}

?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">Cập nhật hàng hóa</div>
            <div class="card-body">
                <form action="index.php?btn_update" method="POST" enctype="multipart/form-data" id="update_hang_hoa">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="categoryId" class="form-label">Loại hàng</label>
                            <select name="categoryId" class="form-control" id="categoryId">
                                <?php

                                foreach ($loai_hang as $loai_hang) {
                                    extract($loai_hang);
                                    if ($ma_loai == $hang_hoa_info['categoryId']) {
                                        $s = "selected";
                                    } else {
                                        $s = "";
                                    }
                                    echo '<option ' . $s . ' value="' . $ma_loai . '">' . $ten_loai . '</option>';
                                }

                                ?>

                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="name" class="form-label">Tên hàng hóa</label>
                            <input type="text" name="name" id="name" class="form-control" required
                                value="<?= $ten_hh ?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="productId" class="form-label">Mã hàng hóa</label>
                            <input type="text" name="productId" id="productId" readonly class="form-control"
                                value="<?= $ma_hh ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <label for="up_hinh" class="form-label">Ảnh sản phẩm</label>
                                    <input type="hidden" name="img" id="img" class="form-control"
                                        value="<?= $hinh ?>">
                                    <input type="file" name="up_hinh" id="up_hinh" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <!-- Ảnh sản phẩm ban đầu -->
                                    <?= $img ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="price" class="form-label">Đơn giá (vnđ)</label>
                            <input type="text" name="price" id="price" class="form-control" value="<?= $don_gia ?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="sale" class="form-label">Giảm giá (vnđ)</label>
                            <input type="text" name="sale" id="sale" class="form-control" required
                                value="<?= $giam_gia ?>">
                        </div>
                    </div>
                    <div class="row">


                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label>Hàng đặc biệt?</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="1" name="special" <?= $dac_biet ? 'checked' : '' ?>>Đặc
                                    biệt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="dac_biet"
                                        <?= !$dac_biet ? 'checked' : '' ?>>Bình thường
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="date" class="form-label">Ngày nhập</label>
                            <input type="date" name="date" id="date" class="form-control" required
                                value="<?= $ngay_nhap ?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="view" class="form-label">Số lượt xem</label>
                            <input type="text" name="view" id="view" readonly class="form-control"
                                required value="<?= $so_luot_xem ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="describ" class="form-label">Mô tả sản phẩm</label>
                            <textarea id="txtarea" spellcheck="false" name="describ"
                                class="form-control form-control-lg mb-3" id="textareaExample"
                                rows="3"><?= $mo_ta ?></textarea>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>