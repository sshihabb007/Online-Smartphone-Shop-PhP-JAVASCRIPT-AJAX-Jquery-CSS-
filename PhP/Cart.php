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
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="../CSS/Chart.css">
    <script src="../JavaScript/Cart.js"></script>
</head>
  <?php
include("Home2.php");
?>
<body>
    <center>
 <div class="Header" align="left">
 <h1>Your Cart</h1>
 </div>
 <div class ='cart'>
  <table class="table" id="ctable" >
    <?php
$sql="SELECT `C_ID`, `Model`, `Quantity`, `Price`, `TPrice` FROM `chart` WHERE `Email` ='".$_SESSION['user']."'";
$js=getJSONFromDB($sql);
$ar=json_decode($js,true);
if($ar==null)
{
    echo "<h2>No items were found.<h2>";
}
elseif ($ar!=null) {
    echo "<tr><th>Model</th><th>Quantity</th><th>Price</th><th>Total Price</th></tr>";
    foreach ($ar as $p) {
        echo "<tr><td class ='vlu'>".$p['Model']."</td><td class ='vlu'>".$p['Quantity']."</td><td class ='vlu'>".$p['Price']."</td><td class ='vlu'>&#2547;".$p['TPrice']."</td><td class ='btn' ><span class='btnclose' title='Remove form Cart' onclick='Remove(".$p['C_ID'].")' >&times</span></td></tr>";
    }
    $total="select SUM(`TPrice`) as Total FROM `chart` WHERE `Email` ='".$_SESSION["user"]."'";
    $js1=getJSONFromDB($total);
    $ar1=json_decode($js1,true);
    echo "<tr><td></td><td></td><td class ='vlu' style='font-weight: bolder;font-size:17px;'>Total Price:</td><td class ='vlu' style='font-weight: bolder;font-size:17px;'>&#2547;".$ar1[0]['Total']."</td></tr>";
}
?>
  </table>
  <div class="btn">
<table class="bt" align="center" >
<tr>
<td class ='bttd'><a href="homepage"><button class="butn butn1">Back to Shopping</button></a></td>
<td class ='bttd'><a href="Payment"><button class="butn <?php if($ar!= null){echo "butn1";}else{;}?>" id ="ct"<?php if($ar!= null){;}else{echo 'disabled';}?>>Check Out&nbsp&nbsp&nbsp&nbsp&nbsp&#x276F</button></a></td>
</tr>
</table>
</div>
 </div>
</center>
</body>
</html>