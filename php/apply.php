<?php
include "db_config.php";
//$_SESSION["email"] = "abhi2303237@gmail.com";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   } 
    
   $_REQUEST["name"] = str_replace(' ','',$_REQUEST["name"]);

$sql1="update student set {$_REQUEST["name"]} = 1 where email='{$_REQUEST["email"]}'";

$result = $conn->query($sql1);
    
    if($result)
        echo "done";
    else
        echo no;
   