
<?php
            require '../includes/header.php'; 
            require '../includes/database-connection.php';  
            require '../includes/functions.php';  
            $id = $_GET['id'];
            $sql = "SELECT * FROM `theloai` WHERE ma_tloai = ".($id);
            $recordByID = pdo($pdo, $sql)->fetchAll(); 
        ?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
                <form action="process_add_category.php" method="post">
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã thể loại</span>
                        <input type="text" class="form-control" name="txtCatId" readonly value="<?php echo $recordByID[0]['ma_tloai'] ?>">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                        <input type="text" class="form-control" name="txtCatName" value = "<?php echo $recordByID[0]['ten_tloai'] ?>">
                    </div>

                    <div class="form-group  float-end">
                        <input type="submit" value="Lưu lại" class="btn btn-success">
                        <a href="category.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
        require '../includes/footer.php';  
    ?>