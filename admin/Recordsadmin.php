<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LAKESHORE HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="staff.php"><i class="fa fa-home"></i>Staff</a>
                    </li>
                    <li>
                        <a  href="home.php"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a  href="Requirements.php"><i class="fa fa-home"></i>Requirements</a>
                    </li>
                    


                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Records
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 <?php
				include('db.php');
				
				
			   ?>
               
				 <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                    <h4 class="page-header">
                           Restaurant
                        </h4>
                        <?php
				
				$sql = "SELECT s.Fname, s.phone,s.Address,s.dept
                FROM staff s
                WHERE dept IN 
                    ( SELECT distinct dept 		
                      FROM materials m where dept='Restaurant')" ;
				$re = mysqli_query($con,$sql);
				
			   ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            
											<th>Fullname</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            
                                            
										   
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											
											
											
												echo"<tr class='gradeC'>
													
													<td>".$row['Fname']."</td>
                                                    <td>".$row['phone']."</td>
                                                    <td>".$row['Address']."</td>
													
													
													
												</tr>";
											
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                                </div>
                            
                            
                        </div>
                    </div>
                        
						
                    </div>
                    
                    <div class="jumbotron">
                    <h4 class="page-header">
                           Materials
                        </h4>
                        <?php
				
				$sql = "SELECT s.mat,s.dept FROM `materials` s Order by dept" ;
				$re = mysqli_query($con,$sql);
				
			   ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            
											<th>Materialname</th>
                                            <th>Department</th>
                                            
										   
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											
											
											
												echo"<tr class='gradeC'>
													
													<td>".$row['mat']."</td>
													<td>".$row['dept']."</td>
													
													
												</tr>";
											
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                                </div>
                            
                            
                        </div>
                    </div>
                        
						
                    </div>
                    
                </div>
            </div>
               
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
