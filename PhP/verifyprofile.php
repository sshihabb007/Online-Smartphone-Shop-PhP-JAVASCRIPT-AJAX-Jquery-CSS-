<?php
session_start();
$upd=array();
// echo "<pre>";print_r($_POST);echo "<pre>";
$upd['fname']=$_POST['fname'];
$upd['lname']=$_POST['lname'];
$upd['gender']=$_POST['gender'];
$upd['DOB']=$_POST['DOB'];
$upd['CPassword']=$_POST['CPassword'];
$upd['NPassword']=$_POST['NPassword'];
$upd['CNPassword']=$_POST['CNPassword'];
$upd['Phone']=$_POST['phone'];
$count=0;
$pass=0;
include("database.php");
$sql = "SELECT Email, Password FROM user where Email ='".$_SESSION['user']."'";
$js=getJSONFromDB($sql);
$ar=json_decode($js,true);
if(strlen($upd['fname'])<=8){
	$count++;
	echo "name $count<br/>";
}
if (strlen($upd['lname'])<=8) {
	$count++;
	echo "sur name $count<br/>";
} 
if ($upd['year']!=" " && $upd['month']!=" "&& $upd['day']!= " " )
{
	$count++;
	echo "dob $count<br/>";
}
if(isset($ar[0]['Email']))
{
	if ($ar[0]['Email']=$_SESSION['user']) {
		if($ar[0]['Password']==md5($upd['CPassword']))
		{
			$pass=1;
			if($upd['NPassword']==$upd['CNPassword'])
			{
				$count++;
				$pass=2;
			}
		}
	}
}
if(is_numeric($upd['Phone']) && strlen($upd['Phone']))
{
	$count++;
	echo "phone $count<br/>";
}
	
if($upd['gender']!=' ')
{
	$count++;
	echo "Gender $count<br/>";
}
if($count==6)
{

	$md5 = (($upd['NPassword']==$upd['CNPassword']) && empty($upd['NPassword'])) ? md5($upd['CPassword']) : md5($upd['NPassword']);
	$sql1="UPDATE `user` SET `First Name`='".$upd['fname']."',`Last Name`='".$upd['lname']."',`Gender`='".$upd['gender']."',`DOB`='".$upd['DOB']."',`Password`='" .$md5."',`Phone`='". $upd['Phone']."' WHERE`Email` ='".$ar[0]['Email']."'";
$result=updateSQL($sql1);
if($result>0)
{
	$count=0;
	$pass=0;
	$_SESSION['profile']='Success';
	header("Location:UpdateProfile");
}
else
{
	$_SESSION['profile']='error';
	header("Location:UpdateProfile");
}
}
else
{
	if ($pass==0) {
		$_SESSION['profile']='Password';
		header("Location:UpdateProfile");
		}
	else {
		$_SESSION['profile']='error';
		header("Location:UpdateProfile");
	}
}
  ?>