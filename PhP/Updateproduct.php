<?php  
ob_start();
session_start();
if (isset($_SESSION["flag"]) &&isset($_SESSION['type']) && $_SESSION["flag"]=="Success" && $_SESSION['type']=='admin') {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
	<link rel="stylesheet" type="text/css" href="../CSS/UpdateProduct.css">
	<script src="../JavaScript/Updateproduct.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
		<?php
if (isset($_SESSION['updateproduct'])&&$_SESSION['updateproduct']=="Success") {
	echo "<script>alert('Product Successfully Updated');</script>";
	$_SESSION['updateproduct']=null;
}
 else if (isset($_SESSION['updateproduct'])&&$_SESSION['updateproduct']=="Fail") {
	echo "<script>alert('Product Can not Updated');</script>";
	$_SESSION['updateproduct']=null;
}
include("home2.php");
	?>
<div class="UpdateProduct-box">
	<h1>Update Product</h1>
	<?php
 	$result=array();
 	if (isset($_POST['submit'])) {
 		$model=$_POST['SModel'];
 $brand=$_POST['SBrand'];
 $sql2="SELECT * FROM `mobile feature` WHERE `Model` ='".$model."' and `Brand`='".$brand."'";
 try{$js1=getJSONFromDB($sql2);
 $ar=json_decode($js1,true);
 if($ar!=null)
 {foreach ($ar as $p) {
 	$result=$p;
 }}
 else{
	 reset($result);
	 echo "<script language='Javascript'>";
		 echo "alert('Product not found')";
		 echo"</script>";
 }
	 }
	 catch(Exception $e)
	 {
		echo $e->getMessage();
	 }}
	?>
<form name="product" action="updateProductverefy" method="post" enctype="multipart/form-data" >
		<input type="hidden" name="Id" value="<?php if(isset($result['Id']) && $result['Id']!=null){echo $result['Id'];}?>">
		<table>
			<tr>
		<td></td>
			<td colspan="3">
				<img id="im" src="<?php if(isset($result['Image']) && $result['Image']!=null){echo $result['Image'];}?>" alt="No Image" class="img" align="center">
			</td>
			<td colspan="3">
				<input type="button" value="Search" class="btn" style="width:150px;" onclick="modal()" >
			</td>
			<td>
			<span class="spn" >(invalid)</span>
			</td>
		</tr>
			<tr>
			<td class="align">
				Image:
			</td>
			<td>&nbsp&nbsp</td>
			<td colspan="2">
				<input type="file" name="File" onchange="image(); showimg(this)" accept="image/gif, image/jpeg, image/jpg, image/png" style="width: 230px">
			</td>
			<td class="align">
				Brand:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<select name="Brand" onchange="brand()" >
					<option value="">Brand</option>
					<?php
					$sql3="SELECT `Brand Name` FROM `brand`";
					$result3=getJSONFromDB($sql3);
					$js3=json_decode($result3,true);
					foreach($js3 as $p)
					{
						if(isset($result['Brand']) && $result['Brand']!=null)
						{
							if($p['Brand Name']==$result['Brand'])
							{
								echo "<option value='".$p['Brand Name']."' selected>".$p['Brand Name']."</option>";
							}
							else
							{
								echo "<option value='".$p['Brand Name']."'>".$p['Brand Name']."</option>";
							}
						}
						else
						{
							echo "<option value='".$p['Brand Name']."'>".$p['Brand Name']."</option>";
						}
					}
					?>
				</select>
			<td>
			<span id="Brand" class="spn" >(invalid)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				Model:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Model" placeholder="Model" onkeyup="model()" value="<?php if(isset($result['Model']) && $result['Model']!=null){echo $result['Model'];}?>" >
			</td>
			<td>
				<span id="Model" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Multi Touch:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="MultiTouch" placeholder="Multi Touch" onkeyup="multitouch()" value="<?php if(isset($result['Multitouch']) && $result['Multitouch']!=null){echo $result['Multitouch'];}?>" >
			</td>
			<td>
				<span id="MultiTouch" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				Dimensions:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Dimensions" placeholder="Dimensions" onkeyup="dimensions()" value="<?php if(isset($result['Dimensions']) && $result['Dimensions']!=null){echo $result['Dimensions'];}?>" >
			</td>
			<td>
				<span id="Dimensions" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Weight:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Weight" placeholder="Weight" onkeyup="weight()" value="<?php if(isset($result['Weight']) && $result['Weight']!=null){echo $result['Weight'];}?>" >
			</td>
			<td>
				<span id="Weight" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				Body Build:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="BodyBuild" placeholder="Body Build" onkeyup="bodybuild()" value="<?php if(isset($result['Body Build']) && $result['Body Build']!=null){echo $result['Body Build'];}?>" >
			</td>
			<td>
				<span id="BodyBuild" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Sim:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Sim" placeholder="Sim" onkeyup="sim()" value="<?php if(isset($result['Sim']) && $result['Sim']!=null){echo $result['Sim'];}?>" >
			</td>
			<td>
				<span id="Sim" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				Technoogy:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Technoogy" placeholder="Technoogy" onkeyup="technoogy()" value="<?php if(isset($result['Technology']) && $result['Technology']!=null){echo $result['Technology'];}?>" >
			</td>
			<td>
				<span id="Technoogy" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Display Type:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Displaytype" placeholder="Display Type" onkeyup="displaytype()" value="<?php if(isset($result['Display Type']) && $result['Display Type']!=null){echo $result['Display Type'];}?>" >
			</td>
			<td>
				<span id="Displaytype" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				Display Size:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Displaysize" placeholder="Display Size" onkeyup="displaysize()" value="<?php if(isset($result['Display Size']) && $result['Display Size']!=null){echo $result['Display Size'];}?>" >
			</td>
			<td>
				<span id="Displaysize" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Display Protection:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Displayproctector" placeholder="Display Protection" onkeyup="displayproctector()" value="<?php if(isset($result['Display Protection']) && $result['Display Protection']!=null){echo $result['Display Protection'];}?>" >
			</td>
			<td>
				<span id="Displayproctector" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				OS:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="OS" placeholder="OS" onkeyup="os()" value="<?php if(isset($result['OS']) && $result['OS']!=null){echo $result['OS'];}?>" >
			</td>
			<td>
				<span id="OS" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Chipset:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Chipset" placeholder="Chipset" onkeyup="chipset()" value="<?php if(isset($result['Chipset']) && $result['Chipset']!=null){echo $result['Chipset'];}?>" >
			</td>
			<td>
				<span id="Chipset" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				CPU:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="CPU" placeholder="CPU" onkeyup="cpu()" value="<?php if(isset($result['CPU']) && $result['CPU']!=null){echo $result['CPU'];}?>" >
			</td>
			<td>
				<span id="CPU" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				GPU:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="GPU" placeholder="GPU" onkeyup="gpu()" value="<?php if(isset($result['GPU']) && $result['GPU']!=null){echo $result['GPU'];}?>" >
			</td>
			<td>
				<span id="GPU" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				Card Slort:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Cardslort" placeholder="Card Slort" onkeyup="cardslort()" value="<?php if(isset($result['Card Slort']) && $result['Card Slort']!=null){echo $result['Card Slort'];}?>" >
			</td>
			<td>
				<span id="Cardslort" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Internal Memory:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="InternalMemory" placeholder="Internal Memory" onkeyup="internalmemory()" value="<?php if(isset($result['Internal Memory']) && $result['Internal Memory']!=null){echo $result['Internal Memory'];}?>" >
			</td>
			<td>
				<span id="InternalMemory" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				Primery Camera:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Primerycamera" placeholder="Primery Camera"  onkeyup="primerycamera()" value="<?php if(isset($result['Primary Camera']) && $result['Primary Camera']!=null){echo $result['Primary Camera'];}?>" >
			</td>
			<td>
				<span id="Primerycamera" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Camera Feature:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="CameraFeature" placeholder="Camera Feature" onkeyup="camerafeature()" value="<?php if(isset($result['Camera Feature']) && $result['Camera Feature']!=null){echo $result['Camera Feature'];}?>" >
			</td>
			<td>
				<span id="CameraFeature" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				Video Quality:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Video" placeholder="Video Quality" onkeyup="video()" value="<?php if(isset($result['Video Quality']) && $result['Video Quality']!=null){echo $result['Video Quality'];}?>" >
			</td>
			<td>
				<span id="Video" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Secondary Camera:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="SecondaryCamera" placeholder="Secondary Camera" onkeyup="secondarycamera()" value="<?php if(isset($result['Secondary Camera']) && $result['Secondary Camera']!=null){echo $result['Secondary Camera'];}?>" >
			</td>
			<td>
				<span id="SecondaryCamera" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				Alert Type:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="AlertType" placeholder="Alert Type" onkeyup="alerttype()" value="<?php if(isset($result['Alert']) && $result['Alert']!=null){echo $result['Alert'];}?>" >
			</td>
			<td>
				<span id="AlertType" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Loudspeaker:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Loudspeaker" placeholder="Loudspeaker" onkeyup="loudspeaker()" value="<?php if(isset($result['Loudspeaker']) && $result['Loudspeaker']!=null){echo $result['Loudspeaker'];}?>" >
			</td>
			<td>
				<span id="Loudspeaker" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td class="align">
				Quantity:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Quantity" placeholder="Quantity" onkeyup="quantity()" value="<?php if(isset($result['Quantity']) && $result['Quantity']!=null){echo $result['Quantity'];}?>" >
			</td>
			<td>
				<span id="Quantity" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Price:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Price" placeholder="Price"  onkeyup="price()" value="<?php if(isset($result['Price']) && $result['Price']!=null){echo $result['Price'];}?>" >
			</td>
			<td>
				<span id="Price" class="spn"  >(Min: 2)</span>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>&nbsp&nbsp</td>
			<td colspan="5" align="center">
				<input type="submit" name="submit" value="Submit" class="btn" onclick="return Add()">
			</td>
		</tr>
	</table>
	</form>
</div>
<div id="mymodal" class="modal">
<div class="SearchProduct-box">
<span class="btnclose" onclick='btnexit()'>&times</span>
<h1>Search Product</h1>
<form action="Updateproduct" method="post">
<table>
				<tr>
			<td class="align">
				Model:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="SModel" placeholder="Model" >
			</td>
			<td class="align">
				Brand:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<select name="SBrand" >
					<option value="">Brand</option>
					<?php
					$sql1="SELECT `Brand Name` FROM `brand`";
					$result1=getJSONFromDB($sql1);
					$js=json_decode($result1,true);
					foreach($js as $p)
					{
							echo "<option value='".$p['Brand Name']."'>".$p['Brand Name']."</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>&nbsp&nbsp</td>
			<td colspan="2" align="right">
				<input type="submit" name="submit" value="Search" class="btn" style="width:150px;">
			</td>
			<td colspan="2" align="left">
				<input type="reset" name="reset" value="Reset" class="btn" style="width:150px;">
			</td>
		</tr>
			</table>
</form>
</div>
</div>
</body>
</html>
<?php 
}
else 
{
	header("Location:login");
} 
ob_flush();
?>
