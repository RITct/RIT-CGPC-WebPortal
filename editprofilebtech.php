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
include "php/redirectsecurepage.php"
//session_start();
// $_SESSION["email"] = "abhi@gmail.com";
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
					get("allstudents","profileurl");
					?>" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php 
					get("allstudents","name");
					?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php 
					get("allstudents","profileurl");
					?>" class="img-circle" alt="User Image">
                    <p>  <?php 
					get("allstudents","name");
					?>
                      <small> <?php 
					get("allstudents","course");
					?></small>
                    </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="editprofilegen.php" class="btn btn-default btn-flat">Profile</a>
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
					get("allstudents","profileurl");
					?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php 
					get("allstudents","name");
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
            <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li><a href="#"><i class="fa fa-bullhorn"></i> <span>Notification</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-list-ol"></i> <span>Results</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-pencil"></i> Apptitude</a></li>
                <li><a href="#"><i class="fa fa-black-tie"></i> Interview</a></li>
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
                
                
              
			  <!--Gradutaion Details BTECH Form-->
					<div class="box box-success">
						<div class="box-header with-border">
						<h3 class="box-title">Under Graduation Details</h3>
						</div><!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="php/enterdetailsbtech.php" method="post" enctype="multipart/form-data">
				<!--	<form role="form"> -->
						<div class="box-body">
						
						<div class="form-group">
								<label for="currsem">Current Semester</label>
								<input value="<?php 
								get("btech","currsem");
								?>"  name="currsem" type="text" class="form-control" id="currsem" placeholder="Enter Current Semester">
							</div>
							<div class="form-group">
								<label for="rollno">Roll No.</label>
								<input value="<?php 
								get("btech","rollno");
								?>"  name="rollno" type="text" class="form-control" id="rollno" placeholder="Enter Roll No">
							</div>
							<div class="form-group">
								<label for="btechcollege">UG College</label>
								<input value="<?php 
								get("btech","btechcollege");
								?>"  name="btechcollege" type="text" class="form-control" id="btechcollege" placeholder="Enter Blood Group">
							</div>
							
							
					
							<div class="form-group">
									<label for="btcchpercent">UG Percentage</label>
										<div>
																<input value="<?php 
										get("btech","btechpercent");
										?>" name="btechpercent" type="number" min="0.0" max="10.0" class="form-control" id="btechpercent" placeholder="Enter Percentage" step="0.1">
										</div>
					
							</div>		


									<div class="form-group">
							  <label for="btechyop">Year of Passing</label>
							  <div>
							  <select name="btechyop" class="form-control">
								<option selected value="<?php 
					get("btech","btechyop");
					?>"><?php 
					get("btech","btechyop");
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
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2020">2021</option>
								<option value="2020">2022</option>
								<option value="2020">2023</option>
								<option value="2020">2024</option>
								<option value="2020">2025</option>
								<option value="2020">2026</option>
								<option value="2020">2027</option>
								<option value="2020">2028</option>
								<option value="2020">2029</option>
								<option value="2020">2030</option>
								</select>
								</div>
							</div>
							
										
					
							<div class="form-group">
									<label for="s1gpa">Semester 1 GPA</label>
										<div>
											<input value="<?php 
					get("btech","s1gpa");
					?>" id="sgpas1" name="s1gpa" type="number" min="0.0" max="10.0" class="form-control" id="s1gpa" placeholder="Enter GPA" step="0.1">
										</div>
									
							</div>
							
							
							<div class="form-group">
									<label for="s2gpa">Semester 2 GPA</label>
										<div>
											<input value="<?php 
					get("btech","s2gpa");
					?>" id="sgpas3" name="s2gpa" type="number" min="0.0" max="10.0" class="form-control" id="s2gpa" placeholder="Enter GPA" step="0.1">
										</div>
									
							</div>
							
							<div class="form-group">
									<label for="s3gpa">Semester 3 GPA</label>
										<div>
											<input value="<?php 
					get("btech","s3gpa");
					?>" id="s3gpa" name="s3gpa" type="number" min="0.0" max="10.0" class="form-control" placeholder="Enter GPA" step="0.1">
										</div>
									
							</div>
							
							
							<div class="form-group">
									<label for="s4gpa">Semester 4 GPA</label>
										<div>
											<input value="<?php 
					get("btech","s4gpa");
					?>" id="s4gpa" name="s4gpa" type="number" min="0.0" max="10.0" class="form-control" id="s4gpa" placeholder="Enter GPA" step="0.1">
										</div>
									
							</div>
							
							
							<div class="form-group">
									<label for="s5gpa">Semester 5 GPA</label>
										<div>
											<input value="<?php 
					get("btech","s5gpa");
					?>" id="s5gpa" name="s5gpa" type="number" min="0.0" max="10.0" class="form-control" placeholder="Enter GPA" step="0.1">
										</div>
									
							</div>
							
							
							<div class="form-group">
									<label for="s6gpa">Semester 6 GPA</label>
										<div>
											<input value="<?php 
					get("btech","s6gpa");
					?>" id="s6gpa" name="s6gpa" type="number" min="0.0" max="10.0" class="form-control" id="s6gpa" placeholder="Enter GPA" step="0.1">
										</div>
									
							</div>
							
							<div class="form-group">
									<label for="s7gpa">Semester 7 GPA</label>
										<div>
											<input value="<?php 
					get("btech","s7gpa");
					?>" id="s7gpa" name="s7gpa" type="number" min="0.0" max="10.0" class="form-control" id="s7gpa" placeholder="Enter GPA" step="0.1">
										</div>
									
							</div>
							<div class="form-group">
									<label for="s8gpa">Semester 8 GPA</label>
										<div>
											<input value="<?php 
					get("btech","s8gpa");
					?>" id="s8gpa" name="s8gpa" type="number" min="0.0" max="10.0" class="form-control" placeholder="Enter GPA" step="0.1">
										</div>
									
							</div>
														
							<!-- <div class="box-footer">
								<button type="submit" class="btn btn-primary">Save</button>
							</div> -->
							</div>
							
						<!--	</form>-->
					<!--form ends-->
					</div>
					<!-- Gradutaion Details BTECH Form Ends-->
				
			  
			 
			   <!--Career Placement Form-->
					<div class="box box-info">
						<div class="box-header with-border">
						<h3 class="box-title">Career Placement in Job, Higher Studies or Business</h3>
						</div><!-- /.box-header -->
					<!-- form start -->
				<!--	<form role="form"> -->
						<div class="box-body">
							
							
							<div class="form-group">
								<label for="nameoforg">Name of Organization</label>
								<input value="<?php 
								get("allstudents","nameoforg");
								?>"  name="nameoforg" type="text" class="form-control" id="nameoforg" placeholder="Enter Company Name" disabled>
							</div>
							
							<div class="form-group">
								<label for="designation">Designation</label>
								<input value="<?php 
								get("allstudents","designation");
								?>"  name="designation" type="text" class="form-control" id="designation" placeholder="Enter Yes or No" disabled>
							</div>
							
							<div class="form-group">
								<label for="salary">Salary, Offer, Benefits</label>
								<input value="<?php 
								get("allstudents","salary");
								?>"  name="salary" type="text" class="form-control" id="salary" placeholder="Enter Offer" disabled>
							</div>
							
							<div class="form-group">
								<label for="orgaddress">Address</label>
								<input value="<?php 
								get("allstudents","orgaddress");
								?>"  name="orgaddress" type="text" class="form-control" id="orgaddress" placeholder="Enter Organization Address" disabled>
							</div>
							
							
					



									
							
							<!-- <div class="box-footer">
								<button type="submit" class="btn btn-primary">Save</button>
							</div> -->
							</div>
							
						<!--	</form>-->
					<!--form ends-->
					</div>
					<!-- Career Placement Form Ends-->
			  
			  </div> <!-- Left Column Ends -->

			
			<!-- right column -->
           <div class="col-md-6">
    
				
				<!--Placement Cell Remarks Form-->
					<div class="box box-warning">
						<div class="box-header with-border">
						<h3 class="box-title">Placement Cell Remarks</h3>
						</div><!-- /.box-header -->
					<!-- form start -->
				<!--	<form role="form"> -->
						<div class="box-body">
							
							
							<div class="form-group">
								<label for="datacompleted">Data Completed</label>
								<input value="<?php 
								get("allstudents","datacompleted");
								?>"  name="datacompleted" type="text" class="form-control" id="datacompleted" placeholder="Enter Yes or No" disabled>
							</div>
							
							<div class="form-group">
								<label for="regcompleted">Registration on completed</label>
								<input value="<?php 
								get("allstudents","regcompleted");
								?>"  name="regcompleted" type="text" class="form-control" id="regcompleted" placeholder="Enter Yes or No" disabled>
							</div>
							
							<div class="form-group">
								<label for="trainingattended">Training Attended</label>
								<input value="<?php 
								get("allstudents","trainingattended");
								?>"  name="trainingattended" type="text" class="form-control" id="trainingattended" placeholder="Enter Yes or No" disabled>
							</div>
							
							<div class="form-group">
								<label for="deptverification">Department Update and Verification Done</label>
								<input value="<?php 
								get("allstudents","deptverification");
								?>"  name="deptverification" type="text" class="form-control" id="deptverification" placeholder="Enter Yes or No" disabled>
							</div>
							
							<div class="form-group">
								<label for="poverification">PO Verification & Recommendation Done</label>
								<input value="<?php 
								get("allstudents","poverification");
								?>"  name="poverification" type="text" class="form-control" id="poverification" placeholder="Enter Yes or No" disabled>
							</div>
							
										
							
							<!-- <div class="box-footer">
								<button type="submit" class="btn btn-primary">Save</button>
							</div> -->
							</div>
							
						<!--	</form>-->
					<!--form ends-->
					</div>
					<!-- Placement Cell Remarks Form -->
				
					
					<!--BTECH Back Logs Form-->
					<div class="box box-warning">
					<!-- form start -->
				<!--	<form role="form"> -->
						<div class="box-body">
							
							<div class="form-group">
									<label for="s1backlog">Semester 1 Backlog</label>
										<div>
											<input value="<?php 
					get("btech","s1backlog");
					?>" name="s1backlog" type="number" min="0" max="15.0" class="form-control" id="s1backlog" placeholder="Enter Number" step="1">
										</div>
									
							</div>
							
							
							
							
							<div class="form-group">
									<label for="s2backlog">Semester 2 Backlog</label>
										<div>
											<input value="<?php 
					get("btech","s2backlog");
					?>" name="s2backlog" type="number" min="0" max="15.0" class="form-control" id="s2backlog" placeholder="Enter Number" step="1">
										</div>
									
							</div>
							
							
							
							<div class="form-group">
									<label for="s3backlog">Semester 3 Backlog</label>
										<div>
											<input value="<?php 
					get("btech","s3backlog");
					?>" name="s3backlog" type="number" min="0" max="15.0" class="form-control" id="s3backlog" placeholder="Enter Number" step="1">
										</div>
									
							</div>
							
							
									
							<div class="form-group">
									<label for="s4backlog">Semester 4 Backlog</label>
										<div>
											<input value="<?php 
					get("btech","s4backlog");
					?>" name="s4backlog" type="number" min="0" max="15.0" class="form-control" id="s4backlog" placeholder="Enter Number" step="1">
										</div>
									
							</div>
							
							
							
							
							<div class="form-group">
									<label for="s5backlog">Semester 5 Backlog</label>
										<div>
											<input value="<?php 
					get("btech","s5backlog");
					?>" name="s5backlog" type="number" min="0" max="15.0" class="form-control" id="s5backlog" placeholder="Enter Number" step="1">
										</div>
									
							</div>
							
							
							
							
							<div class="form-group">
									<label for="s6backlog">Semester 6 Backlog</label>
										<div>
											<input value="<?php 
					get("btech","s6backlog");
					?>" name="s6backlog" type="number" min="0" max="15.0" class="form-control" id="s6backlog" placeholder="Enter Number" step="1">
										</div>
									
							</div>
							
						
							
							<div class="form-group">
									<label for="s7backlog">Semester 7 Backlog</label>
										<div>
											<input value="<?php 
					get("btech","s7backlog");
					?>" name="s7backlog" type="number" min="0" max="15.0" class="form-control" id="s7backlog" placeholder="Enter Number" step="1">
										</div>
									
							</div>
							
							
							
							<div class="form-group">
									<label for="s8backlog">Semester 8 Backlog</label>
										<div>
											<input value="<?php 
					get("btech","s8backlog");
					?>" name="s8backlog" type="number" min="0" max="15.0" class="form-control" id="s8backlog" placeholder="Enter Number" step="1">
										</div>
									
							</div>
							
									
							<div class="form-group">
									<label for="standingbacklogs">Standing Arriers Now</label>
										<div>
											<input value="<?php 
					get("btech","standingbacklogs");
					?>" id="standingbacklogs" name="standingbacklogs" type="number" min="0" max="50" class="form-control" placeholder="Enter Current Standing Arriers" step="1">
										</div>
									
							</div>
							
							<div class="form-group">
									  <label>All Cleared in First Chance</label>
									<div class="radio">
										<label>
										  <input name="allclearfirstchance" type="radio" id="optionsRadios1" value="y" <?php 
									singleradio("btech","allclearfirstchance");
									?>>
										  Yes
										</label>
										<label>&nbsp </label>
										<label>
										  <input type="radio" name="allclearfirstchance" id="optionsRadios2" value="n" <?php 
									marriedradio("btech","allclearfirstchance");
									?>>
										  No
										</label>
									</div>
									
							</div>
							
							
						</div>
							
						<!--	</form>-->
					<!--form ends-->
					</div>
					<!-- BTECH Back Logs Form -->
				
				
					
				
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
