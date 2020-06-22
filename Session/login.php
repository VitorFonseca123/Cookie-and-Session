<?php
    session_start();
    $u = $_POST['nome'];
    $s = $_POST['senha'];
    echo "$u e $s <br>";
    $user = "Vitor";
    $senha = 20513;
    if($u == $user && $s == $senha){
        $_SESSION['user_login']=1;
        
    }else{
        
        $_SESSION['user_login']=0;
    }
    echo  $_SESSION['user_login'];
    header('location: principal.php');
    ?>