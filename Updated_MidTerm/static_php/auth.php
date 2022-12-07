<?php
	$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

	$pass = md5($pass."a1b2");

	$mysql = new mysqli('localhost','root','','users-db');   /*replace with ('name_of_host','name_of_user','user_password''name_of_db')*/

	$sel = $mysql->query("SELECT * FROM `user` WHERE `email` = '$email' AND `pass` = '$pass'") ;
	$users = $sel->fetch_assoc();
	if(count($users) == 0 or empty($users)){
		echo 'User not found';
		exit();
	}

	setcookie('user',$users['name'],time()+2400,'/');

	$mysql->close();

	header('Location: ../static_html/login.php');

?>