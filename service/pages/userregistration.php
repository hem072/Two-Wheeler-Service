
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

     <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../bower_components/bootstrap/dist/css/two-wheeler.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

     <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.js"></script>
    
    <script>
    
    	 
    
    		$(document).ready(function(){
    			
    			$("#form2").hide();
    			$("#form3").hide();
    		    $("#form1left").attr("disabled",true);
    			$("#form1left").attr("disabled",true);
    			
    			$("#form1right").click(function(){
    				$("#form1").hide(1000);
    				$("#form2").show(1500);
    				$("#progressid").css("width","33.33%");
    				
    			});
    			
    			$("#from2left").click(function(){
    				$("#form2").hide(1000);
    				$("#form1").show(1500);
    				$("#progressid").css("width","0%")
    			});
    			
    			$("#form2right").click(function(){
    				$("#form2").hide(1000);
    				$("#form3").show(1500);
    				$("#progressid").css("width","66.66%")
    			});
    			
    			$("#from3left").click(function(){
    				$("#form3").hide(1000);
    				$("#form2").show(1500);
    				$("#progressid").css("width","33.33%")
    			});
    			
    			$("#submit").click(function(){
    				$("#progressid").css("width","100%")
    			});
    			
    			
    		});
    		
    </script>
   
   


</head>
<body>
<!-- Page Content -->
	<div class="row">
	<div class="col-lg-1"></div> 

            <div class="col-lg-10">
                <h1 class="page-header">Add User
                    <small></small>
                </h1>
              	<ol class="breadcrumb">
  					<li class="breadcrumb-item"><a href="#">Home</a></li>
  					<li class="breadcrumb-item active">Library</li>
				</ol>          
		</div>
        </div>
        <!-- /.row -->
		
        <!-- Content Row -->
        <div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">			
				<div class="panel panel-primary">
					 <div class="panel-heading">Add User</div>
	  					<div class="panel-body">
	  						<br>
	    					<div class="progress">
  								<div class="progress-bar success" id="progressid"></div>
							</div>
							<br>
							<form id="adduser" action="userregistration.php" method="POST">
								<div class="row" id="form1">
									<div class="col-lg-2">
									</div>
									
									<div class="col-lg-4">
										<div class="form-group">
        								   <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
      									 </div>
      									 
      									 <div class="form-group">
        								   <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
      									 </div>
      									 
    							 	</div>
      								<div class="col-lg-4">	 
      									 <div class="form-group">
        								   <input type="text" class="form-control" name="username"  id="contact" placeholder="Username">
      									 </div>
      							         
      							         <div class="form-group">
        								   <input type="text" class="form-control" name="cnt" id="Email" placeholder="Contact No">
      									 </div>
									</div>
									<div class="col-lg-5"></div>
									<div class="col-lg-2">
										<div class="btn-group btn-group-justified">
											  <a class="btn btn-default" id="from1left"><i class="fa  fa-arrow-circle-left"></i></a>
											  <a class="btn btn-default" id="form1right"><i class="fa  fa-arrow-circle-right"></i></a>
										
										</div>
									</div>

								</div>
								
								<div class="row" id="form2">
									<div class="col-lg-2">
									</div>
									
									<div class="col-lg-4">
										<div class="form-group">
        								   <input type="text" class="form-control" id="add1" placeholder="Address Line 1" name="add1">
      									 </div>
      									 
      									 <div class="form-group">
        								   <input type="text" class="form-control" name="area" id="add2" placeholder="Area">
      									 </div>
      									 
      									 <div class="form-group">
        								   <input type="text" class="form-control" id="city" placeholder="City" name="city">
      									 </div>
      									 
      									 <div class="form-group">
        								   <input type="text" class="form-control" id="pincode" placeholder="Pincode" name="pin">
      									 </div>
      									 
    							 	</div>
      								<div class="col-lg-4">	 
      									 <div class="form-group">
        								   <input type="text" class="form-control" id="add2" placeholder="Address Line 2" name="add2">
      									 </div>
      							         
      							         <div class="form-group">
        								   <input type="text" class="form-control" id="landmarkl" placeholder="Landmark" name="ldm">
      									 </div>
      									 
      									 <div class="form-group">
        								   <input type="text" class="form-control" id="state" placeholder="state" name="state">
      									 </div>
      							         
      							         <div class="form-group">
        								   <input type="text" class="form-control" id="country" placeholder="Country" name="country">
      									 </div>
      									 
									</div>
								
									<div class="col-lg-5"></div>
									<div class="col-lg-2">
										<div class="btn-group btn-group-justified">
											  <a class="btn btn-default" id="from2left"><i class="fa  fa-arrow-circle-left"></i></a>
											  <a class="btn btn-default" id="form2right"><i class="fa  fa-arrow-circle-right"></i></a>
										
										</div>
									</div>
									</div>	
									<div class="row" id="form3">
									<div class="col-lg-4">
									</div>
									
									<div class="col-lg-4">
										<div class="form-group">
        								   <input type="text" class="form-control" id="email" placeholder="Email" name="email">
      										</div>
      								
										<div class="btn-group btn-group-justified">
											  <a class="btn btn-default" id="from3left"><i class="fa  fa-arrow-circle-left"></i></a>
											   <a class="btn btn-default" id="submit"><button type="submit" name="submit" >Submit</button></a> 
										</div>
									
									</div>

								</div>
								
							
							</form>	
							
	    					
	  					</div>
				</div>		
			</div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
		<div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <p>Copyright &copy; Your Website 2017</p>
                </div>
            </div>
        </footer>

  
    </body>
    
    </html>
	<?php

echo"hello";
include_once 'database_connect.php';

	
if(isset($_POST['submit']))
{
	
	$lname=$_POST['lname'];
	$fname=$_POST['fname'];
	$username=$_POST['username'];
	$cnt=$_POST['cnt'];
	$add1=$_POST['add1'];
	$add2=$_POST['add2'];
	$ldm=$_POST['ldm'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$country=$_POST['country'];
	$email=$_POST['email'];
	$area=$_POST['area'];
$pass=substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') , 0 , 10 );
$query="insert into userreg values('','".$fname."','".$lname."','".$username."','".$cnt."','".$add1."','".$add2."','".$area."','".$ldm."','".$city."','".$state."','".$pin."','".$country."','".$email."')";
$query1="insert into login values('','".$username."','".$pass."')";
	if(mysql_query($query))
	{
		echo '<h2>inserted</h2>';
		
	}
	else
	{
		echo '<h2>Ttst</h2>';
	}
	if(mysql_query($query1))
	{
		echo '<h2>inserted login</h2>';
	}
}

?>