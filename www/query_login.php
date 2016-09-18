<?php
session_start();
include_once "connection.php";
echo "<meta charset = 'UTF-8'>";

$login = $_POST["login"];
$password = $_POST["pass"];

$query = "SELECT * From users where (email = '".$login."')&&(password = '".$password."')     ";
$result = mysqli_query($connection,$query);
$user =  mysqli_fetch_array($result);

$_SESSION['id'] = $user['id'];
$_SESSION['first_name'] = $user['first_name'];
$_SESSION['last_name'] = $user['last_name'];
$_SESSION['birthday'] = $user['birthday'];
$_SESSION['email'] = $user['email'];
$_SESSION['foto'] = $user['foto'];
$_SESSION['status'] = 'login';
header("location: /");

?>