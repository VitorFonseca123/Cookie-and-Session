<?php 
    
    setcookie("Nome",$_POST['nome'],time()+60*60*24);
    setcookie("Email",$_POST['email'],time()+60*60*24);
    setcookie("Cidade",$_POST['cid'],time()+60*60*24);
    header('location: mensagem.php');

?>