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
                        <a href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
                    <li>
                        <a href="this.php"><i class="fa fa-sign-out fa-fw"></i> WIFI ACCESS</a>
                    </li>
                    <li>
                        <a class="active-menu" href="this.php"><i class="fa fa-desktop"></i> RECORDS</a>
                    </li>
					
                    <li>
                        <a href="Payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="logout.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    


                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           RECORDS
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
                           INDIAN RECORDS
                        </h4>
                        <?php
				
				$sql = "SELECT r.ID,r.FName,r.LNAME,r.Phone FROM `roombook` r 
                    
                    WHERE National='Indian' ";
				$re = mysqli_query($con,$sql);
				
			   ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
											<th>Fname</th>
                                            <th>Lname</th>
                                            <th>Phone</th>
										    
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['ID'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['ID']."</td>
													<td>".$row['FName']."</td>
													<td>".$row['LNAME']."</td>
													<td>".$row['Phone']."</td>
													
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
                                                <td>".$row['ID']."</td>
                                                <td>".$row['FName']."</td>
                                                <td>".$row['LNAME']."</td>
                                                <td>".$row['Phone']."</td>
                                                	
												</tr>";
											
											}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                                </div>
                            
                            
                        </div>
                    </div>
                        
						
                    </div>
                </div>
                <div class="jumbotron">
                    <h4 class="page-header">
                           NON-INDIAN RECORDS
                        </h4>
                <?php
				
				$sql = "SELECT r.ID,r.FName,r.LNAME,r.Phone FROM `roombook` r 
                    
                    WHERE National='NON INDIAN' ";
				$re = mysqli_query($con,$sql);
				
			   ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
											<th>Fname</th>
                                            <th>Lname</th>
                                            <th>Phone</th>
										    
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['ID'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['ID']."</td>
													<td>".$row['FName']."</td>
													<td>".$row['LNAME']."</td>
													<td>".$row['Phone']."</td>
													
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
                                                <td>".$row['ID']."</td>
                                                <td>".$row['FName']."</td>
                                                <td>".$row['LNAME']."</td>
                                                <td>".$row['Phone']."</td>
                                                	
												</tr>";
											
											}
										
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
                           OFFICAL PAYMENT SLIP FOR YEAR 2023
                        </h4>
                <?php
				
				$sql = "SELECT ID,FName,LNAME,Phone
                FROM roombook 
                WHERE ID IN 
                    ( SELECT distinct ID 		
                      FROM payment
                      WHERE YEAR(cout) = 2023) ";
				$re = mysqli_query($con,$sql);
				
			   ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
											<th>Fname</th>
                                            <th>Lname</th>
                                            <th>Phone</th>
                                            
                                            
										    
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['ID'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['ID']."</td>
													<td>".$row['FName']."</td>
													<td>".$row['LNAME']."</td>
													<td>".$row['Phone']."</td>
                                                    
													
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
                                                <td>".$row['ID']."</td>
                                                <td>".$row['FName']."</td>
                                                <td>".$row['LNAME']."</td>
                                                <td>".$row['Phone']."</td>
                                                
                                                	
												</tr>";
											
											}
										
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
                           OFFICAL PAYMENT SLIP FOR YEAR 2022
                        </h4>
                <?php
				
				$sql = "SELECT ID,FName, LNAME,Phone
                FROM roombook
                WHERE ID IN 
                    ( SELECT distinct ID 		
                      FROM payment
                      WHERE YEAR(cout) = 2022) ";
				$re = mysqli_query($con,$sql);
				
			   ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
											<th>Fname</th>
                                            <th>Lname</th>
                                            <th>Phone</th>
										    
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['ID'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['ID']."</td>
													<td>".$row['FName']."</td>
													<td>".$row['LNAME']."</td>
													<td>".$row['Phone']."</td>
													
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
                                                <td>".$row['ID']."</td>
                                                <td>".$row['FName']."</td>
                                                <td>".$row['LNAME']."</td>
                                                <td>".$row['Phone']."</td>
                                                	
												</tr>";
											
											}
										
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
