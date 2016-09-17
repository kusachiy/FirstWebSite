<?php

include_once "includes/header.php";
$query = "insert into users values(0,'".$_Post['login']."','".$_Post['password']."','".$_Post['last_name']."','".$_Post['first_name']."','".$_Post['birthday']."','".$_Post['foto']."','".$_Post['email']."') ";

$result = mysqli_query($query,$connection) or die("Error registration");

$echo query
?>