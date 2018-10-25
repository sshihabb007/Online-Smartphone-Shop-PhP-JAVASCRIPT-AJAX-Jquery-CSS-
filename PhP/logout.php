<?php
include('database.php');
session_start();
$sql="DELETE FROM `chart` WHERE `Email` = '".$_SESSION['user']."'";
updateSQL($sql);
unset($_COOKIE['permission']);
session_destroy();
header("Location:homepage");
?>