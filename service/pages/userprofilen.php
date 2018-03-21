<?php

include_once 'database_connect.php';
session_start();
if(isset($_SESSION['user']) && $_SESSION['userid']==session_id())
{
 
$user=$_SESSION['user'];



}
else
{
	header("Location:Home-Page.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    <!-- Custom CSS -->
    <link href="../dist/css/two-wheeler.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="customlogin">
    <nav class="navbar navbar-inverse">
    
        <div class="container-fluid">
            <div class="navbar-header">
                  <a class="navbar-brand" href="#">TWSC</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class=" custom-li-back active"><a href="userprofilen.php">Profile</a></li>
                  <li class="custom-li-back"><a href="change.php">Change Password</a></li>
                  <li class=" custom-li-back"><a href="bookslot.php">Book Slot</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="custom-li-back"><a href="logout.php"><span class="fa  fa-sign-in
"></span> Logout</a></li>
                </ul>


        



        </div><!--End of Container-->


    </nav><!--End of Header-->
    

<!--main body-->

<!-- Page Content -->


    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">My Profile
                    <small></small>
                </h1>
				
				<?php
				$res=mysql_query("SELECT * FROM userreg WHERE userid='$user'");
				while($row=mysql_fetch_array($res))
				{
					
					
			
				
			?>
              	        
		</div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-1"></div>
             <div class="col-lg-10">
             	<div class="panel panel-primary">
                        <div class="panel-heading">
                            Details
                        </div>
                        <div class="panel-body">
	                        <div class="row">
	                        	<div class="col-md-4">
	                        		<div class="form-group">
	                        		<label> User Name:</label> <i class="form-control-static"><?php echo $row['username']; ?> </i>
	                        		</div>
	                        		
	                        		<div class="form-group">
				<label> First Name:</label><i class="form-control-static"><?php echo $row['firstname'];  ?> </i>
	                        		</div>
	                        	</div>
	                        	
	                        	<div class="col-md-4">
	                        		<div class="form-group">
	                        		<label> Email Id:</label> <i class="form-control-static"><?php echo $row['email'];  ?></i>
	                        		</div>
	                        		
	                        		<div class="form-group">
	                        		<label> Contact Number:</label> <i class="form-control-static"><?php echo $row['contactno'];  ?></i>
	                        		</div>
	                        	</div>
	                        	
	                        	<div class="col-md-4">
	                        		<div class="form-group">
	                        		<label> addressline1:</label> <i class="form-control-static"><?php echo $row['addressline1'];  ?></i>
	                        		</div>
	                        		
	                        		<div class="form-group">
	                        		<label> addressline2:</label> <i class="form-control-static"><?php echo $row['addressline2']; } ?></i>
	                        		</div>
	                        	</div>
	                        	
	                        </div>
	           			 
                        </div>
                        
                    </div>   
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        

    </div>
    
        

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

     <!--Validate Plugin-->
        <script src="../dist/js/jquery.validate.js">  </script>
        <script src="../dist/js/additional-methods.js"></script>
    <!--Form Validation-->
    <script src="../dist/js/contact-us.js"></script>
    

</body>

</html>
