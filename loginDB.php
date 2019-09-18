<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="loginDBCss.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="padre">
        <form action="" method=post> 
            Please input your username:<br>
            <input class="inputName" type="text" name="name" value="" required>
            <br>
            <br>
            Please input your password:<br>
            <input class="inputPass" type="password" name="password" value="" required>
            <br>
            <br>
            <input class="boton" type="submit" value="Log in">
        </form>
    </div>
    
</body>
</html>

<?php
include ("funciones.php");
    $con=conectar();

    $sql = "SELECT * FROM users";
    $result = $con->query($sql);
    echo "Se realizo la conexion";
    var_dump($result->fetch_assoc());

    if ($result->num_rows > 0) {
        
    }
?>