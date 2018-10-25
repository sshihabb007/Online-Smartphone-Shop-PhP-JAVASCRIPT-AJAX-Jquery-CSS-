<?php  

session_start();
if (isset($_SESSION["flag"]) && $_SESSION["flag"]=="Success") {
?>
<!DOCTYPE html>
<html>
<head onload= "<?php if(isset($_SESSION['insertbrand']) && $_SESSION['insertbrand']!=null) {echo "eroad()"; $_SESSION['insertbrand']=null;} ?>">
	<title>Add Product</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../CSS/AddProduct.css">
	<script type="text/javascript" src="../JavaScript/Addproduct.js"></script>
</head>
<body>
	<?php
include("home2.php");
	?>
<div class="AddProduct-box">
	<h1>Add Product</h1>
	<form name="product" action="Productverefy" method="post" enctype="multipart/form-data" >
		<table>
			<tr>
		<td></td>
			<td colspan="3">
				<img id="im" src=" " alt="No Image" class="img" align="center">
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
					$sql="SELECT `Brand Name` FROM `brand`";
					$result=getJSONFromDB($sql);
					$js=json_decode($result,true);
					foreach($js as $p)
					{
						echo "<option value='".$p['Brand Name']."'>".$p['Brand Name']."</option>";
					}
					?>
				</select>
				<br>
				<input type="button" name="btn" value="New Brand" class="btn" style="width: 90px;" onclick="callmodal()" >
				
			</td>
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
				<input type="text" name="Model" placeholder="Model" onkeyup="model()">
			</td>
			<td>
				<span id="Model" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Multi Touch:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="MultiTouch" placeholder="Multi Touch" onkeyup="multitouch()">
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
				<input type="text" name="Dimensions" placeholder="Dimensions" onkeyup="dimensions()">
			</td>
			<td>
				<span id="Dimensions" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Weight:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Weight" placeholder="Weight" onkeyup="weight()">
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
				<input type="text" name="BodyBuild" placeholder="Body Build" onkeyup="bodybuild()">
			</td>
			<td>
				<span id="BodyBuild" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Sim:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Sim" placeholder="Sim" onkeyup="sim()">
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
				<input type="text" name="Technoogy" placeholder="Technoogy" onkeyup="technoogy()">
			</td>
			<td>
				<span id="Technoogy" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Display Type:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Displaytype" placeholder="Display Type" onkeyup="displaytype()">
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
				<input type="text" name="Displaysize" placeholder="Display Size" onkeyup="displaysize()">
			</td>
			<td>
				<span id="Displaysize" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Display Protection:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Displayproctector" placeholder="Display Protection" onkeyup="displayproctector()">
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
				<input type="text" name="OS" placeholder="OS" onkeyup="os()">
			</td>
			<td>
				<span id="OS" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Chipset:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Chipset" placeholder="Chipset" onkeyup="chipset()" >
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
				<input type="text" name="CPU" placeholder="CPU" onkeyup="cpu()">
			</td>
			<td>
				<span id="CPU" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				GPU:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="GPU" placeholder="GPU" onkeyup="gpu()">
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
				<input type="text" name="Cardslort" placeholder="Card Slort" onkeyup="cardslort()">
			</td>
			<td>
				<span id="Cardslort" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Internal Memory:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="InternalMemory" placeholder="Internal Memory" onkeyup="internalmemory()">
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
				<input type="text" name="Primerycamera" placeholder="Primery Camera"  onkeyup="primerycamera()">
			</td>
			<td>
				<span id="Primerycamera" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Camera Feature:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="CameraFeature" placeholder="Camera Feature" onkeyup="camerafeature()">
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
				<input type="text" name="Video" placeholder="Video Quality" onkeyup="video()">
			</td>
			<td>
				<span id="Video" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Secondary Camera:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="SecondaryCamera" placeholder="Secondary Camera" onkeyup="secondarycamera()">
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
				<input type="text" name="AlertType" placeholder="Alert Type" onkeyup="alerttype()">
			</td>
			<td>
				<span id="AlertType" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Loudspeaker:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Loudspeaker" placeholder="Loudspeaker" onkeyup="loudspeaker()">
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
				<input type="text" name="Quantity" placeholder="Quantity" onkeyup="quantity()">
			</td>
			<td>
				<span id="Quantity" class="spn"  >(Min: 2)</span>
			</td>
			<td class="align">
				Price:
			</td>
			<td>&nbsp&nbsp</td>
			<td>
				<input type="text" name="Price" placeholder="Price"  onkeyup="price()"
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

 <div class="modal" id="myModal">
	 <div class="addbrand-box" id="product">
	 <div class="modalhead">
		 <span class="btnclose" onclick='btnexit()' >&times</span>
		 <h1>
			 Add Brand
		 </h1>
	 </div>
		<form action="brandverefy" method="post" name="addproduct" >
			<table>
				<tr>
					<td class="align">
						Brand Name:
					</td>
					<td>
						<input type="text" name="BrandName" placeholder="Brand Name" onkeyup="brandname()" >
					</td>
				</tr>
				<tr>
					<td>&nbsp&nbsp</td>
					<td>
				<span id="BrandName" class="spn"  >(Min: 2)</span>
			</td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="submit" name="Add" value="Add Brand" class="btn" style="width: 90px" onclick="return AddBrand()" >
						<input type="reset" name="Add" value="Clean" class="btn" style="width: 80px">
					</td>
				</tr>
			</table>
		</form>
	 </div>
	</div>
</body>
</html>
<?php 
if (isset($_SESSION["addproduct"]) && $_SESSION["addproduct"]=="Success") {
	echo "<script>alert('Product Successfully add')</script>";
	$_SESSION["addproduct"]=null;
}
else if (isset($_SESSION["addproduct"]) && $_SESSION["addproduct"]=="Fail") {
	echo "<script>alert('Product Can Not add')</script>";
	$_SESSION["addproduct"]=null;
}
}
else 
{
	header("Location:login");
} ?>
