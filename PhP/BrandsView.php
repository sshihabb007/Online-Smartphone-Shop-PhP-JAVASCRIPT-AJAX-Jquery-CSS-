<!DOCTYPE html>
<html>
<head>
	<title>Brands</title>
	<link rel="stylesheet" type="text/css" href="../CSS/BrandsView.css"/>
</head>
<body>
<?php 
$sq="select * from brand";
  $data=getDataFromDB($sq);
 $z=$data;
 //print_r($data);

 ?>
	<div class="menusecc templatee clearr">
	
	 <h2>Brands</h2>
	<?php 
		foreach ($data as $k => $val){
		echo " <ul><li><a href='model?bid=".$val['Id']."'>".$val['Brand Name']."</a></li> </ul> ";
	}
	 ?>	
	
	</div>


</body>
</html>