<?php


$connection = mysqli_connect('localhost', 'root', '', 'products');

if (!$connection) {
	die(mysqli_connect_error());
}

