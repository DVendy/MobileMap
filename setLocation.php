<?php
include 'var.php';

	$con=mysqli_connect($host,$username,$password,$db_name);
	// Check connection
	if (mysqli_connect_errno())
	{
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
//$_POST["version"] = "2015-06-08 15:20:21";
	$sql="INSERT INTO map (bis_id, date, latitude, longitude) VALUES ('".$_POST["id"]."', '".$_POST["date"]."', '".$_POST["latitude"]."', '".$_POST["longitude"]."')";

	if ($con->query($sql) === TRUE) {
		$sql="UPDATE bis SET status = '".$_POST["status"]."', keterangan2 = '".$_POST["keterangan"]."' WHERE id = '".$_POST["id"]."'";
		if ($con->query($sql) === TRUE) {
		    echo "success";
		}else {
		    echo "Error: " . $sql . "<br>" . $con->error;
		}
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
?>