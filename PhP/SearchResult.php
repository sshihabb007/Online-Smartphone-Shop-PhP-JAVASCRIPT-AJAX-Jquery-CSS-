
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../CSS/Search.css">
	<script src="../JavaScript/styleandvalidity.js"></script>
	<title>Search Result</title>
</head>
<?php
include('Home2.php');
include('BrandsView.php');
?>
<body onload= countsrc("<?php echo $_POST['find'];?>")>
<div class="right box">
<table id="srctable" >
<tr>
	<?php
if(isset($_POST['search']))
{
	$sql="SELECT `Id`, `Image`, `Model`, `Price` FROM `mobile feature` WHERE `Model`LIKE '%".$_POST['find']."%' or `Brand` LIKE '%".$_POST['find']."%'";
	$js=getJSONFromDB($sql);
	$ar=json_decode($js,true);
	if ($ar==null) {
		$_SESSION['srcstutas']="fail";
		header("Location:homepage");
	}
	else	{
		$count=0;	
	foreach ($ar as $p) {
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
	}}
}
?>
</tr>
</table>
</div>
</body>
</html>

