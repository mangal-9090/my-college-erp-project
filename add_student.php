<?php

include 'admission_style.php';
include 'form_style.php';

session_start();
if(!isset($_SESSION['email'])){

    header("location:index.php");

}

elseif($_SESSION['usertype']=='student'){
    header("location:index.php");
}

$host="localhost";
$user="root";
$password="";
$db="website";

$data=mysqli_connect($host,$user,$password,$db);


if(isset($_POST['add_student'])){

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $usertype="student";

    $check = "SELECT * FROM form WHERE username='$username'";

    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo "<script type='text/javascript'>
        
        alert('username already exist. try another one');
        </script>";
    }
    else
    {

        $sql="INSERT INTO form(username,email,password,usertype) VALUES ('$username','$email','$password', '$usertype')";

        $result=mysqli_query($data,$sql);

        if($result){
            echo "<script type='text/javascript'> 

            alert('data upload success');
        
            </script>";
        }
        else{
            echo "upload failed";
        }

    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>


</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <h1 class="h3 m-0"><a href="#" class="text-light text-decoration-none">Admin Dashboard</a></h1>
            <div class="logout">
                <a href="logout.php" class="btn btn-light">Logout</a>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="container py-4">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="admission.php" class="nav-link"> Admission</a>
                </li>
                <li class="nav-item">
                    <a href="add_student.php" class="nav-link">Add Student</a>
                </li>
                <li class="nav-item">
                    <a href="viw_student.php" class="nav-link">View Student</a>
                </li>
                
            </ul>
        </div>
    </aside>
    
    
    <div class="form-container">
        
        <h2 style="text-align: center;">Add Student</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-btn" name="add_student">Submit</button>
        </form>
        
    </div>
    
</body>
</html>