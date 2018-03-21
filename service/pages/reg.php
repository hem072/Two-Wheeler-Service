	<?php


include_once 'database_connect.php';

	
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['submit']) && isset($_POST['add1']))
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
	
	
	
	$query="insert into userreg values('".$fname."','".$lname."','".$username."','".$cnt."','".$add1."','".$add2."','".$area."','".$ldm."','".$city."','".$state."','".$pin."','".$country."','".$email."')";
	if(mysql_query($query))
	{
		echo '<h2>hiiii</h2>';
		
	}
}
?>