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




$sql1= "INSERT INTO NOTIFICATION (compname,jobtitle,lastdate,descp,btech,mtech,mca,barc,cse,ece,me,ce,eee,maxarriers,cgpa,package) VALUES ('{$_POST["compname"]}',
'{$_POST["jobtitle"]}',
'{$_POST["ld"]}',
'{$_POST["desc"]}'," ;             
    
    if (isset($_POST["btech"]))
        $sql1=$sql1."1,";
    else
        $sql1=$sql1."0,";
    
if (isset($_POST["mtech"]))
        $sql1=$sql1."1,";
    else
        $sql1=$sql1."0,";
if (isset($_POST["mca"]))
        $sql1=$sql1."1,";
    else
        $sql1=$sql1."0,";
if (isset($_POST["barc"]))
        $sql1=$sql1."1,";
    else
        $sql1=$sql1."0,";
if (isset($_POST["cse"]))
        $sql1=$sql1."1,";
    else
        $sql1=$sql1."0,";

if (isset($_POST["ece"]))
        $sql1=$sql1."1,";
    else
        $sql1=$sql1."0,";

if (isset($_POST["me"]))
        $sql1=$sql1."1,";
    else
        $sql1=$sql1."0,";

if (isset($_POST["ce"]))
        $sql1=$sql1."1,";
    else
        $sql1=$sql1."0,";

if (isset($_POST["eee"]))
        $sql1=$sql1."1,";
    else
        $sql1=$sql1."0,";

$sql1=$sql1."{$_POST["StandingArriers"]},
{$_POST["CGPA"]},
{$_POST["Package"]}
)";

$_POST["compname"] = str_replace(' ','',$_POST["compname"]);
$sql2="ALTER TABLE student ADD {$_POST["compname"]} INT DEFAULT 0";


    echo $sql1;
    echo $sql2;	
  $res=$conn->query($sql2);
  if($res)  
     $result=$conn->query($sql1);
  
   
    if($result)
        echo '<script> alert("done");
window.location.assign ("../index.html");	</script>';
?>