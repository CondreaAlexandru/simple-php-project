<?php
	require 'config.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];





$sql = "INSERT INTO products (title, description, price, stock) VALUES ('$title','$description', '$price', '$stock')";
$result = mysqli_query($connection, $sql);


header('location: index.php');