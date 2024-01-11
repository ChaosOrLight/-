<?php
    session_start();
    require_once "CSRF.php";
    if(isset($_POST['token']) && CSRF::validate($_POST['token'])){
        if(isset($_SESSION['is_login']) && $_SESSION['is_login']){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['money']) && is_numeric($_POST['money'])) {
                    $money = $_POST['money'];
                    if ($_SESSION['balance'] >= $money) {
                            $_SESSION['balance'] -= $money;
                            echo '轉帳成功';
                } else {
                        echo "('金額錯誤')";
                    }
                }
            }
        }else{
            header('Location:logout.php');
        }
    }else{
        header('Location:logout.php');

    }
    // session_start();
    //     if(isset($_SESSION['is_login']) && $_SESSION['is_login']){
    //         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //             if (isset($_POST['money']) && is_numeric($_POST['money'])) {
    //                 $money = $_POST['money'];
    //                 if ($_SESSION['balance'] >= $money &&$money>0) {
    //                         $_SESSION['balance'] -= $money;
    //                         echo '轉帳成功';
    //             } else {
    //                     echo "('金額錯誤')";
    //                 }
    //             }
    //         }
    //     }else{
    //         header('Location:logout.php');
    //     }

?>

