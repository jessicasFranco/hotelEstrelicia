<?php
    error_reporting(0);
    $host="localhost";//host name normalmente localhost
    $user="root";
    $pass="";
    $db_name="mydb"; //nome da base dados

    $coneccao=mysql_connect($host,$user,$pass)or die (mysql_error());
    mysql_select_db($db_name) or die (mysql_error());
?>