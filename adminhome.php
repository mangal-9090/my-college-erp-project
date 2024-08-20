<?php

include 'admission_style.php';

session_start();
if(!isset($_SESSION['email'])){

    header("location:index.php");

}

elseif($_SESSION['usertype']=='student'){
    header("location:index.php");
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

    <!-- Main Content -->
    <div class="content container">
        
        <h1 class="mb-4">Registration Form</h1>
        <form action="connect.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="EnrollmentNo">Enroll No:</label>
                <input type="text" id="EnrollmentNo" name="EnrollmentNo" required>
            </div>
            <div class="mb-3">
                <label for="FatherName">Father's Name:</label>
                <input type="text" id="FatherName" name="FatherName" required>
            </div>
            <div class="mb-3">
                <label for="MotherName">Mother's Name:</label>
                <input type="text" id="MotherName" name="MotherName" required>
            </div>
            <div class="mb-3">
                Date of Birth: <input type="date" name="date" required>
            </div>
            <div class="mb-3">
                <label>Gender:</label>
                <input type="radio" id="male" name="gender" value="Male"> <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female"> <label for="female">Female</label>
            </div>
            <div class="mb-3">
                Address: <textarea name="address" placeholder="type your address" required></textarea>
            </div>
            <div class="mb-3">
                Course:
                <select name="course" required>
                    <option value="BCA 1st SEM">BCA 1st SEM</option> 
                    <option value="BCA 2nd SEM">BCA 2nd SEM</option> 
                    <option value="BCA 3rd SEM">BCA 3rd SEM</option>
                    <option value="BCA 4th SEM">BCA 4th SEM</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone">Phone No:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                Password: <input type="password" name="password" required> 
            </div>
            <div class="mb-3">
                <label for="picture">Add Your Passport Size Photo:</label>
                <input type="file" id="picture" name="picture" accept="image/*">
            </div>

            <!-- Add other form inputs here with appropriate Bootstrap classes -->
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
