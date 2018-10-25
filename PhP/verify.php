<?php

$email=$_REQUEST['Email'];
$pass=$_REQUEST['Password'];
session_start();
$_SESSION["flag"]=null;
$_SESSION['user']=null;
$_SESSION['type']=null;
include("database.php");
$sql = "SELECT Email, Password, Type FROM user where Email ='".$email."' and Password = '".md5($pass)."'";
$js=getJSONFromDB($sql);
$ar=json_decode($js,true);
if(isset($ar[0]["Email"]))
{
	if ($ar[0]["Email"]==$email && $ar[0]["Password"]==md5($pass)) {
		setcookie("permission","yes",time()+1800);
		$_SESSION["flag"]="Success";
		$_SESSION['user']=$ar[0]["Email"];
		$_SESSION['type']=$ar[0]["Type"];
		header("Location:homepage");
	}
	else
	{
		header("Location:login?error=login error");
	}
}
else
	{
		header("Location:login?error=login error");
	}
?>