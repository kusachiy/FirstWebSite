<?php

$host = "mysql.hostinger.ru";
$user = "u115702597_main";
$password = "baza01";
$db = "u261927365_tech" ;

$connection = mysqli_connect($host, $user, $password) or die("Error");
$select_bd = mysqli_select_db($connection, $db) or die ("Error");
 

?>