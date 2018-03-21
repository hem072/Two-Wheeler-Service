<html lang="en"> 
 <head> 
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../dist/css/two-wheeler.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 </head> 
 <body>  

     <nav class="navbar navbar-inverse">
    
        <div class="container-fluid">
            <div class="navbar-header">
                  <a class="navbar-brand" href="#">TWSC</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class=" custom-li-back"><a href="Home-Page.html">Home</a></li>
                  <li class="custom-li-back"><a href="#">About Us</a></li>
                  <li class="custom-li-back"><a href="contact-us.html">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="custom-li-back"><a href="login.php"><span class="fa  fa-sign-in
"></span> Login</a></li>
                </ul>


        



        </div><!--End of Container-->


    </nav><!--End of Header-->
    
<div class="jumbotron">
 		<div class="container text-center" id="home">
 			<h1 >Welcome</h1>
 			<p>Please enter your username and password</p>
			<small>(If first time login check your email for details)</small>
 		</div>
 		</div>
 	<form action="" class="form-horizontal" method="post">	
 	<div class="form-group">
 	<p class="col-lg-4"></p>
 	<h4  class="col-lg-1">Username</h4>
 	<div class="col-lg-4">
 	<input type="text" class="form-control" name="user" id="user-name" placeholder="Enter your username" required="">
 	</div>
 	</div>
 	<div class="form-group">
 	<p class="col-lg-4"></p>
 	<h4  class="col-lg-1">Password</h4>
 	<div class="col-lg-4">
 	<input type="text" class="form-control" name="pass" id="user-name" placeholder="Enter your password" required="">
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
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
<?php
session_start();
include_once 'database_connect.php';


if(isset($_POST['btn']))
{
	$username = mysql_real_escape_string($_POST['user']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM login WHERE username='$username'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==$upass)
	{
		 session_start();
		$_SESSION['user'] = $row['userid'];
		header("Location: user/addservice.html");
        
	}
	else
	{
		?>
        <script>alert('wrong details');</script>
        <?php
	}
	
}
?>