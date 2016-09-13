<?php
	$con=mysqli_connect("localhost","root","","test1");
	$con->set_charset("utf8");
	$table_result=mysqli_query($con,"SELECT * FROM `test1`");
	
	mysqli_close($con);
	// declare an array
	$i=0;
	while($detail_list=mysqli_fetch_array($table_result)){
		 
	 	$test[$i]['id']=$detail_list['id'];
		$test[$i]['name']=$detail_list['name'];
		$test[$i]['amount']=$detail_list['amount'];
		$i=$i+1;
	 
	}
	
	// turn array to json
	echo json_encode($test);
?>