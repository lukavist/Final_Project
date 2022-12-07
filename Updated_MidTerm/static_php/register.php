<?php
	$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

	if (mb_strlen($email) < 12 || mb_strlen($email) > 32) {
		echo "Invalid amount of characters(email)";
		exit();
	} elseif (mb_strlen($name) < 3 || mb_strlen($name) > 40) {
		echo "Invalid amount of characters(name)";
		exit();
	}elseif (mb_strlen($pass) < 5 || mb_strlen($pass) > 15) {
		echo "Invalid amount of characters(password from 5 to 15)";
		exit();
	}

	$pass = md5($pass."a1b2");

	$mysql = new mysqli('localhost','root','','users-db');   /*replace with ('name_of_host','name_of_user','user_password''name_of_db')*/

	$mysql->query("INSERT `user`(`email`, `name`, `pass`) VALUES ('$email','$name','$pass')");
	$mysql->close();

	header('Location: ../static_html/');




?>