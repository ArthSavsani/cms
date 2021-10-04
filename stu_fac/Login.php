<?php
session_start();

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
$uname=$_POST['username'];
$pword=$_POST['pass'];

$sql = "INSERT INTO newuserlogin;
 VALUES ('$uname','$pword')";

/*if (mysqli_query($conn, $sql)) {
    echo "New User created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/




if(empty($_POST['username']))
{
    echo "UserName is empty!";
    return false;
}
if(empty($_POST['pass']))
{
    echo "Password is empty!";
    return false;
}


// Define $username and $password 
$username=$_POST['username']; 
$password=($_POST['pass']);

$sql="SELECT * FROM newuserlogin WHERE Enroll_NO='$username' and password='$password'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {

    $_SESSION['UserID']=$username;
  header('Location: http://localhost/AP/education/index.html');
} else {
    echo '<script>alert("PLEASE ENTER VALID USERNAME/PASSWORD")</script>';
}

ob_end_flush();
mysqli_close($conn);
?>

