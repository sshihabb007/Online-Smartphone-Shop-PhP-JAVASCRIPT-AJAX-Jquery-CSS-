<!DOCTYPE html>
<html>
<head>
    <title>Model</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../CSS/Search.css">
	<script src="../JavaScript/styleandvalidity.js"></script>
</head>
<?php
include("home2.php")  ;
include('BrandsView.php');

?>
<body onload = countmodel("<?php echo $_GET['bid'];?>")>
<div class="right box">
<table id="modeltable">
<tr>
<?php
if(isset($_GET['bid']))
{
    $sql="SELECT `mobile feature`.`Id`,`mobile feature`.`Image`, `mobile feature`.`Model`, `mobile feature`.`Price` FROM `mobile feature`,`brand` WHERE `mobile feature`.`Brand` =`brand`.`Brand Name` AND `brand`.`Id` =".$_GET["bid"];
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
}
?>
</tr>
</table>
</div>
</body>
</html>

