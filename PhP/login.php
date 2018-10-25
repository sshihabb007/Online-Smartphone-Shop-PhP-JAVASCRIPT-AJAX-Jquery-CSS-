<?php
session_start();
if(!isset($_SESSION["flag"]))
{
	$_SESSION["flag"]=null;
}
if($_SESSION["flag"]==null)
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="../CSS/Style.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="../JavaScript/login.js"></script>
</head>
<body>
	<?php
include("home2.php")
	?>
<div class="reg-box">
	<h1>Login Form</h1>
	<form autocomplete="off" action="verify" method="post" name="login">
		<table align="center">
			<tr>
				<td class="align">
					<span>Email:</span>
				</td>
				<td>&nbsp&nbsp</td>
				<td><input type="text" name="Email" placeholder="Email" onkeyup="chkemail()"> </td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td class="align">
					<span>Password:</span>
				</td>
				<td>&nbsp&nbsp</td>
				<td>
					<input type="Password" name="Password" placeholder="Password" onkeyup="chkepass()" style="background-color: white">
				</td>
			</tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
			<tr>
				<td></td>
				<td>&nbsp&nbsp</td>
				<td> <input type="submit" name="submit" value="Submit" onclick="return logvf()" class="btn"></td>
			</tr>
			</tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
			<tr>
				
				<td colspan="3"> 
					<?php if(isset($_GET['error'])) 
					echo "<span Style='color:red'>Email or Password dosenot match</span>";
					?>
					 </td>
			</tr>
			<tr>
				
				<td colspan="4"> 
					<a href="Reg" style="text-align: right;color: white;">Not registered yet?</a>
					 </td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>
<?php
}
elseif ($_SESSION["flag"]=="Success") {
	header("Location:homepage");
}
?>