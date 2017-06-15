<html>
	<head>
		<title>Lab4 Task1</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		$hostname="127.0.0.1";
		$username="root";
		$pwd="";
		$db="Lab4";
		$conn =mysqli_connect($hostname,$username,$pwd,$db or die(mysqli_connect_error()));
		$sql="SELECT * FROM customers";
		while($rc = mysqli_fetch_assoc($rc)){
			echo $rc["clientID"]."<br/>";
		}
		?>
	</body>
</html>