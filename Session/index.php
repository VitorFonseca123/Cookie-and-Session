<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="login.php" method="POST">
        <input type="text" name = "nome" Placeholder="username">
        <br>
        <input type="password" name = "senha" Placeholder="Senha">
        <br>
        <input type="submit" name="" value="Enviar">
    </form>
    <?php 
        if(isset($_GET['mensagem'])){
            echo $_GET['mensagem'];
        }
    ?>
</body>
</html>