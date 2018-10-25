<?php
include("database.php"); 
$count=0;
echo"<pre>";print_r($_POST);echo '</pre>';
if ($_POST['add']!=null) {
    $count++;
}
if ($_POST['PType']) {
    $count++;
}

if ($count==2) {
    session_start();
$sql="SELECT `Model`, `Quantity`, `TPrice` FROM `chart` WHERE `Email` = '".$_SESSION['user']."' ";
$js=getJSONFromDB($sql);
$ar=json_decode($js,true);
$product=null;
foreach ($ar as $p) {
    $product.=$p['Model']." [".$p['Quantity']."] ";
}
$sql1="SELECT SUM(`TPrice`) AS total FROM `chart` WHERE `Email` = '".$_SESSION['user']."' ";
$js1=getJSONFromDB($sql1);
$ar1=json_decode($js1,true);
$insertsql="INSERT INTO `order`(`O_ID`, `Email`, `Product`, `Date`, `Stutas`, `Address`, `Payment Type`, `Price`) VALUES ('null','".$_SESSION['user']."','".$product."','".date("y-m-d")."','not deleverd','".$_POST['add']."','".$_POST['PType']."','".$ar1[0]['total']."')";
$rs=updateSQL($insertsql);
if ($rs>0) {
    $sqlll="SELECT `O_ID` FROM `order` WHERE `Email`='".$_SESSION['user']."' AND `Product`='".$product."' and `Date` ='".date("y-m-d")."' AND `Address` ='".$_POST['add']."' AND `Payment Type`='".$_POST['PType']."' AND `Price`= '".$ar1[0]['total']."' ORDER BY `O_ID` ASC";
    $js222=getJSONFromDB($sqlll);
    $ar222=json_decode($js222,true);
    $sql2="SELECT `Model`, `M_ID`, `Quantity`, `Price`, `TPrice` FROM `chart` WHERE `Email` = '".$_SESSION['user']."' ";
    $js2=getJSONFromDB($sql2);
    $ar2=json_decode($js2,true);
    $sz=sizeof($ar2)-1;
    foreach ($ar2 as $b) {
        $s="INSERT INTO `Order Details`(`Id`, `O_ID`, `Model`, `Quantity`, `Price`, `Tprice`) VALUES ('null','".$ar222[$sz]['O_ID']."','".$b['Model']."','".$b['Quantity']."','".$b['Price']."','".$b['TPrice']."')";
        updateSQL($s);
        $is="SELECT `Quantity`,`Sold Quantity` FROM `mobile feature` WHERE `Id` = ".$b['M_ID'];
        $js3=getJSONFromDB($is);
        $ar3=json_decode($js3,true);
        $sq=$ar3[0]['Sold Quantity']+$b['Quantity'];
        $q=$ar3[0]['Quantity']-$b['Quantity'];
        $ss="UPDATE `mobile feature` SET `Quantity`='".$q."',`Sold Quantity`='".$sq."' WHERE `Id` =".$b['M_ID'];
        updateSQL($ss);
    }
    $deletsql="DELETE FROM `chart` WHERE `Email` = '".$_SESSION['user']."'";
    $rs1=updateSQL($deletsql);
    $_SESSION['payment stutas']="success";
    header("Location:homepage");
}
else {
    $_SESSION['payment stutas']="Fail";
    header("Location:homepage");
}
}
 ?>