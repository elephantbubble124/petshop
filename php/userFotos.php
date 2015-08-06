<?php
	// Display products list
	include 'db.inc.php';
	$result = mysqli_query($link, 'SELECT * FROM products');
	if (!$result)
	{
		$error = 'Error fetching  products from database!';
		include '../error.html.php';
		exit();
	}
	while ($row = mysqli_fetch_array($result))
	{
		$Products[] = array('id' => $row['id'], 'name' => $row['name'], 'type' => $row['type'],'cost' => $row['cost'], 'description' => $row['description'], 'image' => $row['image']);
	}
	include 'userFotos.html.php';
?>