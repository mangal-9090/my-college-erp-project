<?php

include 'admission_style.php';

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

$sql="SELECT name, ENROLLMENTNO, FatherName, course,id,assignment_1,classtest_1  FROM registration";
$result=mysqli_query($data,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>
        .update-button {
            background-color: skyblue;
            color: white;
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
                    <a href="#" class="nav-link">Admission</a>
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
        <h1>Registered Students</h1>
        <br><br>

        <table border="2px">
            <tr>
                
                <th style="padding:15px; font-size: 15px;">Name</th>
                <th style="padding:15px; font-size: 15px;">Enrollment no.</th>
                <th style="padding:15px; font-size: 15px;">Father's name</th>
                <th style="padding:15px; font-size: 15px;">Course</th>
                <th style="padding:15px; font-size: 15px;">Assignment-1</th>
                <th style="padding:15px; font-size: 15px;">Class test-1</th>
                <th style="padding:15px; font-size: 15px;">Update</th>
                
               
            </tr>

            <?php

            while($info=$result->fetch_assoc())
            {

            ?>

            <tr>
                <td style="padding:20px;">
                    <?php echo "{$info['name']}"  ?>

                </td>
                <td style="padding:20px;"><?php echo "{$info['ENROLLMENTNO']}"  ?></td>
                <td style="padding:20px;"><?php echo "{$info['FatherName']}" ?></td>
                <td style="padding:20px;"><?php echo"{$info['course']}" ?></td>
                <td style="padding:20px;"><?php echo"{$info['assignment_1']}" ?></td>
                <td style="padding:20px;"><?php echo"{$info['classtest_1']}" ?></td>
                <td style="padding:20px;"><button class="update-button"><?php echo "<a href='update_student.php?student_id={$info['id']}'> Update </a>"; ?></button></td>
            </tr>

            <?php

            }


            ?>
        
        </table>
        </center>
    </div>
</body>

</html>
    