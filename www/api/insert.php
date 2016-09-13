<?php
	$con=mysqli_connect("localhost","root","","test1");
	$con->set_charset("utf8");

	mysqli_query($con,"INSERT INTO `test1` (`id`, `name`, `amount`) VALUES ('".rand(1000,9999)."', '".$_GET['name']."', '".$_GET['amount']."');");

	mysqli_close($con);
	// declare an array
	
	// turn array to json
	echo json_encode($test);
?>