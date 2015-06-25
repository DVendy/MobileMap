<?php
include 'var.php';

	$con=mysqli_connect($host,$username,$password,$db_name);
	// Check connection
	if (mysqli_connect_errno())
	{
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	 // $_POST["version"] = "2015-01-01 00:00:00";
	 // $_POST["username"] = 'KDS-01';
	 // $_POST["password"] = '081284591862';
	$sql="SELECT * FROM bis WHERE id='".$_POST["username"]."' AND hp='".$_POST["password"]."'";

	if ($result=mysqli_query($con,$sql))
	{
	// Return the number of rows in result set
		$rowcount=mysqli_num_rows($result);
		
		if($rowcount > 0){
			echo "success";
		}
		else{
			echo "fail";
		}

	}else{
		echo "Error: " . $sql . "<br>" . $con->error;
	}

?> 