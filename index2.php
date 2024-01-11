<?php
    session_start();
    if (!isset($_SESSION['balance'])) {
        $_SESSION['balance'] = 10000000000000;
    }
    require_once "CSRF.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <style>
        .container.mt-5 .moneyCount{
                font-size:30px;
                font-weight:800;
                text-align:center;
        }
    </style>
    
    <title>page2</title>
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
                        <a class="nav-link" href="index2.php">繳費</a>
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
        <div class="container mt-5">
            <div class="moneyCount">目前帳號金額:<?php echo $_SESSION['balance']; ?></div>
        </div>
        <div class="container mt-5">
         <form action="index3.php" method="POST" > 
                <div class="mb-3">
                    <label for="accout" class="form-label">帳戶名稱</label>
                    <input type="text" class="form-control" id="accout" name="admin" placeholder="輸入帳號">
                </div>
                <div class="mb-3">
                    <label for="money" class="form-label">金額</label>
                    <input type="number" class="form-control" id="money" name="money" placeholder="輸入金額">
                    <?php CSRF::create_token();?>
                </div>
                <div class="mb-3">
                    <label for="pay-object" class="form-label">匯款對象</label>
                    <input type="text" class="form-control" id="pay-object" name="accout" placeholder="輸入帳戶名稱">
                </div>
                <button type="submit" class="btn btn-success">繳交</button>
        </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <?php else:?>
          <?php header('Location:logout.php');?>
    <?php endif;?>
</body>
</html>