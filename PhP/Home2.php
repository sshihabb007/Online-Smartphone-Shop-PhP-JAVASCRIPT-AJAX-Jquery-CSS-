<?php
require("database.php");
if (session_status() == PHP_SESSION_NONE) {
	session_start();
	if (!isset($_COOKIE['permission'])) {
		if (isset($_SESSION['user'])) {
			$sql="DELETE FROM `chart` WHERE `Email` = '".$_SESSION['user']."'";
		updateSQL($sql);
		session_destroy();
		}
	}
}
?>
<!DOCTYPE html>
<html>
<html>
<head>
	<title>Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/hp.css">
	<link rel="stylesheet" type="text/css" href="../CSS/DateTimePicker.css">
    <script type="text/javascript" src="../JavaScript/jquery.js"></script>
    <script type="text/javascript" src="../JavaScript/DateTimePicker.js"></script>
    <script type="text/javascript" src="../JavaScript/DateTimePicker-i18n.js"></script>
</head>
<body class="body1">
<script src="../JavaScript/Home.js"></script>
<div>
<form class="headersec template frm " action ="SearchResult" method="post">
	<table  align="center">
		<tr>
			<td> <span><h3>Smart Phone shop </h3></span></td>
			<td><input type="search" name="find" class="src" id="sc" onkeyup="Src()">  </td>
			<td> <input type="submit" class="hbtn" name="search" value="Search" onclick="return Valied()"></td>
			<?php
			if (isset($_SESSION['user']) && $_SESSION['user']!=null) {
				echo '<td> <ul> <li><a href="Cart">Cart</a></li></ul>  </td>';
				echo '<td> <ul> <li><a href="Order">Order History</a></li></ul>  </td>';
				if($_SESSION['type']=="admin")
				{
					echo '<td> <ul> <li><a href="FullOrder">Order By User</a></li></ul>  </td>';
				}
			}
			else {
				echo '<td> <ul> <li><a href="login">Sign In</a></li></ul>  </td>';
				echo '<td> <ul> <li><a  href="Reg">Sign Up</a></li></ul>  </td>';
			}
			?>
		</tr>
	</table>
</form>
</div>
	<div class="nav"><marquee>Welcome to our Website</marquee></div>
	<div class="menusec template clear">
		<tr><td> <ul>
		<td> <li><a href="homepage">Home</a></li> </td>
		<?php if(isset($_SESSION['type']) && $_SESSION['type']=="admin"){
		echo "<td> <li><a href='Addproduct'>Add Product</a></li></td>";
		echo "<td> <li><a href='Updateproduct'>Update Product</a></li></td>";
	}
		?>
		<td> <li><a href="AboutUs">About</a></li></td>
		<td> <li><a href="Support">Support</a></li></td
		<?php if(isset($_SESSION['type']) && ($_SESSION['type']=="admin"|| $_SESSION['type']=="user")){
		echo "<td> <li><a href='UpdateProfile'>Update Profile</a></li></td>";
		echo "<td> <li><a href='logout'>Logout</a></li></td>";
	}
		?>
		</ul></td></tr>
	</div>

</body>
</html>
