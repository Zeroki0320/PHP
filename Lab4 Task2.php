<html>
	<head>
		<title>Lab4 Task2</title>
		<meta charset="utf-8">
		<style>
			table.cust{
				padding: 5px;
			}
		</style>
	</head>
	<body>
		<?php
		$hostname="127.0.0.1";
		$username="root";
		$pwd="";
		$db="lab04";
		$conn =mysqli_connect($hostname,$username,$pwd,$db) or die(mysqli_connect_error());
		$sql="SELECT * FROM customers";
		$rs = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		?>
		<?php
			function check($gender){
				if($gender=='M'){
					echo "<input type='radio' value='RB' checked='checked'/>Male";
					echo "<input type='radio' value='RB'/>Female";
				}else{
					echo "<input type='radio' value='RB'/>Male";
					echo "<input type='radio' value='RB' checked='checked'/>Female";
				}
			}
		?>
			<table name="cust"><tr><th>Cust ID</th><th>Cust Name</th><th>Cust Password</th><th>Cust Gender</th></tr>
		<?php
		while($rc = mysqli_fetch_assoc($rs)){
			echo "<tr><td>",$rc["custID"],"</td><td>",$rc["custName"],"</td><td>",$rc["custPswd"],"</td><td>",check($rc["custGender"]),"</td></tr>";
		}
		?>
		</table>
	</body>
</html>