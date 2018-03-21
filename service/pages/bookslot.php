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
    			$("#form3").hide()
    			$("#form1left").attr("disabled",true);
    			
    			
    			$("#form1right").click(function(){
    				$("#form1").hide(1000);
    				$("#form2").show(1500);
    				$("#progressid").css("width","50%");
    				
    			});
    			
    			$("#from2left").click(function(){
    				$("#form2").hide(1000);
    				$("#form1").show(1500);
    				$("#progressid").css("width","33.33%")
    			});
    			
    			$("#form2right").click(function(){
    				$("#form2").hide(1000);
    				$("#form3").show(1500);
    				$("#progressid").css("width","100%");
    				
    			});
    			
    			$("#form3left").click(function(){
    				$("#form3").hide(1000);
    				$("#form2").show(1500);
    				$("#progressid").css("width","66.66%");
    				
    			});
    			
    			
    		});
    		
    </script>
   
</head>
<body>	
<div  class="row">
<div class="col-lg-12">
	<nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle"  data-toggle="collapse abc" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
    </button>
      <a class="navbar-brand" href="home.html">BikeService.com</a>
    </div>
	<div class="collapse navbar-collapse abc" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="userprofilen.php">Profile</a></li>
      <li><a href="change.php ">Change Password</a></li>
	  <li  class="active"><a href="bookslot.php">Book Slot</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
	   <li><a href="logout.php"> <span class="fa  fa-sign-in"></span>Logout</a></li>
    
    </ul>
   </div>   
  </div>
  </div>
  </div> <!-- row-->
</nav><br><br>
<!-- Page Content -->
	<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Book Service Slot
                    <small></small>
                </h1>
              	
		</div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
        <div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<div class="panel panel-primary">
					 <div class="panel-heading">Book Service Slot</div>
	  					<div class="panel-body">
	  						<br>
	    					<div class="progress">
  								<div class="progress-bar progress-bar-success" id="progressid"></div>
							</div>
							<br>
							<form id="addservicecenterform" action="bookslot.php" method="POST">
								<div class="row" id="form1">
									<div class="col-lg-2">
									</div>



										<div class="col-lg-12">
										<center><label><h3>Select Branch and vehicle</h3></label></center>

										</div>
									<div class="col-lg-1">
									</div>
									<div class="col-lg-5">
										<div class="form-group">
										      <label for="select" class="control-label">Select Vehicle</label>

										        <select class="form-control" id="select" name="vehicle">
										          <option>Bajaj pulser</option>
										          <option>Apache RTR</option>
										          <option>FZ-S</option>
										          <option>Honda Hornet</option>
										          <option>KTM Duke</option>
										        </select>

										</div>
    							 	</div>
                    <div class="col-lg-5">
                       <div class="form-group">
                         <label for="select" class="control-label" >Select Service Center</label>

                          <select class="form-control" id="select" name="sercenter">
                    <?php
                    $res=mysql_query("select branch_name from addservicecenter");
                    while($row=mysql_fetch_array($res))
                    {





                     ?>

										          <option ><?php echo $row['branch_name']; ?></option>
                    <?php } ?>
										        </select>

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
								<div class="col-lg-12">
										<center><label><h3>Select Services</h3></label></center>

										</div>
									<div class="col-lg-2">
									</div>

									<div class="col-lg-4">
										 <div class="checkbox">
									          <label>
									            <input type="checkbox"  name="service[]" value="Full Service"> Full service
									          </label>
									     </div>

									     <div class="checkbox">
									          <label>
									            <input type="checkbox" name="service[]" value="Fuel"> Fuel
									          </label>
									     </div>

									     <div class="checkbox">
									          <label>
									            <input type="checkbox" name="service[]" value="Engine"> Engine
									          </label>
									     </div>

    							 	</div>
      								<div class="col-lg-4">
      									 <div class="checkbox">
									          <label>
									            <input type="checkbox" name="service[]" value="tyre"> tyre
									          </label>
									     </div>

									     <div class="checkbox">
									          <label>
									            <input type="checkbox" name="service[]" value="Electrical"> Electrical
									          </label>
									     </div>

									     <div class="checkbox">
									          <label>
									            <input type="checkbox" name="service[]" value="Exterior"> Exterior
									          </label>
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


								            <div class="col-lg-12">
								              		<center><label><h3>Verify User</h3></label></center>
											</div>

											<div class="col-md-4"></div>
	        		       				<div class="col-md-4">
	               						<div class="form-group" id="message">
			               					<!-- 	<div class="alert alert-danger alert-dismissable">
		                                	<button type="button" class="close" id="codevalidationmessage" data-dismiss="alert" aria-hidden="true">�</button>
		                                		Please Enter Valid Code
		                            			</div>
		                            	 -->
		                            </div>
	               					<div class="form-group">
	                                      <input type="text" class="form-control" placeholder="Enter Verification Code" id="verificationcode"/>

									</div>


									<div class="form-group">
	                                      <button type="button" id="verificationbtn" class="btn btn-outline btn-success btn-lg btn-block">Get Verification code</button>
									</div>

									<div class="form-group">
	                                      <button type="button" id="verifybtn" class="btn btn-outline btn-success btn-lg btn-block">Verify</button>
									</div>

									<button type="button" class="btn btn-default btn-circle btn-xl" id="form3left">
	               							<i class="fa  fa-arrow-circle-left"></i>
                           				 </button>

                           			<button type ="submit" id="submit" name="submit"class="btn btn-default">submit</button>
                           					               				</div>
	               				<!-- /. col-lg-4 -->

	               				<div class="col-md-4">

	               				</div>

	               				<div class="row">
	               					<div class="col-md-5"></div>
	               					<div class="col-md-4">



	               					</div>
	               				</div>

								        </div>
								        <!-- /.row -->




							</form>


	  					</div>
				</div>
			</div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
       
    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

  

    </body>

    </html>
	<?php

include_once 'database_connect.php';

	if(isset($_POST['submit']))
	{
	$veh=$_POST['vehicle'];
	$ser=$_POST['sercenter'];
	$checkbox1=$_POST['service'];
	$chk="";
	foreach($checkbox1 as $chk1)
   {
      $chk .= $chk1.",";
   }
   

	$query="insert into bookslot values('".$user."','".$veh."','".$ser."','".$chk."')";
	if(mysql_query($query) )  {
	echo'<script>alert("Inserted Successfully")</script>';
}

}
   ?>
