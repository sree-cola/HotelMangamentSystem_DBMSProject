<?php
include('db.php')
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
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
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
                        <a  href="Recordsadmin.php"><i class="fa fa-home"></i>Records</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            MATERIALS AND SERVICES <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            MATERIALS AND SERVICES
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">

							  <div class="form-group">
                                            <label>Material/Service Name</label>
                                            <input name="mat" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Quantity</label>
                                            <input name="quan" type="int" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Total Price</label>
                                            <input name="tp" type="int" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Department</label>
                                            <select name="dept" class="form-control" required >
												<option value selected ></option>
                                                <option value="Restaurant">Restaurant</option>
                                                <option value="Rooms">Rooms</option>
                                                <option value="General">General</option>
                                                <option value="Rooms">Finacial</option>

                                            </select>
                              </div>
								
                               <div class="form-group">
                                            <label>Date of purchase</label>
                                            <input name="dop" type ="date" class="form-control">
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                
                  
            
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                     
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							
							
									$con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM materials WHERE (mat = '$_POST[mat]' AND dop = '$_POST[dop]')";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                    if($data[0] > 1) 
                                    {
										echo "<script type='text/javascript'> alert('Data Already in Exists')</script>";
										
									}
                                    else{
									

									
										
										$newUser="INSERT INTO `materials`(`mat`, `quan`, `tp`, `dept`, `dop`) VALUES ('$_POST[mat]','$_POST[quan]','$_POST[tp]','$_POST[dept]','$_POST[dop]')";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Database updated succussfully')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
                                    }
                                    
									

							$msg="Your code is correct";
                                    
							
							
							?>
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
