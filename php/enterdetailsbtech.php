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
	 
       // $_SESSION['email']='abhi@gmail.com';
        $session=$_SESSION['email'];
    //$newDate = date("Y-m-d", strtotime($_POST["dob"]));
    $sql1= "UPDATE btech SET 
        currsem='{$_POST["currsem"]}',
        rollno='{$_POST["rollno"]}',
        btechpercent='{$_POST["btechpercent"]}',
        btechyop='{$_POST["btechyop"]}',
        btechcollege='{$_POST["btechcollege"]}',
        s1gpa='{$_POST["s1gpa"]}',
        s2gpa='{$_POST["s2gpa"]}', 
        s3gpa='{$_POST["s3gpa"]}',
        s4gpa='{$_POST["s4gpa"]}',
        s5gpa='{$_POST["s5gpa"]}',
        s6gpa='{$_POST["s6gpa"]}',
        s7gpa='{$_POST["s7gpa"]}',
        s8gpa='{$_POST["s8gpa"]}', 
        s1backlog='{$_POST["s1backlog"]}',
        s2backlog='{$_POST["s2backlog"]}', 
		s3backlog='{$_POST["s3backlog"]}', 
	    s4backlog='{$_POST["s4backlog"]}',
		s5backlog='{$_POST["s5backlog"]}',
		s6backlog='{$_POST["s6backlog"]}',
		s7backlog='{$_POST["s7backlog"]}',
		s8backlog='{$_POST["s8backlog"]}', 
	    standingbacklogs='{$_POST["standingbacklogs"]}',
	    allclearfirstchance='{$_POST["allclearfirstchance"]}'
           
        WHERE email='$session'";
        //echo $sql1;
    $result=$conn->query($sql1);
   
    if($result){
        echo '<script> alert("done");</script>';
		 echo '<script>window.location.assign ("../editprofilebtech.php");	</script>';
	}
    else
        echo '<script> alert("no"); </script>';


    ?>