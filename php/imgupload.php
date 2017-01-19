<?php

///upload profile
  
//session_start();
//$_SESSION["email"]="abhi2303237@gmail.com";
//include "db_config.php";
include "select.class.php";
// Create connection
//$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}
$email=getreturn('allstudents','email');
//echo "admin no".$email;


$target_dir = "../uploads/profiles/";
$msg=" ";
$msg1=" ";
$filename=basename($_FILES["image"]["name"]);
$msg.= $filename;
$msg.='\n';
$extension = getExtension($filename);
$msg.= $extension;
$msg.='\n';


$target_file = $target_dir . $email . '.' . $extension;

$msg.= $target_file;
$msg.='\n';



//echo $target_file;
//echo basename($_FILES["imgupload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $msg= "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
//if (file_exists($target_file)) {
  //  echo "Sorry, file already exists.";
    //$uploadOk = 0;
//}
// Check file size
//if ($_FILES["image"]["size"] > 5000000000) {
  //  echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPEG"
&& $imageFileType != "gif" ) {
    $msg.= "   Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $msg.='\n';
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $msg.= "Sorry, your file was not uploaded.";
    $msg.='\n';
// if everything is ok, try to upload file
} 
else {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $msg.= "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        $msg.='\n';
        update ('allstudents','PROFILEURL',$target_file);
        
    } else {
        $msg.= "Sorry, there was an error uploading your file.";
        $msg.='\n';
    }

}

//echo '<script> alert("'.$msg.'");</script>';
//echo $msg;
echo"<br>";
echo"<br>";
echo"<br>";

///upload cv

//$_SESSION["email"]="abhi2303237@gmail.com";
//include "db_config.php";

// Create connection
//$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}
$email=getreturn('student','email');
//echo "admin no".$email;


$target_dir = "../uploads/cvs/";

$filename=basename($_FILES["cv"]["name"]);
$msg1.= $filename;
$msg1.='\n';
$extension = getExtension($filename);
$msg1.= $extension;
$msg1.='\n';


$target_file = $target_dir . $email . '.' . $extension;

$msg1.= $target_file;
$msg1.='\n';

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Allow certain file formats
if($imageFileType != "pdf" ) {
    $msg1.= "Sorry, only pdf files are allowed.";
    $msg1.='\n';
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $msg1.= "Sorry, your file was not uploaded.";
    $msg1.='\n';
// if everything is ok, try to upload file
} 
else {
    if (copy($_FILES["cv"]["tmp_name"], $target_file)) {
        $msg1.= "The file ". basename( $_FILES["cv"]["name"]). " has been uploaded.";
        $msg1.='\n';
        update ('student','cvurl',$target_file);    
        
    } else {
        $msg1.= "Sorry, there was an error uploading your file.";
        $msg1.='\n';
    }
}
echo '<script> alert("'.$msg.$msg1.'");
window.location.assign ("../editprofilegen.php");
	</script>';

?>