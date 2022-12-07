<?php
	setcookie('user',$users['name'],time()-2400,'/');
	header('Location: ../static_html/');
?>