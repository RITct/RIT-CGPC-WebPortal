<?php
include "db_config.php";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="select * from result where 1";


$result = $conn->query($sql);
$tag='';
$tag.='  <thead>
                      <tr>
                        <th>Serial No.</th>
                        <th>Name</th>
                        <th>Degree</th>
                        <th>Branch</th>
                        <th>Score</th>
                      </tr>
                    </thead>
                    <tbody>';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
         {
       // echo $row["name"];
        
        $tag.='<tr><td>' . $row["rid"] . '</td>';
        $tag.='<td>' . $row["studentname"] . '</td>';
        $tag.='<td>' . $row["degree"] . '</td>';
        $tag.='<td>' . $row["branch"] . '</td>';
        $tag.='<td>' . $row["marks"] . '</td></tr>';
       // $tag.='<td>' . $row["cgpa"] . '</td>';
        //$tag.='<td><span class="label"><a href="' . $row["cvurl"]  . '">View</a></span></td>
                   // </tr>';
        
          }
echo $tag;          

}

 else {
    echo "0 results";
}$conn->close();