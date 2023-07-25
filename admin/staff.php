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
                        <a  href="requirements.php"><i class="fa fa-home"></i>Materials</a>
                    </li>
                    <li>
                        <a  href="Recordsadmin.php"><i class="fa fa-home"></i>Records</a>
                    </li>
                    <li>
                        <a  href="deletedrecords.php"><i class="fa fa-home"></i>DeletedRecords</a>
                    </li>
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Staff Recruitment <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Staff Recruitment
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">

							  <div class="form-group">
                                            <label>Full Name</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Phone</label>
                                            <input name="phone" type="int" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Address</label>
                                            <input name="Address" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Department of work</label>
                                            <select name="dept" class="form-control" required >
												<option value selected ></option>
                                                <option value="Restaurant">Restaurant</option>
                                                <option value="Rooms">Rooms</option>
                                                <option value="General">General</option>
                                                <option value="Rooms">Finacial</option>

                                            </select>
                              </div>
								
                               <div class="form-group">
                                            <label>Work period Entry</label>
                                            <input name="work" type ="date" class="form-control">
                                            
                               </div>
                               
                               <div class="form-group">
                                            <label>Salary</label>
                                            <input name="salary" type ="int" class="form-control">
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                
                  
            
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                     
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							
							
									$con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM staff  WHERE fname = '$_POST[fname]' ";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                    
                                    if($data[0] > 1) 
                                    {
										echo "<script type='text/javascript'> alert('Data Already in Exists')</script>";
										
									}
                                    else{
									
									

                                    

									
										
										$newUser="INSERT INTO `staff`(`fname`, `phone`, `Address`, `dept`, `work`,`salary`) VALUES ('$_POST[fname]','$_POST[phone]','$_POST[Address]','$_POST[dept]','$_POST[work]','$_POST[salary]')";
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