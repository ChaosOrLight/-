<?php
    session_start();
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>page1</title>
</head>
<body>
    <?php
        if(isset($_SESSION['is_login']) && $_SESSION['is_login']):
    ?>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <!-- logo -->
                <a class="navbar-brand" href="#">
                    <img  src="pic1.png" alt="pic1">
                </a>
                <!-- 商品連結 -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#linkbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="linkbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php">轉帳</a>
                    </li>
                </ul>
                <form class="d-flex" >
                        <ul class="navbar-nav ms-auto ">
                            <li class="nav-item"  >
                                <span  class="btn btn-link nav-link"  style="font-size:24px;"  tabindex="-1">用戶： <?php echo 'abc' ?></span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php" tabindex="-1" >登出</a>
                            </li>
                            
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="welcome">
                <h1>歡迎登入 嘉義大學轉帳系統</h1>
            </div>
            <div class="text">
                <div class="title">如何轉帳呢</div>
                <p>點擊上方的「轉帳」，您可以輕鬆轉帳，開啟這個尊貴會員之旅。
                    我們接受各種安全的支付方式，確保您的付款信息安全有保障。</p>
            </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php else:?>
          <?php header('Location:logout.php');?>
    <?php endif;?>
</body>
</html>