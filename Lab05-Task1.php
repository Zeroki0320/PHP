<html>
	<head>
		<title>Lab4 Task1</title>
		<meta charset="utf-8">
	</head>
	<body>
        <?php function Delete($data){
        $sql ="DELETE FROM customers WHERE clientID=$data";
        }
        ?>
		<?php
		$hostname="127.0.0.1";
        $username="root";
        $pwd="";
        $db="lab04";
        $conn=mysqli_connect($hostname,$username,$pwd,$db)or die(mysqli_connect_error());
		$sql="SELECT * FROM customers";
		while($rc = mysqli_fetch_assoc($rs)){
			echo "<a href='' onclick='"Delete(.$rc['clientID'].)"';>Delete Record</a>", $rc["clientID"]."<br/>";
		}
		?>
	</body>
</html>