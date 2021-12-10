<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$surname = $_POST['surname'];
		$username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $role = $_POST['role'];
		$sql = "INSERT INTO users (firstname, surname, username, password, gender, role) VALUES ('$firstname', '$surname', '$username', '$password', '$gender', '$role')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>