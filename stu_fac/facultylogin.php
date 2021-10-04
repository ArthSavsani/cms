<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
$uname=$_POST['user'];
$pword=$_POST['pass'];

$sql = "INSERT INTO facultylogin
 VALUES ('null',$uname','$pword')";
 

if(empty($_POST['user']))
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
$username=($_POST['user']); 
$password=($_POST['pass']);

$sql="SELECT * FROM facultylogin WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    $_SESSION['ID']=$username;
    header('Location: http://localhost/AP/faculty/oneschool/index1.php');
} else {
    echo '<script> alert("PLEASE ENTER VALID USERNAME/PASSWORD")</script>';
}

ob_end_flush();
mysqli_close($conn);
?>
</html>