<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
 function setRecord($record){
	 ?>
	<label>Customer ID</label><input type="text" <?php "value='".$rc['custID']."'"?> /><br/>
     <label>Customer Name</label><input type="text" <?php "value='".$rc['custName']."'"?> /><br/>
     <label>Customer pwd</label><input type="text" <?php "value='".$rc['custPswd']."'"?>/><br/>
     <label>Gender</label><input type="radio" <?php "value='".$rc['custGender']."'" ?>>Male</input><input type="radio" <?php "value='".$rc['custGener']."'" ?>>Female</input>
    <?php
		  $sql = "INSERT INTO customers values('".$rc['custID']."','".$rc['custName']."','".$rc['custPswd']."','".$rc['custGender']."')"; 
 }
 ?>
	<?php
	$hostname = "127.0.0.1";
	$username = "root";
	$pwd = "";
	$db = "lab05";
	$conn = mysqli_connect($hostname,$username,$pwd,$db) or die(mysqli_connect_error());
	$sql="SELECT *FROM customers";
	$rs = mysqli_query($conn,$sql) or die (mysqli_error($conn));
	?>
    <form action="Lab05-Task2b.php" method="get">
    <table cellpadding="10">
    	<tr><th>Action</th><th>custID</th><th>custName</th><th>custPwd</th><th>custGender</th></tr>
    <?php
	while($rc = mysqli_fetch_assoc($rs)){		echo "<tr><td>","<input type='button' value='Update Record' onClick='setRecord(".$rc['custID'].")'>","</td>","<td>",$rc['custID'],"</td>","<td>",$rc['custName'],"</td><td>",$rc['custPswd'],"</td><td>",$rc['custGender'],"</td></tr>";
	}
	?>
    </table>
    </form>
</body>
</html>