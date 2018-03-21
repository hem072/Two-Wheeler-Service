<?php

include_once"database_connect.php";
if(isset($_POST['submit']))
{
  $query1="insert into addservicecenter values('".$_POST['bname']."','".$_POST['cnt']."','".$_POST['mname']."','".$_POST['email']."',
  '".$_POST['add1']."','".$_POST['add2']."','".$_POST['city']."','".$_POST['state']."','".$_POST['pin']."','".$_POST['cnt']."')";

if(mysql_query($query1))
{
echo "exe";



}



}




?>
