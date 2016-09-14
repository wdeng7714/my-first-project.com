<?php
	include_once "connectdb.php";
	$charID = $_GET["id"];
	$query = "SELECT * FROM characters WHERE id=" . $charID;
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
?>
<html>
	<head>
		<title>
			<?php 
				echo $row["forename"] . " " . $row["surname"];
			?>
		</title>
		<link rel="stylesheet" type ="text/css" href="css/main.css">
	</head>
	<body>
		<h1 class = "important">CHARACTER PROFILE</h1>
		<p class = "not-important">Email: 
			<?php
				echo $row["email"];
			?>
		</p>
		<p class = "not-important"> Phone Number:
			<?php
				echo $row["number"];
			?>
		</p >
		<p class ="not-important">Character ID:
			<?php
				echo $row["id"];
			?>
		</p>
	</body>


</html>