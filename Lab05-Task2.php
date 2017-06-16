<!doctype html>
<html>
<head>
	<style>
	#id{
		padding:20px;
	}
	</style>
    <script>
	function setValue(data){
	document.getElementById('custID').value = data;
	document.forms[0].submit();
	
}
	</script>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$hostname = "127.0.0.1";
	$username = "root";
	$pwd = "";
	$db = "lab05";
	$conn = mysqli_connect($hostname,$username,$pwd,$db) or die(mysqli_connect_error());
	$sql="SELECT *FROM customers";
	$rs = mysqli_query($conn,$sql) or die (mysqli_error($conn));
	?>
    <form action="Lab05-Task2b.php" method="post">
    <table cellpadding="10">
    	<tr><th>Action</th><th>custID</th><th>custName</th><th>custPwd</th><th>custGender</th></tr>
    <?php
	while($rc = mysqli_fetch_assoc($rs)){		echo "<tr><td>","<input type='button' value='Delete' onClick='setValue(".$rc['custID'].")'>","</td>","<td>",$rc['custID'],"</td>","<td>",$rc['custName'],"</td><td>",$rc['custPswd'],"</td><td>",$rc['custGender'],"</td></tr>";
	}
	?>
    </table>
    </form>
</body>
</html>