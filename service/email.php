<?php
$to = "vinitdabake800@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: vinitdabake800@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

$res=mail($to,$subject,$txt,$headers);
if($res)
{
	echo "TRUE";
}
?>