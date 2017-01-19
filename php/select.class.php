<?php
session_start();

//update ('student','cvurl','buhahah');
//echo 'done';
function update ($table,$column,$string)
{
include "db_config.php";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    //session_start();
//$_SESSION["email"] = "abhi2303237@gmail.com";
$session=$_SESSION["email"];
     
$sql =" UPDATE $table SET $column='$string' WHERE email='$session' ";
$result = $conn->query($sql);
 

$conn->close();
}

function get($table,$coloumn)
{
include "db_config.php";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   //session_start();
//$_SESSION["email"] = "abhi@gmail.com";
$session=$_SESSION["email"];
     
$sql ="SELECT $coloumn FROM $table WHERE email='$session' ";
$result = $conn->query($sql);

if ($coloumn=='dob')
{
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
         {
         
         $newDate = date("d-m-Y", strtotime($row["$coloumn"]));
        echo $newDate;
          }}
          
 else {
    echo "0 results";


}}

else
{

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
         {
        echo $row["$coloumn"];
          }}
          
 else {
	 //echo $sql;
	 //$row = $result->fetch_assoc();
	 //echo $row["$coloumn"];
    echo "0 results";
    }
}$conn->close();
}




function getreturn($table,$coloumn)
{
include "db_config.php";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   //session_start();
//$_SESSION["email"] = "abhi2303237@gmail.com";
$session=$_SESSION["email"];
     
$sql ="SELECT $coloumn FROM $table WHERE email='$session' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
         {
        //echo $row["$coloumn"];
        return ($row["$coloumn"]);
          }}
          
 else {
    echo "0 results";
}$conn->close();
}
//get("loginreg","password");




 function maleradio($table,$coloumn)
{
include "db_config.php";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  // session_start();
//$_SESSION["email"] = "abhi2303237@gmail.com";
$session=$_SESSION["email"];
     
$sql =" SELECT $coloumn FROM $table WHERE email='$session' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
         {
           if ($row["$coloumn"]=="m")
           {   
               echo 'checked';}
          }}
          
 else {
    echo "0 results";
}$conn->close();
}




function femaleradio($table,$coloumn)
{
include "db_config.php";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  // session_start();
//$_SESSION["email"] = "abhi2303237@gmail.com";
$session=$_SESSION["email"];
     
$sql =" SELECT $coloumn FROM $table WHERE email='$session' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
         {
           if ($row["$coloumn"]=='f')    
           {   
               echo 'checked';}
          }}
          
 else {
    echo "0 results";
}$conn->close();
}



function singleradio($table,$coloumn)
{
include "db_config.php";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   // session_start();
//$_SESSION["email"] = "abhi2303237@gmail.com";
$session=$_SESSION["email"];
     
$sql =" SELECT $coloumn FROM $table WHERE email='$session' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
         {
           if ($row["$coloumn"]=="y")
           {   
               echo 'checked';}
          }}
          
 else {
    echo "0 results";
}$conn->close();
}



function marriedradio($table,$coloumn)
{
include "db_config.php";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  // session_start();
//$_SESSION["email"] = "abhi2303237@gmail.com";
$session=$_SESSION["email"];
     
$sql =" SELECT $coloumn FROM $table WHERE email='$session' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
         {
           if ($row["$coloumn"]=="n")
           {   
               echo 'checked';}
          }}
          
 else {
    echo "0 results";
}$conn->close();
}

// function to return extension

function getExtension($str)
{
	 $i = strrpos($str,".");
	 if (!$i) { return ""; }
	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}


?> 