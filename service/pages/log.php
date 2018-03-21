<?php

include_once 'database_connect.php';


if(isset($_POST['btn']))
{
	$usern = $_POST['user'];
	$upass = $_POST['pass'];
	$res=mysql_query("SELECT * FROM login WHERE username='$usern'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==$upass)
	{
		 session_start();
		$_SESSION['user'] = $row['userid'];
		$_SESSION['userid']=session_id();
		header("Location:userprofilen.php");
        
	}
	else
	{
		?>
        <script>alert('wrong details');
		
              </script>
        <?php
		header("Location:login.php");
		
	}
	
}
?>