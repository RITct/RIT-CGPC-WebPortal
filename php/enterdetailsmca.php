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
     //   $_SESSION['email']='abhi@gmail.com';
        $session=$_SESSION['email'];
   // $newDate = date("Y-m-d", strtotime($_POST["dob"]));
    $sql1= "UPDATE mca SET 
        
       
        mcapercent='{$_POST["mcapercent"]}',
        mcayop='{$_POST["mcayop"]}',
        
        bs1gpa='{$_POST["bs1gpa"]}',
        bs2gpa='{$_POST["bs2gpa"]}', 
        bs3gpa='{$_POST["bs3gpa"]}',
        bs4gpa='{$_POST["bs4gpa"]}',
        bs5gpa='{$_POST["bs5gpa"]}',
        bs6gpa='{$_POST["bs6gpa"]}',
		ms1gpa='{$_POST["ms1gpa"]}',
        ms2gpa='{$_POST["ms2gpa"]}', 
        ms3gpa='{$_POST["ms3gpa"]}',
        ms4gpa='{$_POST["ms4gpa"]}',
        ms5gpa='{$_POST["ms5gpa"]}',
        ms6gpa='{$_POST["ms6gpa"]}',
        s1backlog='{$_POST["s1backlog"]}',
        s2backlog='{$_POST["s2backlog"]}', 
		s3backlog='{$_POST["s3backlog"]}', 
	    s4backlog='{$_POST["s4backlog"]}',
		s5backlog='{$_POST["s5backlog"]}',
		s6backlog='{$_POST["s6backlog"]}',
		bcapercent='{$_POST["bcapercent"]}',
		bcacollege='{$_POST["bcacollege"]}',
		bcayop='{$_POST["bcayop"]}',
        standingbacklogs='{$_POST["standingbacklogs"]}',
	    allclearfirstchance='{$_POST["allclearfirstchance"]}'
		
           
        WHERE email='$session'";
       // print_r($_POST);
		//echo $sql1;
    $result=$conn->query($sql1);
   
    if($result){
        echo '<script> alert("done");</script>';
		 echo '<script>window.location.assign ("../editprofilemca.php");	</script>';
	}
    else
        echo '<script> alert("no"); </script>';


    ?>