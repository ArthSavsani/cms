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
$fullname=$_POST['first'];
$enrollno=$_POST['last'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$mobileno=$_POST['number'];
$DOB=$_POST['date'];
$bloodgroup=$_POST['blood'];
$branch=$_POST['branch'];
$password=$_POST['pass'];
$email=$_POST['email'];

$sql = "INSERT INTO newuserlogin
 VALUES ('null','$fullname','$enrollno','$address','$gender','$mobileno','$DOB','$bloodgroup','$branch','$password','$email')";
if (mysqli_query($conn, $sql)) {
    echo "New User created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
