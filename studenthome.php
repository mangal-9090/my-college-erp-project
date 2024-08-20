<?php

include 'admission_style.php';

session_start();
if(!isset($_SESSION['email'])){
    header("location:index.php");
    exit();
}

if($_SESSION['usertype'] == 'admin'){
    header("location:index.php");
    exit();
}

$host = "localhost";
$user = "root";
$password = "";
$db = "website";

$data = mysqli_connect($host, $user, $password, $db);

$email = $_SESSION['email'];
$sql = "SELECT name, ENROLLMENTNO, FatherName, course, assignment_1, classtest_1 FROM registration WHERE email = ?";
$stmt = $data->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "No records found.";
    exit();
}

$info = $result->fetch_assoc();

$_SESSION['success'] = "You have logged in";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <h1 class="h3 m-0"><a href="#" class="text-light text-decoration-none">Student Dashboard</a></h1>
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
                    <a href="#" class="nav-link">My Marks</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">My Result</a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="content">
        <center>
        <h1>My Details</h1>
        <br><br>

        <table border="2px">
            <tr>
                <th style="padding:15px; font-size: 15px;">Name</th>
                <th style="padding:15px; font-size: 15px;">Enrollment No.</th>
                <th style="padding:15px; font-size: 15px;">Father's Name</th>
                <th style="padding:15px; font-size: 15px;">Course</th>
                <th style="padding:15px; font-size: 15px;">Assignment-1</th>
                <th style="padding:15px; font-size: 15px;">Class Test-1</th>
            </tr>
            <tr>
                <td style="padding:20px;"><?php echo $info['name']; ?></td>
                <td style="padding:20px;"><?php echo $info['ENROLLMENTNO']; ?></td>
                <td style="padding:20px;"><?php echo $info['FatherName']; ?></td>
                <td style="padding:20px;"><?php echo $info['course']; ?></td>
                <td style="padding:20px;"><?php echo $info['assignment_1']; ?></td>
                <td style="padding:20px;"><?php echo $info['classtest_1']; ?></td>
            </tr>
        </table>
        </center>
    </div>
</body>
</html>
