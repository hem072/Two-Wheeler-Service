<?php
session_start();
include_once 'database_connect.php';

if(isset($_SESSION['user']) && $_SESSION['userid']==session_id())
{
 
$user=$_SESSION['user'];


}
else
{
	header("Location:Home-Page.html");
}




?>


 <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Change Password</title>

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
   <body>
        <script type="text/javascript">
            function passFunction() 
            {
                if((document.getElementById("password").value)==(document.getElementById("repass").value))
                {
                alert("Your password has been changed successfully!"); 
				return true;
                }
                else
                {
                alert("Password do not match,Re-enter password! ");
				return false;
                }
            }
        </script>
   
	<div  class="row">
<div class="col-lg-12">
	<nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle"  data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
    </button>
      <a class="navbar-brand" href="home.html">BikeService.com</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="userprofilen.php">Profile</a></li>
      <li class="active"><a href="change.php ">Change Password</a></li>
	  <li><a href="bookslot.php">Book Slot</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
	   <li><a href="logout.php"> <span class="fa  fa-sign-in"></span>Logout</a></li>
    
    </ul>
   </div>   
  </div>
  </div>
  </div> <!-- row-->
</nav><br><br>
	
	
        <div class="jumbotron">
            <div class="form-group">
                <center>
                    <h3>Change your Password here!</h3>
                </center>
            </div>
            </div>
        <form class="form-horizontal" name="f1" action="change.php" method="POST">
            <div class="form-group">
                <p class="col-lg-1"></p>
                <h4 class="col-lg-3">Enter your new Password:</h4>
                <div class="col-lg-4">    
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="pass">
                </div>
            </div>
            <div class="form-group">
                <p class="col-lg-1"></p>
                <h4 class="col-lg-3">Re-enter your Password:</h4>
                <div class="col-lg-4">    
                    <input type="password" class="form-control" id="repass" placeholder="Enter password again" name="repass">
                </div>
            </div>
            <div class="form-group">
                <p class="col-lg-3"></p>
                <div class="col-lg-2">
                    <button type="submit" onsubmit="return passFunction()" class="btn btn-primary" name="submit">
					Submit</button>
                </div>
            </div>
        </form>
       <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    </body>
</html>
<?php
if(isset($_POST['submit']))
{
	
$pass=$_POST['pass'];
$repass=$_POST['repass'];
if($pass==$repass)
{
	echo "matched";

$query="Update login SET password='".$pass."' where userid='$user'";
if(mysql_query($query))
{

?>
<script> alert("Password Changed");</script>
<?php
}


}
else
{?>
<script> alert("Password Changed");</script>
<?php
}

}
{
	
}


?>