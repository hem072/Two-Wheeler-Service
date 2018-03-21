<?php
include_once"database_connect.php";

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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
    				$("#progressid").css("width","0%")
    			});

    			$("#form2right").click(function(){
    				$("#form2").hide(1000);
    				$("#form3").show(1500);
    				$("#progressid").css("width","100%");

    			});


    		});

    </script>



</head>
<body class="customlogin">
<!-- Page Content -->
	<div class="row">
	<div class="col-lg-1"></div>
            <div class="col-lg-10">
                <h1 class="page-header">Add Service Center
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
					 <div class="panel-heading">Add Service Center</div>
	  					<div class="panel-body">
	  						<br>
	    					<div class="progress">
  								<div class="progress-bar success" id="progressid"></div>
							</div>
							<br>
							<form id="addservicecenterform" action="addservicecenter" method="POST">
								<div class="row" id="form1">
									<div class="col-lg-2">
									</div>

									<div class="col-lg-4">
										<div class="form-group">
        								   <input type="text" class="form-control" id="branch" placeholder="Enter Branch Name" name="bname">
      									 </div>

      									 <div class="form-group">
        								   <input type="text" class="form-control" id="Mname" placeholder="Enter Manager Name" name="mname">
      									 </div>

    							 	</div>
      								<div class="col-lg-4">
      									 <div class="form-group">
        								   <input type="text" class="form-control" id="contact" placeholder="Enter Contact Number" name="cnt">
      									 </div>

      							         <div class="form-group">
        								   <input type="email" class="form-control" id="Email" placeholder="Enter Email" name="email">
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
        								   <input type="text" class="form-control" id="branch" placeholder="Address Line 1" name="add1">
      									 </div>



      									 <div class="form-group">
        								   <input type="text" class="form-control" id="branch" placeholder="City" name="city">
      									 </div>

      									 <div class="form-group">
        								   <input type="text" class="form-control" id="Mname" placeholder="Pincode" name="pin">
      									 </div>

    							 	</div>
      								<div class="col-lg-4">
      									 <div class="form-group">
        								   <input type="text" class="form-control" id="contact" placeholder="Address Line 2" name="add2">
      									 </div>



      									 <div class="form-group">
        								   <input type="text" class="form-control" id="contact" placeholder="state" name="state">
      									 </div>

      							         <div class="form-group">
        								   <input type="email" class="form-control" id="Email" placeholder="Country" name="cnt">
      									 </div>

									</div>

									<div class="col-lg-5"></div>
									<div class="col-lg-2">
										<div class="btn-group btn-group-justified">
											  <a class="btn btn-default" id="from2left"><i class="fa  fa-arrow-circle-left"></i></a>
											  <a class="btn btn-default" id="form2right"><button type="submit" name="submit">Submit</button></a>

										</div>
									</div>
							</div>

							<div class="row" id="form3">


								            <div class="col-lg-12">
								               <center> <h1 class="page-header">Service Center added Successfully!!!
								                    <small></small>
								                </h1>
								            </center><br><br>
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
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2017</p>
                </div>
            </div>
        </footer>


    </body>

    </html>
<?php


if(isset($_POST['submit']))
$query1="insert into addservicecenter values('".$_POST['bname']."','".$_POST['cnt']."','".$_POST['mname']."','".$_POST['email']."','".$_POST['add1']."','".$_POST['add2']."',
'".$_POST['city']."','".$_POST['state']."','".$_POST['pincode']."','".$_POST['country']."')";





 ?>
