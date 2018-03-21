 	<html>
	<head><title>ADMIN PAGE</title>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	
	</head>
	
	<body>
	
	<form action="adminlogins.php" class="form-horizontal" method="post">	
	<br><br>
 	<div class="form-group">

 	<p class="col-lg-4"></p>
 	<h4  class="col-lg-1">Username</h4>
 	<div class="col-lg-4">
 	<input type="text" class="form-control" name="adname" id="user-name" placeholder="Enter your username" required="">
 	</div>
 	</div>
 	<div class="form-group">
 	<p class="col-lg-4"></p>
 	<h4  class="col-lg-1">Password</h4>
 	<div class="col-lg-4">
 	<input type="password" class="form-control" name="adpass" id="user-name" placeholder="Enter your password" required="">
 	</div>
 	</div>
 	<div class="form-group">
 	<p class="col-lg-4"></p>
 	<div class="col-lg-3">
 	<a href="password.html">Forgot your password?</a>
 	</div>
 	</div>
 	<div class="form-group">
 	<p class="col-lg-5"></p>
 	<div class="col-lg-2">
 	<button type="submit" class="btn btn-primary" name="btn">Submit</button>
 	</div>
 	</div>
	
	</body>
	</html>
	<?php

include_once 'database_connect.php';


if(isset($_POST['btn']))
{
	$usern = $_POST['adname'];
	$upass = $_POST['adpass'];
	$res=mysql_query("SELECT * FROM adlogin WHERE adname='$usern'");
	$row=mysql_fetch_array($res);
	
	if($row['adpass']==$upass)
	{
		 session_start();
		$_SESSION['user'] = $row['adid'];
		$_SESSION['userid']=session_id();
		header("Location:admin\dashboard.php");
        
	}
	else
	{
		?>
        <script>alert('wrong details');
		
              </script>
        <?php
		header("Location:adminlogins.php");
		
	}
	
}
?>