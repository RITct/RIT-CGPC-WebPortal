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
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="/dist/css/skins/skin-blue.min.css">
	
	<?php
include "php/select.class.php";
//include "php/redirectsecurepage.php"
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
  <body class="hold-transition skin-blue sidebar-mini">
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
                  <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Rajesh R</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Rajesh R
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="php/logout.php" class="btn btn-default btn-flat">Sign out</a>
                        
                    </div>
                  </li>
                </ul>
              </li>
             
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
              <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Rajesh R</p>
              <!-- Status -->
              
            </div>
          </div>

         
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->            
            <li><a href="notificationedit.php"><i class="fa fa-bullhorn"></i> <span>Notification</span></a>
			</li>
			
			<li class="active"><a href="studentdatabase.php"><i class="fa fa-user"></i> <span>Student Databse</span></a></li>
            
			<li class="treeview">
              <a href="#"><i class="fa  fa-list-ol"></i> <span>Results</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="aptitudeedit.php"><i class="fa fa-pencil"></i> Aptitude</a></li>
                <li><a href="interviewedit.php"><i class="fa fa-black-tie"></i>Interview</a></li>
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
            Student Database
            <small>Search</small>
          </h1>
         
        </section>
		
        <!-- Main content -->
        <section class="content">
		<div class="row">
            <!-- left column -->
            <div class="col-sm-12">
              <!-- Personal Details Form -->
				<div class="box box-primary col-sm-12">
                <div class="box-header with-border">
                  <h3 class="box-title">Search Criteria</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form onchange="retrive();" class="form-horizontal" role="form">
                  		<div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Degree</label>
                        <div class="col-sm-10 checkbox">
                          <label>
                          <input value="B.Tech" id="btec" type="checkbox">
                          B.Tech
                        </label>
						<label></label>
						<label>
                          <input value="M.Tech" id="mtec" type="checkbox">
                          M.Tech
                        </label>
						<label></label>
						<label>
                          <input value="MCA" id="mca" type="checkbox">
                          MCA
                        </label>
						<label></label>
						<label>
                          <input value="B.Arch" id="barc" type="checkbox">
                          B.Arch
                        </label>
											
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Branches</label>
                        <div class="col-sm-10 checkbox">
                          <label>
                          <input value="CSE" id="cse" type="checkbox">
                          CSE
                        </label>
						<label></label>
						<label>
                          <input value="ECE" id="ece" type="checkbox">
                          ECE
                        </label>
						<label></label>
						<label>
                          <input value="ME" id="me" type="checkbox">
                          ME
                        </label>
						<label></label>
						<label>
                          <input value="CE" id="ce" type="checkbox">
                          CE
                        </label>
						<label></label>
						<label>
                          <input value="EEE" id="eee" type="checkbox">
                          EEE
                        </label>
											
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Max Standing Arriers</label>
                        <div class="col-sm-10">
                          <input value="50" id="sarr" type="number" min="0" max="50" step="1" class="form-control" placeholder="Standing Arriers">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Min CGPA</label>
                        <div class="col-sm-10">
                           <input value="0" id="cgpa" type="number" min="0" max="10" step="0.1" class="form-control" placeholder="CGPA">
                        </div>
                      </div>
					  
					 
                     
                    	</form>
						
						<!-- <div class="form-group col-sm-offset-2 col-sm-10">
                          <button onclick="retrive();"  class="btn btn-danger">Go</button>
                        </div>-->
						                   
			<!--Right Collumn Ends-->
				</div>
		<!--Row Ends-->
		</div>
		</div>
		<div class="row">	
        <div class="col-sm-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Search Results</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table id="abhi"  class="table table-hover">
                   <!-- <tr>
                      <th>Admission No</th>
                      <th>Name</th>
                      <th>Degree</th>
                      <th>Branch</th>
                      <th>Arriers</th>
					  <th>CGPA</th>
					  <th>View Profile</th>
                    </tr>
                     
                    <tr>
					
					
                      <td>9803</td>
                      <td>John Doe</td>
                      <td>B.Tech</td>
                      <td>CSE</td>
                      <td>2</td>
					  <td>8.2</td>
					  <td><span class="label"><a href="viewprofile.html">View</a></span></td>
                        
                    </tr>-->
					
                      
                      
                      
                    </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
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
      <!-- Control Sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
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
             
		 
		 
    
    var bv10 = document.getElementById("sarr").value;
    var bv11 = document.getElementById("cgpa").value;
        
		 console.log(bv10);
		 console.log(bv11);
		 
    var path = "php/retrive.php?" 
    if (document.getElementById("cse").checked)        
      path=path + "&cse=CSE"; 
    if (document.getElementById("ece").checked)        
      path=path + "&ece=ECE"; 
	if (document.getElementById("me").checked)        
      path=path + "&me=ME"; 
    if (document.getElementById("ce").checked)        
      path=path + "&ce=CE"; 
    if (document.getElementById("eee").checked)        
      path=path + "&eee=EEE"; 
    if (document.getElementById("btec").checked)        
      path=path + "&btec=B.Tech"; 
    if (document.getElementById("mtec").checked)        
      path=path + "&mtec=M.Tech"; 
    if (document.getElementById("mca").checked)        
      path=path + "&mca=MCA"; 
	if (document.getElementById("barc").checked)        
      path=path + "&barc=B.Arch"; 
	if (bv10!=null)        
      path=path + "&sarr=" + bv10; 
	if (bv10!=null)        
      path=path + "&cgpa=" + bv11;	  
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
