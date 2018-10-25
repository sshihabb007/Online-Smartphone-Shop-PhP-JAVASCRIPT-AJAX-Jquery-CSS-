<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="../CSS/UpdateProduct.css">
    <title>Test</title>
</head>
<body>
<form action="test.php" method="post">
<textarea name="area" id="eee" cols="30" rows="10"></textarea><br>
<input type="submit" value="Submit" name='sub'>
</form>
<?php
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
?>
<?php 
session_start();
//     echo "<pre>";print_r($_POST);echo "</pre>";
// $iptrack=get_client_ip();
// echo "Your Ip Is".$iptrack.'<br>';
// echo "<pre>";print_r($_SERVER);echo "</pre>";
$arr0 = array('lol' =>4 ,'qqq' =>7 ,'frr' =>4 );
$arr1 = array('lol' =>4 ,'qqq' =>7 ,'frr' =>4 );
$arr2 = array('lol' =>4 ,'qqq' =>7 ,'frr' =>4 );
$arr3 = array('lol' =>4 ,'qqq' =>7 ,'frr' =>4 );
$arr4 = array('lol' =>4 ,'qqq' =>7 ,'frr' =>4 );
$arr5 = array('lol' =>4 ,'qqq' =>7 ,'frr' =>4 );
$arr[]=$arr0;
// $arr[]=$arr1;
// $arr[]=$arr2;
// $arr[]=$arr3;
// $arr[]=$arr4;
// $arr[]=$arr5;
// $sz=sizeof($arr)-1;
// echo $sz."<br>";
echo "<pre>";print_r($_SESSION);echo "</pre>";

?>
<?php
include("database.php");
// $is="SELECT `Quantity` FROM `mobile feature` WHERE `Id` = 4";
//         $js3=getJSONFromDB($is);
//         $ar3=json_decode($js3,true);
//         $q=$ar3[0]['Quantity'];
//         echo $q;
// $sql="SELECT `Model`, `Quantity`, `TPrice` FROM `chart` WHERE `Email` = '".$_SESSION['user']."' ";
// $js=getJSONFromDB($sql);
// $ar=json_decode($js,true);
// $product=null;
// foreach ($ar as $p) {
//     $product.=$p['Model']." [".$p['Quantity']."] ";
// }
// $sqlll="SELECT `O_ID` FROM `order` WHERE `Product` = '".$product."'";
//     $js222=getJSONFromDB($sqlll);
//     $ar222=json_decode($js222,true);
//     echo $ar222[0]['O_ID'];
?>
</body>
</html>