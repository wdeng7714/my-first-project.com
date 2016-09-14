<?php 
	include "connectdb.php";

?>
<html>
	<head>
		<title>My First Project</title>
	</head>
	<body>
		<h1>My First Project</h1>

		<ul>
			<?php
				$query = "SELECT * FROM characters";
				$result = mysqli_query($con, $query);

				while($row = mysqli_fetch_array($result)){
					echo "<li><a href = info.php?id=" . $row[id].">" . $row['forename'] . " " . $row['surname'] . "</a></li>";
				}
			?>
		</ul>
	</body>
</html>
