<?php
include "db_config.php";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
    // prepare and bind
     session_start();
$sql1= "INSERT INTO interview (compname,testname,testdate,degree,branch,studentname) VALUES ( 
'{$_POST["compname"]}',
'{$_POST["jobtitle"]}',
'{$_POST["dat"]}',
'{$_POST["degree"]}',
'{$_POST["branch"]}',
'{$_POST["studentname"]}'
)";
//echo $sql1;

$result=$conn->query($sql1);
   if ($result)
   echo '<script> alert("done");
window.location.assign ("../index.html");	</script>';
?>