<?php 
session_start();
$add=array();
$add['Id']=$_POST['Id'];
$add['Model']=$_POST['Model'];
$add['Brand']=$_POST['Brand'];
$add['Dimensions']=$_POST['Dimensions'];
$add['Weight']=$_POST['Weight'];
$add['MultiTouch']=$_POST['MultiTouch'];
$add['BodyBuild']=$_POST['BodyBuild'];
$add['Sim']=$_POST['Sim'];
$add['Technoogy']=$_POST['Technoogy'];
$add['Displaytype']=$_POST['Displaytype'];
$add['Displaysize']=$_POST['Displaysize'];
$add['Displayproctector']=$_POST['Displayproctector'];
$add['OS']=$_POST['OS'];
$add['Chipset']=$_POST['Chipset'];
$add['CPU']=$_POST['CPU'];
$add['GPU']=$_POST['GPU'];
$add['Cardslort']=$_POST['Cardslort'];
$add['InternalMemory']=$_POST['InternalMemory'];
$add['Primerycamera']=$_POST['Primerycamera'];
$add['CameraFeature']=$_POST['CameraFeature'];
$add['Video']=$_POST['Video'];
$add['SecondaryCamera']=$_POST['SecondaryCamera'];
$add['AlertType']=$_POST['AlertType'];
$add['Loudspeaker']=$_POST['Loudspeaker'];
$add['Quantity']=$_POST['Quantity'];
$add['Price']=$_POST['Price'];
$count=0;
include('database.php');
if($_FILES['File']['error']==null)
{
	$type=substr($_FILES['File']['type'],0, 5);
  if($type=='image')
    {
	 $count++;
    }
}
 if($add['MultiTouch']!= " ")
 {
	 $count++;
 }
if($add['Model']!=" ")
{
	$count++;
}
if($add['Brand']!=" ")
{
	$count++;
}
if($add['Dimensions']!=" ")
{
	$count++;
}
if($add['Weight']!=" ")
{
	$count++;
}
if($add['BodyBuild']!=" ")
{
	$count++;
}
if($add['Sim']!=" ")
{
	$count++;
}
if($add['Technoogy']!=" ")
{
	$count++;
}
if($add['Displaytype']!=" ")
{
	$count++;
}
if($add['Displaysize']!=" ")
{
	$count++;
}
if($add['Displayproctector']!=" ")
{
	$count++;
}
if($add['OS']!=" ")
{
	$count++;
}
if($add['Chipset']!=" ")
{
	$count++;
}
if($add['CPU']!=" ")
{
	$count++;
}
if($add['GPU']!=" ")
{
	$count++;
}
if($add['Cardslort']!=" ")
{
	$count++;
}
if($add['InternalMemory']!=" ")
{
	$count++;
}
if($add['Primerycamera']!=" ")
{
	$count++;
}
if($add['CameraFeature']!=" ")
{
	$count++;
}
if($add['Video']!=" ")
{
	$count++;
}
if($add['SecondaryCamera']!=" ")
{
	$count++;
}
if($add['AlertType']!=" ")
{
	$count++;
}
if($add['Loudspeaker']!=" ")
{
	$count++;
}

if(is_numeric($add['Quantity']))
{
	$count++;
}

if(is_numeric($add['Price']))
{
	$count++;
}
	if($_FILES['File']['error']==null && $count==26)
{
	if (!file_exists("../Image/") && !is_dir("../Image/")) {
		mkdir("../Image/");         
	}
	$dir="../Image/";
	echo"<pre>";print_r($_FILES);echo"</pre>";
		 $sql="UPDATE `mobile feature` SET `Image`='".$dir.$_FILES['File']['name']."',`Model`='".$add['Model']."',`Brand`='".$add['Brand']."',`Dimensions`='".$add['Dimensions']."',`Weight`='".$add['Weight']."',`Body Build`='".$add['BodyBuild']."',`Sim`='".$add['Sim']."',`Technology`='".$add['Technoogy']."',`Display Type`='".$add['Displaytype']."',`Display Size`='".$add['Displaysize']."',`Display Protection`='".$add['Displayproctector']."',`Multitouch`='".$add['MultiTouch']."',`OS`='".$add['OS']."',`Chipset`='".$add['Chipset']."',`CPU`='".$add['CPU']."',`GPU`='".$add['GPU']."',`Card Slort`='".$add['Cardslort']."',`Internal Memory`='".$add['InternalMemory']."',`Primary Camera`='".$add['Primerycamera']."',`Camera Feature`='".$add['CameraFeature']."',`Video Quality`='".$add['Video']."',`Secondary Camera`='".$add['SecondaryCamera']."',`Alert`='".$add['AlertType']."',`Loudspeaker`='".$add['Loudspeaker']."',`Quantity`='".$add['Quantity']."',`Price`='".$add['Price']."' WHERE `Id`=".$add['Id'];
		 echo $sql;
		 $result=updateSQL($sql);
		 if($result>0)
		 {
			$target_dir = "../Image/";
			$target_file = $target_dir . basename($_FILES["File"]["name"]);
			move_uploaded_file($_FILES['File']['tmp_name'], $target_file);
			$_SESSION['updateproduct']="Success";
			header("Location:Updateproduct");
		 }
	echo "<pre>";print_r($add);echo "</pre>";
}
else if($_FILES['File']['error']!=null && $count==25)
{
		 $sql="UPDATE `mobile feature` SET `Model`='".$add['Model']."',`Brand`='".$add['Brand']."',`Dimensions`='".$add['Dimensions']."',`Weight`='".$add['Weight']."',`Body Build`='".$add['BodyBuild']."',`Sim`='".$add['Sim']."',`Technology`='".$add['Technoogy']."',`Display Type`='".$add['Displaytype']."',`Display Size`='".$add['Displaysize']."',`Display Protection`='".$add['Displayproctector']."',`Multitouch`='".$add['MultiTouch']."',`OS`='".$add['OS']."',`Chipset`='".$add['Chipset']."',`CPU`='".$add['CPU']."',`GPU`='".$add['GPU']."',`Card Slort`='".$add['Cardslort']."',`Internal Memory`='".$add['InternalMemory']."',`Primary Camera`='".$add['Primerycamera']."',`Camera Feature`='".$add['CameraFeature']."',`Video Quality`='".$add['Video']."',`Secondary Camera`='".$add['SecondaryCamera']."',`Alert`='".$add['AlertType']."',`Loudspeaker`='".$add['Loudspeaker']."',`Quantity`='".$add['Quantity']."',`Price`='".$add['Price']."' WHERE `Id`=".$add['Id'];
		 $result=updateSQL($sql);
		 if($result>0)
		 {
			 $_SESSION['updateproduct']="Success";
			header("Location:Updateproduct");
		 }
}
else
{
	$_SESSION['updateproduct']="Fail";
	header("Location:Updateproduct");
}

 ?>