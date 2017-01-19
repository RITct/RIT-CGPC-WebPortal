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
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">

	<?php
include "php/select.class.php";
//include "php/redirectsecurepage.php";
//session_start();
  // $_SESSION["email"] = "abhi2303237@gmail.com";
?>
   
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
  <body onload="retrive()" class="hold-transition skin-blue sidebar-mini">
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
                    <p>
                       <?php 
					get("student","name");
					?>
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="profileview.php" class="btn btn-default btn-flat">Profile</a>
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
              <p> <?php 
					get("student","name");
					?></p>
              
            </div>
          </div>

          

          <!-- Sidebar Menu -->
         <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="profileview.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li  class="active"><a href="notification.php"><i class="fa fa-bullhorn"></i> <span>Notification</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa  fa-list-ol"></i> <span>Results</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="aptitude.php"><i class="fa fa-pencil"></i> Aptitude</a></li>
                <li><a href="interview.php"><i class="fa fa-black-tie"></i>Interview</a></li>
              </ul>
            </li>
          </ul>
        </section><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Notifications
            
          </h1>
         
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div id="abhi" class="col-md-12">
            



			<!-- Box Comment -->
            <!--  <div class="box box-widget">
                <div class='box-header with-border'>
                  <div class='user-block'>
                    <img class='img-circle' src='<?php 
					get("student","profileurl");
					?>' alt='user image'>
                    <span class='username'><a href="#">Jonathan Burke Jr.</a></span>
                    <span class='description'>Shared publicly - 7:30 PM Today</span>
                  </div><!-- /.user-block
                  <div class='box-tools'>
                    <!-- <button class='btn btn-box-tool' data-toggle='tooltip' title='Mark as read'><i class='fa fa-circle-o'></i></button> 
                    <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
          <!--          <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
                  </div><!-- /.box-tools 
                </div><!-- /.box-header 
                <div class='box-body'>
                   <div class='box-body'>
                  <!-- post text   
					<div class="container-fluid">
					  <p>Description</p>            
					  <table class="table table-hover table-bordered">
						<tbody>
						  <tr>
							<td>company name</td>
							<td>Huawei</td>
						  </tr>
						  <tr>
							<td>Job Title</td>
							<td>Software Engineer</td>
						  </tr>
						  <tr>
							<td>Last Date of Application</td>
							<td>22 June 2016</td>
						  </tr>
						  <tr>
							<td>Degree</td>
							<td>Btech,Mtech,MCA</td>
						  </tr>
						  <tr>
							<td>Branches</td>
							<td>CSE,ECE</td>
						  </tr>
						  <tr>
							<td>Max Standing Arriers</td>
							<td>1</td>
						  </tr>
						  <tr>
							<td>Min CGPA</td>
							<td>1</td>
						  </tr>
						  <tr>
							<td>Annual Package</td>
							<td>5</td>
						  </tr>
						</tbody>
					  </table>
					</div>

                  <!-- Social sharing buttons 
				  <div class="pull-right">
				  <button class='btn btn-primary btn-xs'><i class='fa fa-check'></i> Apply</button>	
				  <button class='btn btn-danger btn-xs disabled'><i class='fa fa-times'></i>Cancel</button>  
				  </div>
				  <span class='pull-left text-muted'><i class='fa fa-check'>45 Applied</i></span>
                  
                  
                </div><!-- /.box-body 
              </div><!-- /.box  -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

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
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
	<script>
          
          function myfunction() {
              alert("Hello");
          }
          function retrive() {
    
    "use strict";
	
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById("abhi").innerHTML = xhttp.responseText; }   };
             
		
		 
    var path = "php/notificationretrive.php" 
   
console.log(path);
   // php/retrive.php?cse=" + "CSE" + "&ece=" + "ECE" + "&me=" + bv3 + "&ce=" + bv4 + "&eee=" + bv5 + "&btec=" + bv6 + "&mtec=" + "M.Tech" + "&mca=" + bv8 + "&barc=" + bv9 + "&sarr=" + bv10 + "&cgpa=" + bv11
    xhttp.open("GET",path, true);
    xhttp.send();
	
	
}</script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
