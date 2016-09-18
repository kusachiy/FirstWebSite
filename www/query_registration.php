<?php

include_once "includes/header.php";
$query = "insert into users values(0,'".$_POST['email']."','".$_POST['password']."','".$_POST['last_name']."','".$_POST['first_name']."','".$_POST['birthday']."','".$_POST['foto']."') ";

$result = mysqli_query($connection,$query) or die("Error registration");
echo $query;

?>