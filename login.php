<html>
<body bgcolor='gray'>
<?php


	$username = $_POST['username'];
	$password = $_POST['password'];
	 if($username=='admin' && $password=='admin' )
	
        {
		    
			header("location:admin.php");

		}
		else
		{
			echo "<script>"."alert('<??????  USERNAME or PASSWORD INCORRECT  ??????>')"."</script>";
			include('ADMIN1.php');

		}

?>
</body>
</html>