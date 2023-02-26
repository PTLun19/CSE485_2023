    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../login.php");
    }
?>
    <?php
            require '../includes/header.php'; 
            require '../includes/database-connection.php';  
            require '../includes/functions.php';  
            $sql = "SELECT * FROM `theloai`";
            $countTheloai = pdo($pdo, $sql)->fetchAll(); 
            $sql = "SELECT * FROM `user`";
            $countUsers = pdo($pdo, $sql)->fetchAll(); 
            $sql = "SELECT * FROM `tacgia`";
            $countTacgia = pdo($pdo, $sql)->fetchAll(); 
            $sql = "SELECT * FROM `baiviet`";
            $countBaiViet = pdo($pdo, $sql)->fetchAll(); 
    ?>

    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Người dùng</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php echo count($countUsers) ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Thể loại</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php echo count($countTheloai) ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Tác giả</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php echo count($countTacgia) ?> 
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Bài viết</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php echo count($countBaiViet) ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        require '../includes/footer.php';  
    ?>