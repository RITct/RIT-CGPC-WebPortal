<?php


////////////////sql
$sql='';
if (empty($_REQUEST["btec"]))
{}
    else
    {if (empty($sql))
            $sql.="DEGREE='B.Tech'";
        else
            $sql.=" OR DEGREE='B.Tech'";
    }
 if (empty($_REQUEST["mtec"]))
 {}
    else
        if (empty($sql))
            $sql.="DEGREE='M.Tech'";
        else
            $sql.=" OR DEGREE='M.Tech'";

if (empty($_REQUEST["mca"]))
  {  }
    else
        if (empty($sql))
            $sql.="DEGREE='MCA'";
        else
            $sql.=" OR DEGREE='MCA'";
    
 if (empty($_REQUEST["barc"]))
 {}
    else
        if (empty($sql))
            $sql.="DEGREE='B.Arch'";
        else
            $sql.=" OR DEGREE='B.Arch'";

/////////////////sql1
$sql1='';
if (empty($_REQUEST["cse"]))
  {  }
    else
        if (empty($sql1))
            $sql1.="BRANCH='CSE'";
        else
            $sq1l.=" OR BRANCH='CSE'";
    
 if (empty($_REQUEST["ece"]))
 {}
    else
        if (empty($sql1))
            $sql1.="BRANCH='ECE'";
        else
            $sql1.=" OR BRANCH='ECE'";

if (empty($_REQUEST["me"]))
  {  }
    else
        if (empty($sql1))
            $sql1.="BRANCH='ME'";
        else
            $sql1.=" OR BRANCH='ME'";
    
 if (empty($_REQUEST["eee"]))
 {}
    else
        if (empty($sql1))
            $sql1.="BRANCH='EEE'";
        else
            $sql1.=" OR BRANCH='EEE'";
if (empty($_REQUEST["ce"]))
 {}
    else
        if (empty($sql1))
            $sql1.="BRANCH='CE'";
        else
            $sql1.=" OR BRANCH='CE'";
/////////////////////////////


if (empty($_REQUEST["cgpa"]))
    $sql2=0;
    else
    $sql2=$_REQUEST["cgpa"];
        

if (empty($_REQUEST["sarr"]))
    $sql3=50;
    else
    $sql3=$_REQUEST["sarr"];
        


include "db_config.php";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   //session_start();
//$_SESSION["email"] = "abhi2303237@gmail.com";
//$session=$_SESSION["email"];
if(empty($sql))
{}
else
{$sql.=' AND ';}
if(empty($sql1))
{}
else
{$sql1.=' AND ';}
$sqlf ="SELECT admissionno, name, degree, branch, arrier, cgpa, cvurl FROM STUDENT WHERE $sql  $sql1  CGPA>= $sql2 AND ARRIER<= $sql3";


//echo $sqlf;


$result = $conn->query($sqlf);
$tag='';
$tag.='<tr>
                      <th>Admission No</th>
                      <th>Name</th>
                      <th>Degree</th>
                      <th>Branch</th>
                      <th>Arriers</th>
					  <th>CGPA</th>
					  <th>View Profile</th>
                    </tr>';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
         {
       // echo $row["name"];
        
        $tag.='<tr><td>' . $row["admissionno"] . '</td>';
        $tag.='<td>' . $row["name"] . '</td>';
        $tag.='<td>' . $row["degree"] . '</td>';
        $tag.='<td>' . $row["branch"] . '</td>';
        $tag.='<td>' . $row["arrier"] . '</td>';
        $tag.='<td>' . $row["cgpa"] . '</td>';
        $tag.='<td><span class="label"><a href="' . $row["cvurl"]  . '">View</a></span></td>
                    </tr>';
        
          }
echo $tag;          

}

 else {
    echo "0 results";
}$conn->close();



?>