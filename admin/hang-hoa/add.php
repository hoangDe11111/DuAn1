<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">Thêm mới hàng hóa</div>
            <div class="card-body">
                <form action="index.php" method="POST" enctype="multipart/form-data" id="add_hang_hoa">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="categoryId" class="form-label">Loại hàng</label>
                            <select name="categoryId" class="form-control" id="categoryId">
                                <?php

                                foreach ($loai_hang as $loai_hang) {
                                    extract($loai_hang);
                                    echo '<option value="' . $loai_hang['categoryId'] . '">' . $loai_hang['name'] . '</option>';
                                }

                                ?>

                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="name" class="form-label">Tên hàng hóa</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="productId" class="form-label">Mã hàng hóa</label>
                            <input type="text" name="productId" id="productId" readonly class="form-control"
                                value="auto number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="img" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" name="img" id="img" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="price" class="form-label">Đơn giá (vnđ)</label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="sale" class="form-label">Giảm giá (vnđ)</label>
                            <input type="number" name="sale" id="sale" class="form-control">
                        </div>
                    </div>
                    <div class="row">

                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label>Hàng đặc biệt?</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="1" name="special">Đặc biệt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="special" checked>Bình thường
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <?php $today = date_format(date_create(), 'Y-m-d'); ?>
                            <label for="date" class="form-label">Ngày nhập</label>
                            <input type="date" name="date" id="date" class="form-control"
                                value="<?= $today ?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="view" class="form-label">Số lượt xem</label>
                            <input type="text" name="view" id="view" readonly class="form-control"
                                value="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="describ" class="form-label">Mô tả sản phẩm</label>
                            <textarea id="txtarea" spellcheck="false" name="describ"
                                class="form-control form-control-lg mb-3" id="textareaExample" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>