<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>登入頁面</title>
    <style>
        body{
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-image:url('pic0.jpg');
        }

        .title{
            font-size:80px;
            text-align:center;
            font-weight:1000;
        }
        .container form{
            border:#fff solid 1px;
            background-color: rgba(255, 255,255, 0.5);
            width:400px;
            margin:20px auto;
            padding:30px;
            
        }
    
    </style>
</head>

<body>
    <?php
        if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):
            header('Location: index.php');
    ?>
    <?php else:?>
        <div class="title">國立嘉義大學轉帳系統</div>
        <div class="container">
                <form class="border border-2 p-4 mt-5" action="success.php" method="post">
                    <h2 class="mb-4">登入頁面</h2>
                    <div class="mb-3">
                        <label for="name" class="form-label">學號</label>
                        <input type="text" class="form-control" name="name" placeholder="輸入學號" required>
                    </div>
                    <div class="mb-3">
                        <label for="passwd" class="form-label">密碼</label>
                        <input type="password" class="form-control" name="passwd" placeholder="輸入密碼" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button>
                    <button type="button" class="btn btn-secondary">Sign up</button>
                </form>
            </div>

    <?php endif;?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>