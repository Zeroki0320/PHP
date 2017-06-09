<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lab 3 Task 2.php</title>
<script>
	function calTwoNumbers($num1,$num2){
		return ($num1 + $num2);
	}
</script>
</head>

<body>
	<?php
		echo "<h2>Calculate Two Numbers Function</h2>";
		echo "The total of two numbers",$_GET['num1'], "and" $_GET['num2'], "is" , calTwoNumbers($_GET['num1'],$_GET['num2']);	
	
	?>
</body>
</html>