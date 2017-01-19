    <?php
include "db_config.php";
        
        // Create connection
$conn = new mysqli($host, $username, $password, $db_name);
        
        // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
    // prepare and bind
     session_start();
      //  $_SESSION['email']='abhi2303237@gmail.com';
        $session=$_SESSION['email'];
    $name=$_POST["name"];
    $newDate = date("Y-m-d", strtotime($_POST["doj"]));
    $sql1= "UPDATE student SET 
        NAME='{$_POST["name"]}',
        DOB='$newDate',
        GENDER='{$_POST["gender"]}',
        MARITALSTATUS='{$_POST["marital"]}',
        MOBILE='{$_POST["mobile"]}',
        ADDRESS='{$_POST["address"]}',
        tenthboard='{$_POST["sslcboard"]}',
        twelthboard='{$_POST["12board"]}',
        specialization='{$_POST["spcl"]}',
        sgpa12='{$_POST["sgpas1"]}',
        sgpa3='{$_POST["sgpas3"]}', 
        sgpa4='{$_POST["sgpas4"]}',
        sgpa5='{$_POST["sgpas5"]}',
        sgpa6='{$_POST["sgpas6"]}',
        arrier='{$_POST["sarr"]}',
        SSLCPERCENT='{$_POST["sslcp"]}', 
        SSLCYOP='{$_POST["sslcyop"]}',
        TWELTHPERCENT='{$_POST["12p"]}',
        TWELTHYOP='{$_POST["twelthyop"]}',
        BRANCH='{$_POST["branch"]}',
        DEGREE='{$_POST["degree"]}',
        CGPA='{$_POST["cgpa"]}',
        YOP='{$_POST["yop"]}', 
        EXPERIENCE='{$_POST["exp"]}',
        COMPANY='{$_POST["comp"]}', 
        KEYSKILLS='{$_POST["skill"]}'
       
    
        WHERE email='$session'";
        echo $sql1;
    $result=$conn->query($sql1);
   
    if($result)
        echo '<script> alert("done");
window.location.assign ("../profileview.php");	</script>';
	    
    else
        echo '<script> alert("no"); </script>';

/*
echo "  NAME='{$_POST["name"]}',
        DOB='{$_POST["doj"]}',
        GENDER='{$_POST["gender"]}',
        MARITALSTATUS='{$_POST["marital"]}',
        MOBILE='{$_POST["mobile"]}',
        ADDRESS='{$_POST["address"]}',
        tenthboard='{$_POST["sslcboard"]}',
        twelthboard='{$_POST["12board"]}',
        specialization='{$_POST["spcl"]}',
        sgpa12='{$_POST["sgpas1"]}',
        sgpa3='{$_POST["sgpas3"]}', 
        sgpa4='{$_POST["sgpas4"]}',
        sgpa5='{$_POST["sgpas5"]}',
        sgpa6='{$_POST["sgpas6"]}',
        arrier='{$_POST["sarr"]}',
        SSLCPERCENT='{$_POST["sslcp"]}', 
        SSLCYOP='{$_POST["sslcyop"]}',
        TWELTHPERCENT='{$_POST["12p"]}',
        TWELTHYOP='{$_POST["twelthyop"]}',
        BRANCH='{$_POST["branch"]}',
        DEGREE='{$_POST["degree"]}',
        CGPA='{$_POST["cgpa"]}',
        YOP='{$_POST["yop"]}', 
        EXPERIENCE='{$_POST["exp"]}',
        COMPANY='{$_POST["comp"]}', 
        KEYSKILLS='{$_POST["skill"]}' "

*/
    ?>