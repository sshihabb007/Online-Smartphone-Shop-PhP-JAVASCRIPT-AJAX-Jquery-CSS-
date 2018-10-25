<?php
session_start();
$bnd = $_POST['BrandName'];
require("database.php");
$sql="INSERT INTO `brand`(`Brand Name`) VALUES ('".$bnd."')";
echo $sql;
$result=updateSQL($sql);
if($result>0)
{
    header("Location:Addproduct");
}
else
{
    $_SESSION['insertbrand']='error';
    header("Location:Addproduct");
}

?>