<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Danh sách hàng hóa</h4>
        <?php
        if (isset($MESSAGE) && (strlen($MESSAGE) > 0)) {
            echo '<h5 class="alert alert-warning">' . $MESSAGE . '</h5>';
        }
        ?>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">
                <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Mã HH</th>
                            <th>Tên hàng hóa</th>
                            <th>Ảnh</th>
                            <th>Đơn giá</th>
                            <th>Giảm giá</th>
                            <th>Lượt xem</th>
                            <th>Ngày nhập</th>
                            <th>Đặc biệt?</th>
                            <th><a href="index.php" class="btn btn-success text-white">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $suahh = "index.php?btn_edit&productId=" . $item['productId'];
                            $xoahh = "index.php?btn_delete&productId=" . $item['productId'];
                            $img_path = $UPLOAD_URL . '/products/' . $item['img'];
                            if (is_file($img_path)) {
                                $img = "<img src='$img_path' height='60' width='60' class='object-fit-contain'>";
                            } else {
                                $img = "no photo";
                            }
                            //Tính giảm bn %
                            if ($item['price'] > 0) {
                                $percent_discount = number_format($item['sale'] / $item['price'] * 100);
                            }
                        ?>
                        <tr>
                            <td><input type="checkbox" name="productId[]" value="<?= $ma_hh ?>"></td>
                            <td><?= $item['productId']?></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $img ?></td>
                            <td><?= number_format($item['price'], 0) ?>đ</td>
                            <td><?= number_format($item['sale'], 0) ?>đ<i
                                    class="text-danger">(<?= isset($percent_discount) ? $percent_discount : '' ?>%)</i>
                            </td>
                            <td><?= $item['view'] ?></td>
                            <td><?= $item['date'] ?></td>
                            <td><?= ($item['special'] == 1) ? "Đặc biệt" : "Không"; ?></td>

                            <td class="text-end">
                                <a href="<?= $suahh ?>" class="btn btn-outline-info btn-rounded"><i
                                        class="fas fa-pen"></i></a>
                                <a href="<?= $xoahh ?>" class="btn btn-outline-danger btn-rounded"
                                    onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>

                <div class="mt-3" width="100%">
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

                        <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?btn_list&page=<?= $i ?>"><?= $i ?></a>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>