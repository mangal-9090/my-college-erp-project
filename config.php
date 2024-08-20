<?php

	error_reporting(0);
	session_start();
    
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "website";


	$data = mysqli_connect($host,$user,$password,$db);

	if($data===false){
		die("connection error");
	}

	if($_SERVER["REQUEST_METHOD"]=='POST'){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "select * from form where email ='".$email."' AND password = '".$password."'  ";

		$result = mysqli_query($data, $sql);

		$row = mysqli_fetch_array($result);


		if($row["usertype"]=="student"){

			$_SESSION['email']="$email";
			$_SESSION['usertype']="student";
			header("location:studenthome.php");

		}
		elseif($row["usertype"]=="admin"){

			$_SESSION['email']="$email";
			$_SESSION['usertype']="admin";
			header("location:adminhome.php");

		}
		else{

			session_start();
			$message = "username or password does not match";

			$_session['loginMessage'] = $message;

			header("location:index.php");
		}
	}
?>
