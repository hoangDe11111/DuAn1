<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">Thêm danh mục</div>
            <div class="card-body">
                <form action="index.php" method="POST" id="add_loai">
                    <div class="mb-3">
                        <label for="categoryId" class="form-label">Mã loại</label>
                        <input type="text" name="categoryId" class="form-control" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="categoryId" class="form-label">Tên loại</label>
                        <input type="text" name="name" class="form-control" required>
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