<?php
include "db_config.php";
//$host="localhost"; // Host name
//$username="root"; // Mysql username
//$password="root"; // Mysql password
//$db_name="placement_cell_db1"; // Database name
$tbl_name="loginreg"; // Table name

// Connect to server and select databse.
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// username and password sent from form
$myusername=$_POST['email'];
$mypassword=$_POST['mypassword'];
print_r($_POST);

if($myusername=='rajesh@gmail.com' && $mypassword='admin')
{
    session_start();
    $_SESSION['email']= $myusername;
    header('Location:/studentdatabase.php');
    
}
    

else {

$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result = $conn->query($sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
// Store Session Data
$_SESSION['email']= $myusername;
//echo "LOGIN SUCESS";
header('Location:/editprofilegen.php');
}

else {
header('Location:/loginfail.html');
}

}
?>