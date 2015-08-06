<?php
	$link = mysqli_connect('127.0.0.1', 'root');
	if(!$link)
	{
		$error = 'Unable to connect to the database server.';
		include 'error.html.php';
		exit();
	}
	if(!mysqli_set_charset($link, 'utf8'))
	{
		$output = 'Unable to set database connection encoding.';
		include 'output.html.php';
		exit();
	}
	//select database to connect to 
	if(!mysqli_select_db($link, 'petshopsupplies'))
	{
		$error = 'Unable to locate the petshopsupplies database.';
		include 'error.html.php';
		exit();
	}
?>