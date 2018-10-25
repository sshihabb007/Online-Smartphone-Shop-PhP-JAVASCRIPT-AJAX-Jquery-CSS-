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
    <title>Order Details</title>
    <link rel="stylesheet" href="../CSS/Chart.css">
    <script src="../JavaScript/Cart.js"></script>
</head>
  <?php
include("Home2.php");
?>
<body>
    <center>
 <div class="Header" align="left">
 <h1>Order Details</h1>
 </div>
 <div class ='cart'>
  <table class="table" id="ctable" >
    <?php
    $sql="SELECT `Id`, `O_ID`, `Model`, `Quantity`, `Price`, `Tprice` FROM `order details`";
$js=getJSONFromDB($sql);
$ar=json_decode($js,true);
if($ar==null)
{
    echo "<h2>No items were found.<h2>";
}
elseif ($ar!=null) {
    $tprice=null;
    echo "<tr><th>Model</th><th>Quantity</th><th>Price</th><th>Total Price</th></tr>";
   foreach ($ar as $p) {
       if($_GET['order'] == md5($p['O_ID']))
       {
        echo "<tr><td class ='vlu'>".$p['Model']."</td><td class ='vlu'>".$p['Quantity']."</td><td class ='vlu'>".$p['Price']."</td><td class ='vlu'>&#2547;".$p['Tprice']."</td></tr>";
    $total="SELECT sum(`Tprice`) FROM `order details` WHERE `O_ID` =".$p['O_ID'];
    $js1=getJSONFromDB($total);
    $ar2=json_decode($js1,true);
    $tprice=$ar2[0]['sum(`Tprice`)'];
       }
   }
    echo "<tr><td></td><td></td><td class ='vlu' style='font-weight: bolder;font-size:17px;'>Total Price:</td><td class ='vlu' style='font-weight: bolder;font-size:17px;'>&#2547;".$ar2[0]['sum(`Tprice`)']."</td></tr>";
}
?>
  </table>
  <div class="btn">
    <table class="bt" align="right" >
<tr>
<td class ='bttd'><a href="Order"><button class="butn butn1">Back</button></a></td>
</tr>
</div>
 </div>
</center>
</body>
</html>