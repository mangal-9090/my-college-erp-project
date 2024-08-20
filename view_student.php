<?php

include 'admission_style.php';

error_reporting(0);

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

$sql="SELECT username, email, password,id FROM form WHERE usertype='student'";
$result=mysqli_query($data,$sql);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>
        .dlt-button{
            background-color: red;
            color: #fff;
            border: none;
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>


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

    <div class="content">
        <center>
        <h1> Student's data</h1>

        <?php

            if($_SESSION['message']){
                echo $_SESSION['message'];
            }

            unset($_SESSION['message']);

        ?>
        <br><br>

        <table border="2px">
            <tr>
                
                <th style="padding:15px; font-size: 15px;">Username</th>
                <th style="padding:15px; font-size: 15px;">Email</th>
                <th style="padding:15px; font-size: 15px;">Password</th>
                <th style="padding:15px; font-size: 15px;">Delete</th>
               
            </tr>

            <?php

            while($info=$result->fetch_assoc())
            {

            ?>

            <tr>
                <td style="padding:20px;">
                    <?php echo "{$info['username']}"  ?>

                </td>
                <td style="padding:20px;"><?php echo "{$info['email']}"  ?></td>
                <td style="padding:20px;"><?php echo "{$info['password']}" ?></td>
                <td style="padding:20px;"><button class="dlt-button"><?php echo "<a onClick=\"javascript:return confirm('are you sure to delete?') \" href='delete.php?student_id={$info['id']}'>delete</a>" ?></button></td>
                
            </tr>

            <?php

            }


            ?>
        
        </table>
        </center>
    </div>
</body>
</html>