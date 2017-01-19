<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RIT CGPC</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-blue sidebar-mini">
  <?php
include "php/select.class.php";
//include "php/redirectsecurepage.php"
//session_start();
  // $_SESSION["email"] = "abhi2303237@gmail.com";
?>
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>RIT</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>RIT</b>CGPC</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php 
					get("student","profileurl");
					?>" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php 
					get("student","name");
					?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php 
					get("student","profileurl");
					?>" class="img-circle" alt="User Image">
                    <p>  <?php 
					get("student","name");
					?>
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="editprofile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="php/logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php 
					get("student","profileurl");
					?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php 
					get("student","name");
					?></p>
              <!-- Status -->
             
            </div>
          </div>

          <!-- search form (Optional) -->
         
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="profileview.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li><a href="notification.php"><i class="fa fa-bullhorn"></i> <span>Notification</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-list-ol"></i> <span>Results</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="aptitude.php"><i class="fa fa-pencil"></i> Apptitude</a></li>
                <li><a href="interview.php"><i class="fa fa-black-tie"></i> Interview</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Profile
            <small>Edit Profile</small>
          </h1>
         
        </section>
		
        <!-- Main content -->
        <section class="content">
		<div class="row">
            
            
            <!-- left column -->
            <div class="col-md-6">
                
                <!-- Upload File -->
				<div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Photo and CV </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="php/imgupload.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
				  <div class="form-group">
                    <label for="resumefile">Upload Photo</label>
					<!-- <input id="fileupload" type="file" multiple="multiple" /> -->
                      <input name="image" id="imgupload"  type="file" accept="image/*" multiple>
					  <div id="dvPreview">
						</div>
                    </div>
					
				  <div class="form-group">
                   <label for="resumefile">Upload Resume</label>
                      <input name="cv" type="file" id="exampleInputFile">
                    </div>
				
				  <button type="submit" class="btn btn-primary">Save</button>
				 </div>
				  </form>
				  </div>
                
                
              <!-- Personal Details Form -->
				<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Personal Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="php/enterdetailsdpk.php" method="post">
                  <div class="box-body">
				  
					 <div class="form-group">
                    <!--  <label for="resumefile">Upload Photo</label>
                      <input type="file" accept="image/*" id="profilephoto"> -->
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" value="<?php 
					get("student","email");
					?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email" disabled>
                    </div>
                    <div class="form-group">
                      <label for="Fullname">Name</label>
                      <input value="<?php 
					get("student","name");
					?>"  name="name" type="text" class="form-control" id="FullName" placeholder="Enter Full Name">
                    </div>
           
                    <div class="form-group">
                      <label>Date of Birth</label>
                      <input value="<?php 
					get("student","dob");
					?>" name="doj" type="date" class="form-control" placeholder="DD - MM - YYYY">
                    </div>
					<div class="form-group">
                      <label>Gender</label>
					<div class="radio">
                        <label>
                          <input name="gender" type="radio" id="optionsRadios1" value="Male" <?php 
					maleradio("student","gender");
					?>>
                          Male
                        </label>
						<label>&nbsp </label>
						<label>
                          <input type="radio" name="gender" id="optionsRadios2" value="Female" <?php 
					femaleradio("student","gender");
					?>>
                          Female
                        </label>
					</div>
					</div>
					
					<div class="form-group">
                      <label>Marital Status</label>
					<div class="radio">
                        <label>
                          <input  type="radio" name="marital" id="MaritalRadios1" value="Single" <?php 
				singleradio("student","maritalstatus");
					?>>
                          Single
                        </label>
						<label>&nbsp </label>
						<label>
                          <input type="radio" name="marital" id="MaritalRadios2" value="Married" <?php 
				marriedradio("student","maritalstatus");
					?>>
                          Married
                        </label>
					</div>
					</div>
					
					<div class="form-group">
                      <label>Mobile Number</label>
                      <input value="<?php 
					get("student","mobile");
					?>" name="mobile" type="tel" class="form-control" placeholder="10 Digit">
                    </div>
					
					<div class="form-group">
                      <label>Address</label>
                      <textarea  name="address" class="form-control" rows="3" placeholder="Permanent Residential Address"><?php 
					get("student","address");
					?></textarea>
					</div>
					
					<!-- <div class="form-group">
                      <label>Nationality</label>
                      <input value="<?php 
					get("student","nationality");
					?>" name="nation" type="text" class="form-control" placeholder="Enter Nationality">
                    
					</div>
					
					<div class="form-group">
                      <label>PAN</label>
                      <input value="<?php 
					get("student","panno");
					?>" name="pan" type="text" class="form-control" placeholder="Enter Permanent Account Number">
					  
					</div><div class="form-group">
                      <label>Passport Number</label>
                      <input value="<?php 
					get("student","passportno");
					?>" name="pass" type="text" class="form-control" placeholder="Enter Passport Number">
                    
					</div>
					
					 <div class="form-group">
                    <!--  <label for="resumefile">Upload Resume</label>
                      <input type="file" id="exampleInputFile">-->
                    </div>
					
                      <!-- <p class="help-block">Click Save button to Save changes.</p> -->
                    
                   <!-- <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div> 
                    </div><!-- /.box-body -->

                  <!-- <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div> -->
               <!-- </form> -->
              </div> <!--PErsonal Details Form Ends-->
			  
             
				
					<!-- Experience Details -->
					<div class="box box-success">
						<div class="box-header with-border">
							<h3 class="box-title">Professional/Experience Details</h3>
						</div> <!-- /.box-header -->
							<!-- form start -->
							<!--	<form role="form"> -->
								  <div class="box-body">
									<div class="form-group">
									  <label for="experience">Prior Experience &nbsp</label><small>In Months</small>
									  <input value="<?php 
					get("student","experience");
					?>" name="exp" type="number" class="form-control" id="Experience" placeholder="In Months (Internship or Job)">
									</div>
									
									<div class="form-group">
									  <label for="experiencecompany">Company/Institution</label>
									  <input value="<?php 
					get("student","company");
					?>" name="comp" type="text" class="form-control" id="Experiencecompany" placeholder="Company of Internship or Job">
									</div>
									
									<div class="form-group">
									  <label for="KeySkills">Key Skills</label>
									  <textarea name="skill" placeholder="Describe your skils" class="form-control" id="keyskills" rows="3"><?php 
					get("student","keyskills");
					?></textarea>
								 	</div>
									
								  
								  <!-- <div class="box-footer">
										<button type="submit" class="btn btn-primary">Save</button>
									</div> -->
								  
								  
								  
								  </div>
								
					</div> <!-- Proffesional Experience Details -->
			  
			  </div> <!-- Left Column Ends -->

			
			<!-- right column -->
            <div class="col-md-6">
              <!-- Educational Details Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Educational Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
			 <!--	<form role="form"> -->
                  <div class="box-body">
                    <div class="form-group">
                      <label for="10percentage">10th Percentage</label>
                      <input value="<?php 
					get("student","sslcpercent");
					?>" name="sslcp" type="number" min="0" max="100" class="form-control" id="10thpercentage" placeholder="Enter Percentage">
                    </div>
					
					
					<div class="form-group">
                      <label for="10board">10th Examination Board</label>
                      <input value="<?php 
					get("student","tenthboard");
					?>" id="10thboard" name="sslcboard" type="text" class="form-control" placeholder="Enter SSLC Exam Board">
                    </div>
					
					<div class="form-group">
                      <label for="10year">10th Year of Passing</label>
					  <div>
					  <select name="sslcyop" class="form-control">
						<option selected value="<?php 
					get("student","sslcyop");
					?>"><?php 
					get("student","sslcyop");
					?></option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						</select>
						</div>
                     <!-- <input type="number" class="form-control" id="10thyearofpassing" placeholder="Enter Year">-->
                    </div>
					
					<div class="form-group">
                      <label for="12percentage">12th Percentage</label>
                      <input value="<?php 
					get("student","twelthpercent");
					?>" name="12p" type="number" min="0" max="100" class="form-control" id="12thpercentage" placeholder="Enter Percentage">
                    </div>
					
					<div class="form-group">
                      <label for="12thboard">12th Examination Board</label>
                      <input value="<?php 
					get("student","twelthboard");
					?>" id="12thboard" name="12board" type="text" class="form-control" id="12thboard" placeholder="Enter HIgher Secondary Exam Board">
                    </div>
					
					<div class="form-group">
                      <label for="12year">12th Year of Passing</label>
                      <div>
					  <select name="twelthyop" class="form-control">
						<option selected value="<?php 
					get("student","twelthyop");
					?>"><?php 
					get("student","twelthyop");
					?></option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						</select>
						</div>
					 <!-- <input type="number" class="form-control" id="10thpercentage" placeholder="Enter Year"> -->
                    </div>
					</div>
					 <!-- <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
					
                  </div> -->
			 <!--	</form>	-->
				</div> 
				
				<!--Educational Details Form Ends-->
					
				<!--Gradutaion Details Form-->
					<div class="box box-warning">
						<div class="box-header with-border">
						<h3 class="box-title">Graduation Details</h3>
						</div><!-- /.box-header -->
					<!-- form start -->
				<!--	<form role="form"> -->
						<div class="box-body">
						
						<div class="form-group">
							<label for="degree">Degree</label>
								<div>
									<select name="degree" class="form-control">
										<option selected value="<?php 
					get("student","degree");
					?>"><?php 
					get("student","degree");
					?></option>
										<option value="B.Tech">B.Tech</option>
										<option value="M.Tech">M.Tech</option>
										<option value="B.Arch">B.Arch</option>
										<option value="MCA">MCA</option>										
									</select>
								</div>
							</div>
							
							<div class="form-group">
							<label for="branch">Branch</label>
								<div>
									<select name="branch" class="form-control">
										<option selected value="<?php 
					get("student","branch");
					?>"><?php 
					get("student","branch");
					?></option>
										<option value="ME">ME</option>
										<option value="ECE">ECE</option>
										<option value="CE">CE</option>
										<option value="CSE">CSE</option>
										<option value="EEE">EEE</option>											
									</select>
								</div>
							</div>
							
							<div class="form-group">
							<label for="degree">Specialization</label> <small>M.Tech </small>
								<div>
									<select name="spcl" class="form-control">
										<option id="spcl" selected value="<?php 
					get("student","specialization");
					?>"><?php 
					get("student","specialization");
					?></option>
										<option value="btech">Transportation</option>
										<option value="mtech">CSE</option>
										<option value="barch">ECE</option>
										<option value="mca">None</option>										
									</select>
								</div>
							</div>
							
							<div class="form-group">
									<label for="cgpa">CGPA</label>
										<div>
											<input value="<?php 
					get("student","cgpa");
					?>" name="cgpa" type="number" min="0.0" max="10.0" class="form-control" id="cgpa" placeholder="Enter Current CGPA" step="0.1">
										</div>
									
							</div>
							<div class="form-group">
									<label for="cgpa">SGPA Semester 1-2</label>
										<div>
											<input value="<?php 
					get("student","sgpa12");
					?>" id="sgpas1" name="sgpas1" type="number" min="0.0" max="10.0" class="form-control" id="cgpa" placeholder="Enter Semester 1 and 2 SGPA" step="0.1">
										</div>
									
							</div>
							
							
							<div class="form-group">
									<label for="cgpa">SGPA Semester 3</label>
										<div>
											<input value="<?php 
					get("student","sgpa3");
					?>" id="sgpas3" name="sgpas3" type="number" min="0.0" max="10.0" class="form-control" id="cgpa" placeholder="Enter Semester 3 SGPA" step="0.1">
										</div>
									
							</div>
							
							
							<div class="form-group">
									<label for="cgpa">SGPA Semester 4</label>
										<div>
											<input value="<?php 
					get("student","sgpa4");
					?>" id="sgpas4" name="sgpas4" type="number" min="0.0" max="10.0" class="form-control" id="cgpa" placeholder="Enter Semester 4 SGPA" step="0.1">
										</div>
									
							</div>
							
							
							<div class="form-group">
									<label for="cgpa">SGPA Semester 5</label>
										<div>
											<input value="<?php 
					get("student","sgpa5");
					?>" id="sgpas5" name="sgpas5" type="number" min="0.0" max="10.0" class="form-control" id="cgpa" placeholder="Enter Semester 5 SGPA" step="0.1">
										</div>
									
							</div>
							
							
							<div class="form-group">
									<label for="cgpa">SGPA Semester 6</label>
										<div>
											<input value="<?php 
					get("student","sgpa6");
					?>" id="sgpas6" name="sgpas6" type="number" min="0.0" max="10.0" class="form-control" id="cgpa" placeholder="Enter Semester 6 SGPA" step="0.1">
										</div>
									
							</div>
							
							<div class="form-group">
							  <label for="Degreeyear">Year of Passing</label>
							  <div>
							  <select name="yop" class="form-control">
								<option selected value="<?php 
					get("student","yop");
					?>"><?php 
					get("student","yop");
					?></option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								</select>
								</div>
							</div>
							
							<div class="form-group">
									<label for="sarr">Standing Arriers</label>
										<div>
											<input value="<?php 
					get("student","arrier");
					?>" id="sarr" name="sarr" type="number" min="0" max="50" class="form-control" placeholder="Enter Current Standing Arriers" step="1">
										</div>
									
							</div>
							
							<!-- <div class="box-footer">
								<button type="submit" class="btn btn-primary">Save</button>
							</div> -->
							</div>
							
						<!--	</form>-->
					<!--form ends-->
					</div>
					<!-- Gradutaion Details Form Ends-->
					
				
			</div> <!--Right Collumn Ends-->
		</div>
		
		
		<div class="box-footer">
										<button type="submit" class="btn btn-primary btn pull-right">Save</button>
                                        </form>
									</div>
		<!--Row Ends-->
		
		
			
          <!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	</div>
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          VERSION 1.0.0
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">RIT CGPC</a>.</strong> All rights reserved.
      </footer>

     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
     


     <script language="javascript" type="text/javascript">
        $(function () {
            $("#imgupload").change(function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = $("#dvPreview");
                    dvPreview.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = $("<img />");
                                img.attr("style", "height:100px;width: 100px");
                                img.attr("src", e.target.result);
                                dvPreview.append(img);
                            }
                            reader.readAsDataURL(file[0]);
                        } else {
                            alert(file[0].name + " is not a valid image file.");
                            dvPreview.html("");
                            return false;
                        }
                    });
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        });
    </script>




    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
