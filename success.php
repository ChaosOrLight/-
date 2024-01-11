<?php
    session_start();
    $db_name='abc';//$user['username'];
    $db_passwd='123';//$user['password'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['name']) && isset($_POST['passwd'])){

                if($_POST['name']==$db_name && $_POST['passwd']==$db_passwd){
                        $_SESSION['is_login']=TRUE;
                        $url="index.php";
                        header("Location:$url");
                    }else{
                        $_SESSION['is_login']=FALSE;
                        header("Location:logout.php");
                        
                    }
            }else{
                header("Location:logout.php");
            }
    }else{
        header("Location:logout.php");
        }    
?>
