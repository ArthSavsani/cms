<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$firstname=$_POST['first'];
$lecture_no=$_POST['lectureno'];
$date=$_POST['date'];


$sql = "INSERT INTO attendence
 VALUES ('$firstname','$lastname','$gender','$DOB','$bloodgroup','$email','$mobileno','$address','$branch')";
if (mysqli_query($conn, $sql)) {
    echo "New User created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
