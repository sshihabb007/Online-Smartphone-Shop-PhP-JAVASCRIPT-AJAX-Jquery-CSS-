<?php 
session_start();
$add=array();
echo"<pre>";print_r($_POST);echo"</pre>";
$add['Model']=$_POST['Model'];
$add['MultiTouch']=$_POST['MultiTouch'];
$add['Brand']=$_POST['Brand'];
$add['Dimensions']=$_POST['Dimensions'];
$add['Weight']=$_POST['Weight'];
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
$type=substr($_FILES['File']['type'],0, 5);
 if($type=='image')
 {
	 $count++;
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
if($count==26)
{
	try{if (!file_exists("../Image/") && !is_dir("../Image/")) {
			mkdir("../Image/");         
		}
		$dir="../Image/";
		echo"<pre>";print_r($_FILES);echo"</pre>";
			require('database.php');
			 $sql="INSERT INTO `mobile feature`( `Image`,`Model`,`Brand`,`Dimensions`,`Weight`,`Body Build`,`Sim`,`Technology`,`Display Type`,`Display Size`,`Display Protection`,`Multitouch`,`OS`,`Chipset`,`CPU`,`GPU`,`Card Slort`,`Internal Memory`,`Primary Camera`,`Camera Feature`,`Video Quality`,`Secondary Camera`,`Alert`,`Loudspeaker`,`Quantity`,`Price`) VALUES ('".$dir.$_FILES['File']['name']."','".$add['Model']."','".$add['Brand']."','".$add['Dimensions']."','".$add['Weight']."','".$add['BodyBuild']."','".$add['Sim']."','".$add['Technoogy']."','".$add['Displaytype']."','".$add['Displaysize']."','".$add['Displayproctector']."','".$add['MultiTouch']."','".$add['OS']."','".$add['Chipset']."','".$add['CPU']."','".$add['GPU']."','".$add['Cardslort']."','".$add['InternalMemory']."','".$add['Primerycamera']."','".$add['CameraFeature']."','".$add['Video']."','".$add['SecondaryCamera']."','".$add['AlertType']."','".$add['Loudspeaker']."','".$add['Quantity']."','".$add['Price']."')";
			 $result=updateSQL($sql);
			 if($result>0)
			 {
				$target_dir = "../Image/";
				$target_file = $target_dir . basename($_FILES["File"]["name"]);
				move_uploaded_file($_FILES['File']['tmp_name'], $target_file);
				$_SESSION["addproduct"]="Success";
				header("Location:Addproduct");
			 }
			 else
			{
				$_SESSION["addproduct"]="Fail";
				header("Location:Addproduct");
			}} catch (Exception $e) {
				$_SESSION["addproduct"]="Fail";
	header("Location:Addproduct");
}
			}
else
{
	$_SESSION["addproduct"]="Fail";
	header("Location:Addproduct");
}

 ?>