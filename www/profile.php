<?php include_once("includes/header.php"); 

$result = mysqli_query($connection, "SELECT * FROM users WHERE id='$_GET[id]'");
$array = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $_SESSION['last_name'].' '.$_SESSION['first_name']; ?></title>
</head>
<body>
<h4>Профиль <?php echo $array['email']; ?></h4>


<h4> <?php echo $login; ?></h4>
<h4> <?php echo $user_id; ?></h4>
<h4> <?php echo $status; ?></h4>

<?php

echo "<img src='avatars/noAvatar.jpg'> <br><br>";

if(isset($login) AND isset($status)){
	if($array['foto'] == ''){
		$avatar = "noAvatar.jpg";
	}else{
		$avatar = $array['foto'];
	}

	echo "<img src='avatars/".$avatar."'> <br><br>";
	echo "<strong>".$array['first_name']." ".$array['last_name']."</strong><br>";

	/*	switch ($array['birthday']){//Превращаем номер месяца в название
		case "1" : $month = "Января"; break;
		case "2" : $month = "Февраля"; break;
		case "3" : $month = "Марта"; break;
		case "4" : $month = "Апреля"; break;
		case "5" : $month = "Мая"; break;
		case "6" : $month = "Июня"; break;
		case "7" : $month = "Июля"; break;
		case "8" : $month = "Августа"; break;
		case "9" : $month = "Сентября"; break;
		case "10" : $month = "Октября"; break;
		case "11" : $month = "Ноября"; break;
		case "12" : $month = "Декабря"; break;
	}

	echo "Дата регистрации: ".$array['reg_date']." <br>";
	echo "Пол: ".$array['sex']." <br>";
	echo "День рождения: ".$array['birthdate_day']." ".$month." ".$array['birthdate_year']." <br>";
	echo "Страна: ".$array['country']." <br>";
	echo "Город: ".$array['city']." <br>";*/

	if($_GET['id'] == $_SESSION['id']){//Редактировать профиль может только хозяин
		echo "<a href='edit.php'>Редактировать профиль</a>";
	}
}else{
print <<<HERE
<table>
Вход:
<br>
<br>
 
      <form action="login.php" method="POST">
      <tr>
      <td>Логин:</td>
      <td><input type="text" name="login" ></td>
      </tr>
	  
      <tr>
      <td>Пароль:</td>
      <td><input type="password" name="password" ></td>
      </tr>
	  
	  <tr>
      <td colspan="2"><input type="submit" value="OK" name="submit" ></td>
      </tr>
      </form>
      </table>
<a href="registration.php">Регистрация</a><a href="password.php">Восстановление пароля</a>
HERE;
}

?>
echo "<a href='query_logout.php'>Log out</a>";

</body>
</html>



