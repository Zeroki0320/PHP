<html>
	<head>
		<title>Lab4 Task3.php</title>
		<script type="text/javascript">
		function chkForm(){
			if(document.getElementById("tfUser").value != "")
				document.forms[0].submit();
			else{
				alert("please enter username!!");
				document.getElementById("tfUser").focus();
			}
		}
		</script>
	</head>
	<body>
	<?php
  			$loginForm = <<<EOD
    		<form method="post" action="$_SERVER[PHP_SELF]">
    		<label for="tfUser">Username </label>
    		<input type="text" name="tfUser" id="tfUser" /> <br />
    		<p><input type="button" value="Login" 
              onClick="chkForm()"/>
       		<input type="reset" value="Reset" /></p>
  			</form>
			EOD; 
		  
</body>
</html>