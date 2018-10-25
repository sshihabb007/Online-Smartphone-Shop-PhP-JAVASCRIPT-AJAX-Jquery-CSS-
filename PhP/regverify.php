<?php
include('database.php');
session_start();
$reg=array();
$reg['fname']=$_POST['fname'];
$reg['lname']=$_POST['lname'];
$reg['email']=$_POST['Email'];
$reg['gender']=$_POST['Gender'];
$reg['DOB']=$_POST['DOB'];
$reg['Password']=$_POST['Password'];
$reg['CPassword']=$_POST['CPassword'];
$reg['Phone']=$_POST['phone'];
$count=0;
echo "<pre>";print_r($_POST);echo "</pre>";
echo "<pre>";print_r($reg);echo "</pre>";

if(strlen($reg['fname'])<=8){
	$count++;
	echo "fname $count<br/>";
}
if (strlen($reg['lname'])<=8) {
	$count++;
	echo "lname $count<br/>";
}
if (filter_var($reg['email'], FILTER_VALIDATE_EMAIL)) {
    $count++;
    echo "email $count<br/>";
} 
if ($reg['DOB']!=" ")
{
	$count++;
	echo "dob $count<br/>";
}
if ($reg['Password']==$reg['CPassword']) {
	$count++;
	echo "Pass $count<br/>";
}
if(is_numeric($reg['Phone']))
{
	$count++;
	echo "phone $count<br/>";
}
	
if($reg['gender']!=' ')
{
	$count++;
	echo "Gender $count<br/>";
}
if($count==7)
{
	$sq="SELECT count(*) as users FROM `user` WHERE `Email` ='".$reg['email']."'";
	$js=getJSONFromDB($sq);
	$ar=json_decode($js,true);
	if($ar[0]['users']==0)
	{
		$sql="INSERT INTO `user`(`First Name`, `Last Name`, `Email`, `Gender`, `DOB`, `Password`, `Phone`, `Type`) VALUES ('".$reg['fname']."','".$reg['lname']."','".$reg['email']."','".$reg['gender']."','".$reg['DOB']."','".md5($reg['Password'])."','".$reg['Phone']."','user')";
		$result=updateSQL($sql);
		if ($result>0) {
			$_SESSION['reg stutas']="Success";
			header("Location:Reg");
		}
		else {
			$_SESSION['reg stutas']="dberror";
			header("Location:Reg?error=problem");
		}
	}
	else {
		$_SESSION['reg stutas']="not available";
		header("Location:Reg?error=problem");
	}
}
else
{
	$_SESSION['reg stutas']="not verified";
	header("Location:Reg?error=problem");
}
  ?>