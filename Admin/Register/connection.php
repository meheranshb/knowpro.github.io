<?php
	//for MySQLi OOP
	$conn = new mysqli('sql300.epizy.com', 'epiz_27333095', 'xw43fy9p', 'epiz_27333095_register_users');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	////////////////

	//for MySQLi Procedural
	// $conn = mysqli_connect('localhost', 'root', '', 'mydatabase');
	// if(!$conn){
	//     die("Connection failed: " . mysqli_connect_error());
	// }
	////////////////
?>