    <?php
include "db_config.php";
include "select.class.php";
        // Create connection
$conn = new mysqli($host, $username, $password, $db_name);
        
        // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
    // prepare and bind
     //session_start();
      //  $_SESSION['email']='abhi2303237@gmail.com';
        $session=$_SESSION['email'];
		//print_r($_POST);
    $newDate = date("Y-m-d", strtotime($_POST["dob"]));
    $sql1= "UPDATE allstudents set
	
		rollno='{$_POST["rollno"]}',
		dist='{$_POST["dist"]}',
		pin='{$_POST["pin"]}',
		admno='{$_POST["admno"]}',
		currsem='{$_POST["currsem"]}',
        name='{$_POST["name"]}',
        dob='{$newDate}',
        gender='{$_POST["gender"]}',
        mobile='{$_POST["mobile"]}',
        address='{$_POST["address"]}',
        tenthboard='{$_POST["tenthboard"]}',
        twelthboard='{$_POST["twelthboard"]}',
        tenthpercent='{$_POST["tenthpercent"]}', 
        tenthyop='{$_POST["tenthyop"]}',
        twelthpercent='{$_POST["twelthpercent"]}',
        twelthyop='{$_POST["twelthyop"]}',
        dept='{$_POST["dept"]}',
        yoa='{$_POST["yoa"]}', 
        bloodgroup='{$_POST["bloodgroup"]}',
        polypercent='{$_POST["polypercent"]}', 
		polycollege='{$_POST["polycollege"]}', 
	    polyyop='{$_POST["polyyop"]}',
		areaofinterest='{$_POST["areaofinterest"]}',
		corparprize='{$_POST["corparprize"]}',
		internship='{$_POST["internship"]}',
		project='{$_POST["project"]}', 
	    publication='{$_POST["publication"]}',
	    patentproductstart='{$_POST["patentproductstart"]}', 
		otherskill='{$_POST["otherskills"]}',
		higherstudyresearch='{$_POST["higherstudyresearch"]}',
		govtjob='{$_POST["govtjob"]}',
        pvtjob='{$_POST["pvtjob"]}',
		startup='{$_POST["startup"]}',
	    otherobjective='{$_POST["otherobjective"]}'		
		
           
        WHERE email='$session'";
		$course=getreturn("allstudents","course");
		//echo $sql1;
		
		
        
    $result=$conn->query($sql1);
   
    if($result){
		
        echo '<script> alert("done");	</script>';
		
	        if($course=='btech'){
		    echo '<script>window.location.assign ("../editprofilebtech.php");	</script>';
			}
			else if($course=='mtech'){
			echo '<script>window.location.assign ("../editprofilemtech.php");	</script>';}
			else if($course=='mca'){
			echo '<script>window.location.assign ("../editprofilemca.php");	</script>';}
			else 
			echo '<script>window.location.assign ("../editprofilebarch.php");	</script>';	
	}
    else{
        echo '<script> alert("not updated"); </script>';
	echo '<script>
window.location.assign ("../editprofilegen.php");	</script>';

}
    ?>