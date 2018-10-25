<?php 
$ln=array();
function readtxt()
{
	global $ar;
	$file=fopen("db.txt", 'r') or die("file not found");
	while (!feof($file)) {
		$line=fgets($file);
		$db=explode(" ",$line);
		if(isset($db[1]))
		{
			$ar[$db[0]]=$db[1];
		}
	}
	fclose($file);
}
function righttxt($reg)
{
	global $reg;
$filew=fopen('db.txt','a') or die("file open error");


//fwrite($file,"append demo ");
fwrite($filew,$reg['email']);
fwrite($filew," ".md5($reg['Password']));
fwrite($filew," ".$reg['fname']);
fwrite($filew," ".$reg['lname']);
fwrite($filew," ".$reg['gender']);
fwrite($filew," ".$reg['year']);
fwrite($filew,"-".$reg['month']);
fwrite($filew,"-".$reg['day']);
fwrite($filew," ".$reg['Phone']);
fwrite($filew,"\r\n");
	
}
function readprofile($AllProfile)
{
	$i=0;
	global $AllProfile;
	$file=fopen("db.txt", 'r') or die("file not found");
	while (!feof($file)) {
		$line=fgets($file);
		$db=explode(" ",$line);
		if(isset($db[1]))
		{
			$AllProfile[$i]['email']=$db[0];
			$AllProfile[$i]['Password']=$db[1];
			$AllProfile[$i]['fname']=$db[2];
			$AllProfile[$i]['lname']=$db[3];
			$AllProfile[$i]['gender']=$db[4];
			$AllProfile[$i]['Phone']=trim($db[6]);
			$dob=$db[5];
			
			$db1=explode("-", $dob);
		}
		else 
		{
			$db1[0]=null;
		}
		if(isset($db1[0]))
		{
			$AllProfile[$i]['year']=$db1[0];
			$AllProfile[$i]['month']=$db1[1];
			$AllProfile[$i]['day']=$db1[2];
		}
		$i++;
	}
	fclose($file);
}

?>