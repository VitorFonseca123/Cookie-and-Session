<?php 
    session_start();
    if($_SESSION['user_login'] == 1){
        echo "<center><font color='green'>Bem vindo ao sistema</font></center>";
    }else{
        header('location: index.php ?mensagem=<font color="red">Usuário ou senha inválidos. Tente novamente!');
    }
?> 