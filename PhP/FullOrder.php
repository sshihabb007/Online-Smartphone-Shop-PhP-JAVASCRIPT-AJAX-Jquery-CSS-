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
    <title>Order By All User</title>
    <link rel="stylesheet" href="../CSS/Fullorder.css">
    <script src="../JavaScript/fullorder.js"></script>
</head>
  <?php
include("Home2.php");
?>
<body>
    <center>
 <div class="Header" align="left">
 <h1>All Orders</h1>
 </div>
 <div class ='cart'>
 <?php
echo "<span class='span' onclick='show_pending()'>Pending Order</span>"; 
echo "<span class='span margin' onclick='show_delevered()'>Delevered Order</span>";
?>
  <table class="table" id="otable" >
    <?php
$sql="SELECT `O_ID`, `Product`, `Date`, `Stutas`, `Address`, `Payment Type`, `Price` FROM `order` WHERE `Stutas` ='not deleverd'";
$js=getJSONFromDB($sql);
$ar=json_decode($js,true);
if($ar==null)
{
    echo "<tr><td><h2>No items were found.<h2></td></tr>";
}
elseif ($ar!=null) {
    echo "<tr><th>Product [Quantity]</th><th>Date</th><th>Stutas</th><th>Address</th><th>Payment Type</th><th>Price</th></tr>";
    foreach ($ar as $p) {
        echo "<tr><td class ='vlu'>".$p['Product']."</td><td class ='vlu lol'>".$p['Date']."</td><td class ='vlu lol'  >".$p['Stutas']."</td><td class ='vlu'  >".$p['Address']."</td><td class ='vlu'  >".$p['Payment Type']."</td><td class ='vlu'>&#2547;".$p['Price']."</td><td><button class='buton' onclick=changestutas('".$p['O_ID']."')>Deleverd</button></td></tr>";
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