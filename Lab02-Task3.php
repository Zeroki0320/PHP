<html>
	<head>
		<meta charset="utf-8">
		<title>Lab 2 Task 3</title>
	</head>
	<body>
	<?php
		$Fibonacci=array(1,1);
		for($i=0;$i<20;$i++){
			$Fibonacci[$i+2]=$Fibonacci[$i]+$Fibonacci[$i+1];
			printf("<tr><td>$i</td><td>$Fibonacci</td></tr>");
		}
		?>
	</body>
</html>