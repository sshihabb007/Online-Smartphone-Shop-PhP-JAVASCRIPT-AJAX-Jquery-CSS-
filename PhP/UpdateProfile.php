<?php 
session_start();
if (isset($_SESSION["flag"]) && $_SESSION["flag"]=="Success") {
 ?>
 
<!DOCTYPE html>
<html>
	<head>
	<title>Update Profile </title>
	<link rel="stylesheet" type="text/css" href="../CSS/pro.css"/>
	<script type="text/javascript" src="../JavaScript/profile.js"></script>
	<head/>

	<body onload="email();">
		<?php
if (isset($_SESSION['profile'])&&$_SESSION['profile']=="Success") {
	echo "<script>alert('Profile Updated Successfully')</script>";
	$_SESSION['profile']=null;
}
elseif (isset($_SESSION['profile'])&&$_SESSION['profile']=="Password") {
	echo "<script>alert('Current Password Dose not Match')</script>";
	$_SESSION['profile']=null;
}
if (isset($_SESSION['profile'])&&$_SESSION['profile']=="error") {
	echo "<script>alert('Profile Can not Updated')</script>";
	$_SESSION['profile']=null;
}
include("home2.php");
$sql = "SELECT `First Name`,`Last Name`, `Email`, `Gender`, `DOB`, `Phone` FROM `user` WHERE `Email`='".$_SESSION['user']."'";
$js=getJSONFromDB($sql);
$p=json_decode($js,true);
$Profile=$p[0];
  ?>
  <script>
	var p1=new Date();
    	$(document).ready(function(){
					$('#dtt').DateTimePicker({
					dateFormat: "yyyy-MM-dd",
					maxDate: p1.getFullYear()+"-"+p1.getMonth()+"-"+p1.getDate(),
					minDate: "1980-01-01"
				});
    	});
    </script>
	<div class ="profile-box">
		<h1>Update Profile </h1>
		<form name="Pro" action="verifyprofile"  method="post">
			<table align="center">
				<tr>
					<td class="align">
					<span>Email :</span>
					</td>
					<td></td>
					<td>
						<input type ="text" name ="Email" placeholder =" Email " value="<?php echo $_SESSION['user']; ?>">
					</td>
				</tr>
				<tr>
					<td class="align">
					<span>First Name :</span>
					</td>
					<td></td>
					<td>
						<input type ="text" name ="fname" placeholder =" First Name " onkeyup="fastname()" value="<?php if(isset($Profile['First Name'])) echo $Profile['First Name']; ?>">
					</td>
					<td>
					<span class="spn" id="fna">(range: 2-8)</span>
					</td>
				</tr>

				<tr>
					<td class="align">
					<span>Last Name :</span>
					</td>
					<td></td>
					<td>
					<input type ="text" name ="lname" placeholder =" Last Name " onkeyup="lastname()" value="<?php if(isset($Profile['Last Name'])) echo $Profile['Last Name']; ?>">
					</td>
					<td>
					<span class="spn" id="lna">(range: 2-8)</span>
					</td>
				</tr>

				<tr>
					<td class="align">
					<span>Gender :</span>
					</td>
			        <td colspan="2">
					<input type ="radio" name ="gender" onchange="g()" value ="Male" <?php if(isset($Profile['Gender']) && $Profile['Gender']=="Male") echo "checked";?> class="rd"/>Male 
					<input type ="radio" name ="gender" onchange="g()" value ="Female" <?php if(isset($Profile['Gender']) && $Profile['Gender']=="Female") echo "checked";?> class="rd"/>Female 
					</td>
				</tr>
				<tr>
					<td class="align">
					<span>DOB :</span>
					</td>
					<td>&nbsp&nbsp</td>
					<td><input type="text" name="DOB" id="db" data-field="date" placeholder="yyyy-MM-dd" onchange="datecheck()" value="<?php if(isset($Profile['DOB'])) echo $Profile['DOB']; ?>" readonly></td>
				<div id="dtt"></div>
				<td>
					<span class="spn" id="dob">(invalied)</span>
					</td>
				
			    </tr>
			    <tr>
					<td class="align">
						<span>Current Password:</span>
					</td>
					<td>&nbsp&nbsp</td>
					<td>
						<input type="Password" name="CPassword" placeholder="Current Password" onkeyup="cpass()">
					</td>
					<td>
					<span class="spn" id="cps">(range: 2-8)</span>
					</td>
				</tr>
				<tr>
					<td class="align">
						<span>New Password:</span>
					</td>
					<td>&nbsp&nbsp</td>
					<td>
						<input type="Password" name="NPassword" placeholder="New Password" onkeyup="npass()">
					</td>
					<td>
					<span class="spn" id="nps">(range: 8-15)</span>
					</td>
				</tr>
				<tr>
					<td class="align">
						<span>Confirm New Password:</span>
					</td>
					<td>&nbsp&nbsp</td>
					<td>
						<input type="Password" name="CNPassword" placeholder="Confirm New Password" onkeyup="cnpass()">
					</td>
					<td>
					<span class="spn" id="cnps">(range: 2-8)</span>
					</td>
				</tr>
				<tr>
					<td class="align">
						<span>Phone:</span>
					</td>
					<td>&nbsp&nbsp</td>
					<td><input type="text" name="phone" onkeyup="phne()" placeholder="Phone" /*pattern="\d*"*/  value="<?php if(isset($Profile['Phone'])) echo $Profile['Phone']; ?>"> </td>
					<td>
					<span class="spn" id="pn">(range:11-11)</span>
					</td>
				</tr>
			
				<tr>
					<td></td>
					<td>&nbsp&nbsp</td>
					<td> <input type="submit" name="Update" onclick="return update()" value="Update" class="btn"></td>
				</tr>
			</table>
		</form>
		</div>
	</body>
</html>
<?php 
}
else 
{
	header("Location:login");
} ?>			
			

