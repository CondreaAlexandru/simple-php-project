<?php 
	require "header.html";
	require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add new items</title>
	<style type="text/css">
		form {
			color: royalblue;
			font-weight: bold;
			font-family: Arial, Helvetica, sans-serif;;
			margin:20px auto;
  			width: 50%;
  			text-align: center;
		}

		input,textarea {
			margin: 10px 0;
			width: 300px;
			height: 2em;
			border-radius: 5px;
			border:  2px solid royalblue;
		}
		label,  {
			margin: 10px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
<form action="addConfig.php" method="POST">
	<label>Title product</label><br>
	<input type="text" name="title" placeholder="title"><br>
	<label>Description</label><br>
	<textarea name="description" style="height: 100px;" placeholder="Description"></textarea> <br>
	<label>Price</label><br>
	<input type="text" name="price" placeholder="price"><br>
	<label>Stock</label><br>
	<input type="stock" name="stock" placeholder="stock"><br>
	<br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
