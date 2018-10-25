<!DOCTYPE html>
<html>
<head>
	<title>none</title>
</head>
<body>
<form action="none.php" method="post">
	<input type="text" name="con" style="width: 200px;">
	<input type="submit" name="sub" value="convert">

	<?php 
if(!empty($_POST['con']))
{
	echo md5($_POST['con']);
echo "<pre>";print_r($_POST);echo "</pre>";
}

 ?>
</form>
</body>
</html>
