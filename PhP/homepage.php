 <!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../CSS/Search.css">
</head>
<?php
include("home2.php")  ;
include('BrandsView.php');

?>
<body>
<div class="right box">
<table style="width:100%;">
<tr>
<?php
$sql="SELECT `Id`,`Image`, `Model`, `Price` FROM `mobile feature` ORDER by `Sold Quantity` DESC LIMIT 12";
$js=getJSONFromDB($sql);
$rs=json_decode($js,true);
		$count=0;	
	foreach ($rs as $p) {
		if($count>=4)
		{
			$count=0;
			echo "</tr>";
			echo "<tr>";
			echo ' <td align="center"><a href="ShowProduct?modelId='.$p['Id'].'" style= "text-decoration: none;"><img src="'.$p['Image'].'" alt="Not Found" style="height:150px;wight:150px;"><br> '.$p['Model'].'<br><span style="color:red;font-weight: bolder;">&#2547;'.$p['Price'].'</span></a></td>';
			$count++;
		}
		elseif ($count<4) {
			echo ' <td align="center"><a href="ShowProduct?modelId='.$p['Id'].'" style= "text-decoration: none;"><img src="'.$p['Image'].'" alt="Not Found" style="height:150px;wight:150px;"><br> '.$p['Model'].'<br><span style="color:red;font-weight: bolder;">&#2547;'.$p['Price'].'</span></a></td>';	
			 $count++;	
		}
	}
?>
</tr>
</table>
</div>
</body>
</html>
<?php 
if(isset($_SESSION['payment stutas'])&&$_SESSION['payment stutas']=="success")
{
	echo "<script>alert('Order Successfully Done Wait for receving Your Product Thank you 🙂')</script>";
	$_SESSION['payment stutas']=null;
}
else if(isset($_SESSION['payment stutas'])&&$_SESSION['payment stutas']=="Fail")
{
	echo "<script>alert('Order Can Not Submitted Successfully Thank you 😞')</script>";
	$_SESSION['payment stutas']=null;
}
if (isset($_SESSION['srcstutas'])&&$_SESSION['srcstutas']=="fail")
{
	echo "<script>alert('Not found')</script>";
	$_SESSION['srcstutas']=null;
}
?>

