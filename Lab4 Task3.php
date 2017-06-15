<html>
	<head>
		<title>Lab4 Task3.php</title>
	</head>
	<body>
    <?php function check(){
    ?>
        <form action="Lab4 Task3.php" method="get">
		<label>Customer ID :<input value="custID" type="text"></label><br/>
		<label>Customer Name :<input value="custName" name="tfUser" type="text"></label><br/>
		<label>Password :<input  value="custPwd" type="text"></label><br/>
		<label>Gender :<input value="custGen" type="radio">Male<input value="custGen" type="radio">Female</label><br/>
		<input value="submit" type="submit">
		<input type="reset">
		</form>
    <?php
}
        ?>
	  <?php
        $hostname="127.0.0.1";
        $username="root";
        $pwd="";
        $db="lab04";
        $conn=mysqli_connect($hostname,$username,$pwd,$db)or die(mysqli_connect_error());
        
        if(isset($_POST['submit'])) {
            if($_POST['custID']==null||$_POST['custName']==null||$_POST['custpwd']==null||$_POST['custGen']==null){
                check();
                echo "<h3>please complete the form.";
            }else{
                $sql = "SELECT * FROM customers WHERE custID='".$_POST['custID']."';";
                $rs = mysqli_query($conn, $sql)or die(mysqli_error($conn));
                if(mysqli_num_rows($rs)>0){
                    check();
                    echo "The data is already exist.";
                }else{
                     $sql = "INSERT INTO customers VALUES('".$_POST['custID']."','".$_POST['custName']."','".$_POST['custPwd']."','".$_POST['custGen']."');";
                    check();
                    if(mysqli_query($conn,$sql)){
                        echo"insert successful!";
                    }else{
                        echo"insert error!";
                    }
                    mysqli_close($conn);
                }
            }
        } 
        ?> 
</body>
</html>