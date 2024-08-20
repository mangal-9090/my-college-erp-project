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
$id=$_GET['student_id'];

$sql="SELECT name, email, assignment_1,classtest_1 FROM registration WHERE id='$id'"; 

$result=mysqli_query($data,$sql);

$info= $result->fetch_assoc();


if(isset($_POST['update'])){
    $name=$_POST['name'];
    $Assignment=$_POST['assignment'];
    $Classtest=$_POST['classtest'];
    $Email=$_POST['email'];


    $query="UPDATE registration SET name='$name', assignment_1='$Assignment', classtest_1='$Classtest', email='$Email' WHERE id='$id'";

    $result2=mysqli_query($data,$query);

    if($result2){

        header("location:admission.php");
         
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
                    <a href="view_student.php" class="nav-link">View Student</a>
                </li>
                
            </ul>
        </div>
    </aside>

    <div class="form-container">
        
        <h2 style="text-align: center;">Update Student</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo "{$info['name']}";  ?>" required>
            </div>
            <div class="form-group">
                <label for="assignment">Assignment:</label>
                <input type="text" id="assignment-1" name="assignment" value="<?php echo "{$info['assignment_1']}";  ?>" required>
            </div>
            <div class="form-group">
                <label for="classtest">Class test:</label>
                <input type="text" id="classtest1" name="classtest" value="<?php echo "{$info['classtest_1']}";  ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo "{$info['email']}";  ?>" required>
            </div>
            <button type="submit" class="submit-btn" name="update">Update</button>
        </form>
        
    </div>