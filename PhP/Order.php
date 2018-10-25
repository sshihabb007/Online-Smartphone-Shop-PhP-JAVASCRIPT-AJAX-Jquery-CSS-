<?php
session_start();
if (!isset($_SESSION["flag"]) && $_SESSION["flag"]!="Success") {
    header("Location:homepage");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
    <link rel="stylesheet" href="../CSS/Chart.css">
</head>
  <?php
include("Home2.php");
?>
<body>
    <center>
 <div class="Header" align="left">
 <h1>Your Orders</h1>
 </div>
 <div class ='cart'>
  <table class="table" id="ctable" >
    <?php
$sql="SELECT `Email`, `Product`, `Date`, `Stutas`, `Price`,`O_ID` FROM `order` WHERE `Email` = '".$_SESSION['user']."'";
$js=getJSONFromDB($sql);
$ar=json_decode($js,true);
if($ar==null)
{
    echo "<h2>No items were found.<h2>";
}
elseif ($ar!=null) {
    echo "<tr><th>Product [Quantity]</th><th>Date</th><th>Stutas</th><th>Price</th></tr>";
    foreach ($ar as $p) {
        $st=($p['Stutas'] == "not deleverd") ? "color:red" :  "color:green" ;
        echo "<tr><td class ='vlu'>".$p['Product']."</td><td class ='vlu'>".$p['Date']."</td><td class ='vlu' style='".$st."' >".$p['Stutas']."</td><td class ='vlu'>&#2547;".$p['Price']."</td><td><a href='Details?order=".md5($p['O_ID'])."' ><button class='buton'>Details</button></a></td></tr>";
    }
}
?>
  </table>
  <div class="btn">
</div>
 </div>
</center>
</body>
</html>
