<!DOCTYPE html>
<html>
    <head>
        <title>
            attendence
        </title>
        <style>
			body {
        background-image: url("http://localhost/themes1/attendence/attend.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        }
        #t{
    
            width: 50%;
        }
        </style>
    </head>
    <body>
        <form action="#" method="POST">
            <table id="t" border="5" style="background-color:darkolivegreen; font-family: serif;color: white;" >
                            <tr>
                    <td>Enrollment No.</td>
                    <td>Name</td>
                    <td>P/A</td>
                </tr>

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
$sql="SELECT * FROM newuserlogin";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
                ?><tr>
                    <td><?php echo $row['Enroll_No'] ?></td>
                    <td><?php echo $row['Fullname'] ?></td>
                    <td><input type="checkbox" name="RollNo[]" value="<?php echo $row['RollNo'] ?>"></td>
                </tr>
    
<?php }

                ?>
       <input type="submit" value="Save" name="save" style="background-color: darkolivegreen; font-family: serif;color: white;">

            <select required name="lectureno" style="background-color: darkolivegreen; font-family: serif;color: white;">
                <option>Select lecture</option>
                <option value="1">Lecture 1</option>
                <option value="2">Lecture 2</option>
                <option value="3">Lecture 3</option>
                <option value="4">Lecture 4</option>
                <option value="5">Lecture 5</option>
                <option value="6">Lecture 6</option>
            </select>
            <input type="date" name="date" style="background-color: darkolivegreen; font-family: serif;color: white;">
        </form>
    </body>

</html>
<?php

if(isset($_POST["save"]))
{
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
$present='';
foreach($_POST['RollNo'] as $roll){
 $present=$present.$roll.",";
}
$date=$_POST['date'];
$lecture=$_POST['lectureno'];

$sql1="INSERT INTO  attendence values ('$date','$lecture','$present')";
if(mysqli_query($conn,$sql1))
{
}
}
?>