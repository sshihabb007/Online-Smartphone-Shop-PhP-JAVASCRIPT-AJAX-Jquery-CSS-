<?php
session_start();
if(!isset($_SESSION["flag"]) || $_SESSION["flag"]==null)
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration </title>
	<link rel="stylesheet" type="text/css" href="../CSS/Reg.css"/>
	<script src="../JavaScript/Reg.js"></script>
</head>
<body onload = <?php if(isset($_SESSION['reg stutas'])) { if($_SESSION['reg stutas']=="dberror"){echo "dberror()";$_SESSION['reg stutas']=null;}elseif ($_SESSION['reg stutas']=="not available") {echo "notavailable()";$_SESSION['reg stutas']=null;} elseif ($_SESSION['reg stutas']=="not verified") {echo "notverified";$_SESSION['reg stutas']=null;}}?> >
	<?php
include("home2.php");
if (isset($_SESSION['reg stutas']) && $_SESSION['reg stutas']="Success") {
	echo "<script>alert('Registration Successfull Go to Login Page for Login')</script>";
}
	?>
	<script>
	var p=new Date();
    	$(document).ready(function(){
					$('#dt').DateTimePicker({
					dateFormat: "yyyy-MM-dd",
					maxDate: p.getFullYear()+"-"+p.getMonth()+"-"+p.getDate(),
					minDate: "1980-01-01"
				});
    	});
    </script>
<div class="reg-box">
	<h1>Registration Form</h1>
	<form autocomplete="off" action="regverify" method="post" name="Pro">
		<table align="center">
			<tr>
				<td class="align">
					<span>First Name:</span>
				</td>
				<td></td>
				<td><input type="text" name="fname" placeholder="First Name" onkeyup="fastname()"> </td>
				<td>
					<span class="spn" id="fna">(Min: 2)</span>
					</td>
			</tr>
			<tr>
				<td class="align">
					<span>Last Name:</span>
				</td>
				<td>&nbsp&nbsp</td>
				<td><input type="text" name="lname" placeholder="Last Name" onkeyup="lastname()"> </td>
				<td>
					<span class="spn" id="lna">(Min: 2)</span>
					</td>
			</tr>
			<tr>
				<td class="align">
					<span>Email:</span>
				</td>
				<td>&nbsp&nbsp</td>
				<td><input type="text" name="Email" placeholder="Email" onkeyup="chkEmail()"> </td>
				<td>
					<span class="spn" id="ema">(invalied)</span>
					</td>
			</tr>
			<tr>
				<td class="align">
					<span>Gender:</span>
				</td>
				
				<td colspan="2"><input type="radio" name="Gender" value="Male" class="rd" onchange="g()"/>Male
					<input type="radio" name="Gender" value="Female" class="rd"  onchange="g()"/>Female </td>
					<td>
					<span class="spn" id="gen">(invalied)</span>
					</td>
			</tr>
			<tr>
				<td class="align">
					<span>DOB:</span>
				</td>
				<td>&nbsp&nbsp</td>
				<td><input type="text" name="DOB" id="db" data-field="date" placeholder="yyyy-MM-dd" onchange="datecheck()" readonly></td>
				<div id="dt"></div>
				<td>
					<span class="spn" id="dob">(invalied)</span>
					</td>
			</tr>
			<tr>
				<td class="align">
					<span>Password:</span>
				</td>
				<td>&nbsp&nbsp</td>
				<td>
					<input type="Password" name="Password" placeholder="Password" onkeyup="pass()">
				</td>
				<td>
					<span class="spn" id="cps">(range:8-15)</span>
					</td>
			</tr>
			<tr>
				<td class="align">
					<span>Confirm Password:</span>
				</td>
				<td>&nbsp&nbsp</td>
				<td>
					<input type="Password" name="CPassword" placeholder="Confirm Password" onkeyup="cpass()">
				</td>
				<td>
					<span class="spn" id="cnps">(range:8-15)</span>
					</td>
			</tr>
			<tr>
				<td class="align">
					<span>Phone:</span>
				</td>
				<td>&nbsp&nbsp</td>
				<td><input  type="tel" name="phone" placeholder="Phone"  maxlength="11" onkeyup="phne()"> </td>
				<td>
					<span class="spn" id="pn">(range:11-11)</span>
					</td>
			</tr>
			</tr><tr></tr><tr></tr><tr><td colspan="3" style="text-align: center;"> <?php if(isset($_GET['error'])) {echo "<span style='color:red'> You must fullfill all condition </span>";} ?></td></tr><tr></tr><tr></tr>
			<tr>
				<td></td>
				<td>&nbsp&nbsp</td>
				<td> <input type="submit" name="submit" value="Submit" class="btn" onclick="return update()" ></td>
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