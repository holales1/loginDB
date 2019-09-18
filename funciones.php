<?php
    function conectar (){
        $user="root";
        $pass="";
        $server="localhost";
        $db="logindb";
        $con=mysqli_connect($server,$user,$pass) or die ("Error al conectar a la base de datos");
        mysqli_select_db($con,$db);

        return $con;
    }
?>