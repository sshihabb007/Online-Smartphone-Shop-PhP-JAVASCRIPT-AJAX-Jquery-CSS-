<?php
session_start();
if (isset($_SESSION['user']) && $_SESSION['user']!=null) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="../CSS/payment.css"/>

	<script type="text/javascript">
	function chkinput(){
		var a=document.confirm.add.value.length;
		var b=document.confirm.PType.value.length;
		flag=false;
		if(a==0){
			alert("Address should not be empty!!!");
			flag=false;
		}
		else if (b==0){
			alert("Select Payment Type");
			flag=false;
		}else{
			flag=true;
		}
		return flag;
	}
	</script>

</head>
<body>
<?php include('Home2.php');?>
<div class="reg-box">
	<h1>Payment Form</h1>
	<form autocomplete="off" action="PaymentVerify" method="post" name="confirm">
		<table align="center">
			<tr>
				<td class="align">
					<span>Address:</span>
				</td>
				<td><textarea type="text" name="add" placeholder="Address" class ='address' cols="30" rows="5"></textarea></td>
					<td><span id="sidemsg"></span></td>
			</tr>
			<td><span>Payment Type:</span></td>
			<td><select class="pmt" name="PType" >  <option value="">Payment Type</option> <option value="Cash on Delevery">Cash on Delevery</option> </td>


			</tr>
			</tr><tr></tr><tr></tr><tr><td colspan="3" style="text-align: center;"> 
				<?php 
				if(isset($_GET['error'])) {
					echo "<span style='color:red'> ".$_GET['error']." </span>";
				}
					?> </td></tr><tr></tr><tr></tr>
			<tr>
				<td>&nbsp&nbsp</td>
				<td> <input type="submit" name="submit" value="Confirm" class="btn" onclick="return chkinput()" ></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>
<?php
}
else {
	header("Location:Login");
}
?>