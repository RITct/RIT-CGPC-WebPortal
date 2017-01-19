<?php
include "db_config.php";
$_SESSION["email"] = "abhi2303237@gmail.com";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM notification ORDER BY nid DESC ";

$result = $conn->query($sql);
$tag='';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
         {
       // echo $row["name"];
        $row["degree"]=' ';
        $row["branch"]=' ';
        
        if($row["btech"])
            $row["degree"].='B.Tech,';
        
        if($row["mtech"])
            $row["degree"].='M.Tech,';
        
        if($row["mca"])
            $row["degree"].='MCA,';
        
        if($row["barc"])
            $row["degree"].='B.Arch,';
        
        if($row["cse"])
            $row["branch"].='CSE,';
        
        if($row["eee"])
            $row["branch"].='EEE,';
        
        if($row["ce"])
            $row["branch"].='CE,';
        
        if($row["me"])
            $row["branch"].='ME,';
        
         if($row["ece"])
            $row["branch"].='ECE,';
        
        
$tag.=" <div class=\"row\">
            <div class=\"col-md-12\"><div class=\"box box-widget\">
                <div class='box-header with-border'>
                  <div class='user-block'>
                    <img class='img-circle' src='../../dist/img/user1-128x128.jpg' alt='user image'>
                    <span class='username'><a href=\"#\">Rajesh R</a></span>
                    <span class='description'>5/3/2016</span>
                  </div><!-- /.user-block -->
                  <div class='box-tools'>
                    <!-- <button class='btn btn-box-tool' data-toggle='tooltip' title='Mark as read'><i class='fa fa-circle-o'></i></button> -->
                    <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
          <!--          <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>-->
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class='box-body'>
                   <div class='box-body'>
                  <!-- post text -->  
					<div class=\"container-fluid\">
					  <p>{$row["descp"]}</p>            
					  <table class=\"table table-hover table-bordered\">
						<tbody>
						  <tr>
							<td>company name</td>
							<td>{$row["compname"]}</td>
						  </tr>
						  <tr>
							<td>Job Title</td>
							<td>{$row["jobtitle"]}</td>
						  </tr>
						  <tr>
							<td>Last Date of Application</td>
							<td>{$row["lastdate"]}</td>
						  </tr>
						  <tr>
							<td>Degree</td>
							<td>{$row["degree"]}</td>
						  </tr>
						  <tr>
							<td>Branches</td>
							<td>{$row["branch"]}</td>
						  </tr>
						  <tr>
							<td>Max Standing Arriers</td>
							<td>{$row["maxarriers"]}</td>
						  </tr>
						  <tr>
							<td>Min CGPA</td>
							<td>{$row["cgpa"]}</td>
						  </tr>
						  <tr>
							<td>Annual Package</td>
							<td>{$row["package"]}</td>
						  </tr>
						</tbody>
					  </table>
					</div>

                  <!-- Social sharing buttons -->
				  <div class=\"pull-right\">
				  <button class='btn btn-primary btn-xs'><i class='fa fa-check'></i><a href=\"php/apply.php?email={$_SESSION["email"]}&name={$row["compname"]}\"> Apply</a> </button>	
				  <button class='btn btn-danger btn-xs disabled'><i class='fa fa-times'></i>Cancel</button>  
				  </div>
				  <span class='pull-left text-muted'><i class='fa fa-check'>45 Applied</i></span>
                  
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
              ";
        
    }
              echo $tag;
    }

 else {
    echo "0 results";
}$conn->close();
    