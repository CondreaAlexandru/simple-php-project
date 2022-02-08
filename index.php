<?php 
	require "header.html";
	require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">

		#container {
			font-size: 13px;
			border: 3px solid grey;
			border-radius: 10px;
			width: 200px;
			display: inline-grid;
			height: 350px;
			margin: 10px;
			padding: 5px;
			text-align: center;

		}

	</style>
</head>
<body>
<?php 

$sql = "SELECT * FROM `products` ORDER BY `products`.`id`  DESC ";
$result = mysqli_query($connection, $sql);

//Delete products
if(isset($_GET["id"]))
{
 $query = "DELETE FROM products WHERE id = '".$_GET["id"]."'";
 if(mysqli_query($connection, $query))
  {
  
  
  echo 'Data Deleted';
  }
  //header('Location:index.php');
}
?>

<div id="content">

	<?php 
while ($row = $result->fetch_assoc()) {
	
	echo "<div id='container'>";
	echo "<img src='https://www.viewstorm.com/wp-content/uploads/2014/10/default-img.gif' width='100%'>";
	echo "<h3>Title:".$row['title']."</h3><br>";
	echo "<p>Description: ".$row['description']."</p><br>";
	echo "<p>Price: " .$row['price']." $</p><br>";
	echo "<span>Stock: </span><input type='number' value=".$row['stock']." max=".$row['stock']." min='0'><br>";
	echo "<td><a href='index.php?id=".$row['id']."'>Delete</a></td>";
	echo "</div>";
}
?>

</div>

</body>
</html>