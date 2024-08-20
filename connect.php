<?php

session_start();


// Database configuration
$servername = "localhost"; // Change this to your database server name if it's different
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "website"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and initialize with empty values
    $name = $EnrollmentNo = $FatherName = $MotherName = $date = $gender = $address = $course = $email = $phone = $loginid = $password = $picture = "";

    // Processing form data when form is submitted
    $name = test_input($_POST["name"]);
    $EnrollmentNo = test_input($_POST["EnrollmentNo"]);
    $FatherName = test_input($_POST["FatherName"]);
    $MotherName = test_input($_POST["MotherName"]);
    $date = test_input($_POST["date"]);
    $gender = isset($_POST["male"]) ? "Male" : (isset($_POST["female"]) ? "Female" : "");
    $address = test_input($_POST["address"]);
    $course = test_input($_POST["course"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    //$loginid = test_input($_POST["loginid"]);
    $password = test_input($_POST["password"]);
    // Upload and handle the picture
    // Example: move_uploaded_file($_FILES["picture"]["tmp_name"], "uploads/" . $_FILES["picture"]["name"]);
    // $picture = "uploads/" . $_FILES["picture"]["name"];

    // Insert data into the database
    $sql = "INSERT INTO registration (name, EnrollmentNo, FatherName, MotherName, date, gender, address, course, email, phone, loginid, password) VALUES ('$name', '$EnrollmentNo', '$FatherName', '$MotherName', '$date', '$gender', '$address', '$course', '$email', '$phone', '$loginid', '$password')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message']="you registered successfully";

        header("location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Close connection
$conn->close();
?>
