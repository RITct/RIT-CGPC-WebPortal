<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RIT CGPC</title>
	
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
	
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onLoad="onloadp();" class="hold-transition skin-blue sidebar-mini">
  <?php
include "php/select.class.php";
////include "php/redirectsecurepage.php"
//session_start();
  // $_SESSION["email"] = "abhi2303237@gmail.com";
?>
  <script src="/java/database.js"></script>
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="/index2.html" class="logo">
          <span class="logo-mini"><b>RIT</b></span>
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>RIT</b>CGPC</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php 
					get("student","profileurl");
					?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php 
					get("student","name");
					?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php 
					get("student","profileurl");
					?>" class="img-circle" alt="User Image">
                    <p>
                      <?php 
					get("student","name");
					?>
                      <small><?php 
					get("student","branch");
					?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="/editprofile.php" class="btn btn-default btn-flat">Profile</a>
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
          <!-- Sidebar user panel -->
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
              
            </div>
          </div>
          <!-- search form -->
   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="profileview.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li><a href="notification.php"><i class="fa fa-bullhorn"></i> <span>Notification</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa  fa-list-ol"></i> <span>Results</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="aptitude.php"><i class="fa fa-pencil"></i> Aptitude</a></li>
                <li><a href="interview.php"><i class="fa fa-black-tie"></i>Interview</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User Profile
          </h1>
         
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="<?php 
					get("student","profileurl");
					?>" alt="User profile picture">
                  <h3 class="profile-username text-center"><?php 
					get("student","name");
					?></h3>
                  <p class="text-muted text-center"></p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Applied</b> <a class="pull-right">13</a>
                    </li>
                    <li class="list-group-item">
                      <b>Accepted</b> <a class="pull-right">9</a>
                    </li>
                    <li class="list-group-item">
                      <b>Selected</b> <a class="pull-right">2</a>
                    </li>
                  </ul>

                  <a href="editprofile.php" class="btn btn-primary btn-block"><b>Update Profile</b></a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
           </div> <!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#personal" data-toggle="tab">Personal</a></li>
                  <li><a href="#education" data-toggle="tab">Education</a></li>
                  <li><a href="#graduation" data-toggle="tab">Graduation</a></li>
				  <li><a href="#Experience_Professional" data-toggle="tab">Experience/Professional</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="personal">
                    <!-- Post -->
                  <div class="box-body">		  
                  <strong><i class="fa fa-user margin-r-5"></i>  Name</strong>
                  <p id="name" class="text-muted">
                    Name
                  </p>

                  <hr>

                  <strong><i class="fa fa-calendar margin-r-5"></i> Date Of Birth</strong>
                  <p id="dob" class="text-muted">15 November 1995</p>

                  <hr>

                  <strong><i class="fa fa-male margin-r-5"></i> Gender</strong>
                  <p id="gender">
                    Gender
                  </p>

                  <hr>

                  <strong><i class="fa fa-heart margin-r-5"></i> Marital Status</strong>
                  <p id="status">Status</p>
				  
				  <hr>

                  <strong><i class="fa  fa-mobile-phone margin-r-5"></i> Mobile Number</strong>
                  <p id="abhi">Number</p>
				  
				  
				  <hr>
					
                  <strong><i class="fa  fa-home margin-r-5"></i> Address</strong>
                  <p id="add">Address</p>
				  
					
				  
				  
				  <!-- /.box -->                  
                        </div>                        
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="education">
                     <div class="box-body">		  
                  <strong><i class="fa fa-university margin-r-5"></i>  10th Board</strong>
                  <p class="text-muted">
                    <?php 
					get("student","tenthboard");
					?>
                  </p>

                  <hr>

                  <strong><i class="fa fa-calendar margin-r-5"></i> 10th Year of Passing</strong>
                  <p id="10yop" class="text-muted">Year</p>

                  <hr>

                  <strong><i class="fa  fa-bar-chart margin-r-5"></i> 10th Percentage</strong>
                  <p id="10percent">
                    %
                  </p>

                  <hr>
				  <strong><i class="fa fa-university margin-r-5"></i>  12th Board</strong>
                  <p class="text-muted">
                    <?php 
					get("student","twelthboard");
					?>
                  </p>

                  <hr>

                  <strong><i class="fa fa-calendar margin-r-5"></i> 12th Year of Passing</strong>
                  <p id="12yop" class="text-muted">Year</p>

                  <hr>

                  <strong><i class="fa  fa-bar-chart margin-r-5"></i> 12th Percentage</strong>
                  <p id="12percent">
                    %
                  </p>
				  
				  <!-- /.box -->                  
                        </div> 
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="graduation">
				   <div class="box-body">
				<strong><i class="fa fa-university margin-r-5"></i>  Branch</strong>
                  <p id="branch" class="text-muted">
                    Branch
                  </p>
				  <hr>
				  
				  <strong><i class="fa fa-book margin-r-5"></i>  Semester</strong>
                  <p class="text-muted">
                    Sixth
                  </p>

                  <hr>

                  <strong><i class="fa fa-graduation-cap margin-r-5"></i> Degree</strong>
                  <p id="degree" class="text-muted">Degree</p>

                  <hr>
				  

                  <strong><i class="fa fa-bar-chart margin-r-5"></i> CGPA</strong>
                  <p id="cgpa" class="text-muted">CGPA</p>
				  <p>S6 <span class="badge bg-blue"><?php 
					get("student","sgpa6");
					?></span> &nbsp  &nbsp  &nbsp  S5 <span class="badge bg-red"><?php 
					get("student","sgpa5");
					?></span>&nbsp  &nbsp  &nbsp S4 <span class="badge bg-yellow"><?php 
					get("student","sgpa4");
					?></span>&nbsp &nbsp  &nbsp  S3 <span class="badge bg-green"><?php 
					get("student","sgpa3");
					?></span> &nbsp &nbsp  &nbsp  S1-S2 <span class="badge bg-blue"><?php 
					get("student","sgpa12");
					?></span> </p>
				  <hr>

                  <strong><i class="fa fa-certificate margin-r-5"></i> Specialization</strong> &nbsp <small>(Applies for M.tech)</small>
                  <p class="text-muted">
                    None
                  </p>
					</div><!--/.box-body-->
                  </div><!-- /.tab-pane -->
				  
				  <div class="tab-pane" id="Experience_Professional">
				   <div class="box-body">
				<strong><i class="fa fa-book margin-r-5"></i>Experience</strong>
                  <p id="exp" class="text-muted">
                    Experience
                  </p>

                  <hr>

                  <strong><i class="fa fa-building margin-r-5"></i> Company/Institution</strong>
                  <p id="comp" class="text-muted">company</p>

                  <hr>

                  <strong><i class="fa fa-certificate margin-r-5"></i> Key Skills</strong>
                  <p id="key" class="text-muted">
                    None
                  </p>
					</div><!--/.box-body-->
                  </div><!-- /.tab-pane -->
				  
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
         VERSION 1.0.0
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">RIT CGPC</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
