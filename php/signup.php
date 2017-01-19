<html> 
    <body>
    <?php
	include "db_config.php";
//$servername = "localhost";
//$username = "root";
//$password = "root";
//$dbname = "placement_cell_db1";
        
// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

print_r($_POST);
        
        //inserted
     if (isset($_POST["email"]{0}) and isset($_POST["fullname"]{0}) and isset($_POST["password"]{0}) and isset($_POST["course"]{0}))
     
        { 
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $sql="SELECT * FROM loginreg WHERE email='$email'";
        $result = $conn->query($sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
   if($count==1){
       
       echo '<script> alert("email already registered");
window.location.assign ("../index.html");	</script>';
       
   }
  
        
       
    else{    
        
        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO loginreg (name, password, email,course) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstname, $pass, $email,$course);
              
$sql=$conn->prepare("INSERT INTO allstudents (name, email ,profileurl,course) VALUES (?, ?, ?, ?)");
  $sql->bind_param("ssss", $firstname, $email, $defaultprofile, $course); 
  
  $course=$_POST["course"];
  
  
  if($course=="btech")
  {
	  $insert="insert into btech (email) values ('$email')";
  }
  else if($course=="mtech")
  {
	  $insert="insert into mtech (email) values ('$email')";
  }
  else if($course=="barch")
	  
  {
	 $insert="insert into barch (email) values ('$email')"; 
  }
  else
  {
	  $insert="insert into mca (email) values ('$email')";	  
  }	  
             
//$ref=$conn->query($insert);
echo $insert;        
        
// set parameters and execute
$firstname = $_POST["fullname"];
$pass = $_POST["password"];
$email = $_POST["email"];
$course=$_POST["course"];
$defaultprofile = '../uploads/profiles/new.jpg';
$stmt->execute();
$sql->execute();
$ref=$conn->query($insert);

        
        
        
echo '<script> alert("successfully registered");
window.location.assign ("../index.html");	</script>';

    }
    }
    else {
    echo '<script> alert("All Fields Are Mandatory");
    window.location.assign ("../register.html");	
    </script>';
    }
?>
    </body>
</html>