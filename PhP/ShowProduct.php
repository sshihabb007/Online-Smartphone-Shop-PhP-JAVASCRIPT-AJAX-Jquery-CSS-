<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Display Specification</title>
<link rel="stylesheet" type="text/css" href="../CSS/DisplayProduct.css"/>
<script src="../JavaScript/Display.js"></script>
</head>
<body>
<?php
include("Home2.php");
$c=0;
$s="select * from `mobile feature` where Id=".$_GET['modelId'];
$data=getDataFromDB($s);
$q=$data[$c]["Quantity"];
?>
<div>
   <h1 style="text-align: center;"><?php echo $data[$c]["Brand"]." ".$data[$c]["Model"]; ?> <br/></h1>

<?php
if($q>4)
    {
    echo "<h3 style='text-align: center; color:Green;'>(Available)</h3>";
    }
    else
    echo "<h3 style='text-align: center;color:red;'>(Not Available)</h3>";    

?> 

</div>




<div class="vw">

<h2>Specifications</h2>

<table class="tabl">

  <tr  style="border:2px solid #BDBDBD; ">
    <th class="trtd" style="color: #B23F33;"> Network</th>
    <th class="trtd">Technology</th> 
    <th class="trtd trtd1">	<?php echo $data[$c]["Technology"]; ?> </th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th rowspan="4" class="trtd" style="color: #B23F33;" > Body</th>
    <th  class="trtd">Dimensions</th> 
    <th class="trtd trtd1">	<?php echo $data[$c]["Dimensions"]; ?> </th>
    </tr>

    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">Weight</th> 
    <th class="trtd trtd1"> <?php echo $data[$c]["Weight"]; ?> </th>
    </tr>

    <tr style="border:2px solid #BDBDBD; ">
    <th  class="trtd" >Build </th>
    <th class="trtd trtd1"> <?php echo $data[$c]["Body Build"]; ?></th> 
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd" > SIM</th>
    <th class="trtd trtd1"> <?php echo $data[$c]["Sim"]; ?></th> 
    </tr>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd" rowspan="5" style="border:2px solid #BDBDBD; color: #B23F33;">Display</th>
    <th class="trtd">Type</th> 
    <th class="trtd trtd1"> <?php echo $data[$c]["Display Type"]; ?></th>
    </tr>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">Size</th> 
    <th class="trtd trtd1"> <?php echo $data[$c]["Display Size"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">Resulation</th> 
    <th class="trtd trtd1"><?php echo $data[$c]["Video Quality"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">Multitouch</th> 
    <th class="trtd trtd1"><?php echo $data[$c]["Multitouch"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">Protection</th> 
    <th class="trtd trtd1"> <?php echo $data[$c]["Display Protection"]; ?></th>
    </tr>

    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd" rowspan="4" style="border:2px solid #BDBDBD; color: #B23F33;">Platform</th>
    <th class="trtd">OS</th> 
    <th class="trtd trtd1"> <?php echo $data[$c]["OS"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">Chipset</th> 
    <th class="trtd trtd1"> <?php echo $data[$c]["Chipset"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">CPU</th> 
    <th class="trtd trtd1"> <?php echo $data[$c]["CPU"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">GPU</th> 
    <th class="trtd trtd1"> <?php echo $data[$c]["GPU"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd" rowspan="2" style="border:2px solid #BDBDBD; color: #B23F33;">Memory</th>
    <th class="trtd">Card Slot</th> 
    <th class="trtd trtd1"><?php echo $data[$c]["Card Slort"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">Internal</th> 
    <th class="trtd trtd1"><?php echo $data[$c]["Internal Memory"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd" rowspan="3" style="color: #B23F33; border:2px solid #BDBDBD;">Camera</th>
    <th class="trtd">Primary</th> 
    <th class="trtd trtd1"><?php echo $data[$c]["Primary Camera"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">Features</th> 
    <th class="trtd trtd1"><?php echo $data[$c]["Camera Feature"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">Secondary</th> 
    <th class="trtd trtd1"><?php echo $data[$c]["Secondary Camera"]; ?></th>
    </tr>

    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd" rowspan="2" style="color: #B23F33;border:2px solid #BDBDBD;">Sound</th>
    <th class="trtd">Alert Types</th> 
    <th class="trtd trtd1"><?php echo $data[$c]["Alert"]; ?></th>
    </tr>
    <tr style="border:2px solid #BDBDBD; ">
    <th class="trtd">Loud Speaker</th> 
    <th class="trtd trtd1"><?php echo $data[$c]["Loudspeaker"]; ?></th>
    </tr>
  
</table>
</div>
 <div class="header">
<noscript>
<style>
.script
{
    display:none;
}
</style></noscript>
<?php
echo "<center> <img src='".$data[$c]['Image']."' alt='Flowers in Chania'> </center>";
$user = (isset($_SESSION["user"]) && $_SESSION['user']!=null) ? $_SESSION['user'] : null ;
if($q>4)
    {
    echo "<h3 style='text-align: center; color:Green;'><select name='Quantity' class='btn script' id='qt'><option value='0'>Select Quantity</option>   </h3>";
    echo "<option value='1'>1</option>";
    echo "<option value='2'>2</option>";
    echo "<option value='3'>3</option>";
    echo "<option value='4'>4</option>";
    echo "<input type='hidden' id='email' name='mailid' value='".$user."'>";
    echo  "<input type='hidden' id='idd' name='id' value='".$data[$c]["Id"]."'>";
    echo  "<input type='hidden' id='price' name='price' value='".$data[$c]["Price"]."'>";
    echo "<center> <input type='submit' class='btn script' name='addcart' value='ADD TO CART' onclick='return showHint()'> </center>";
    }
?>
<noscript><h3>Javascript is disabled in your browser <br> Please enable it and refresh again to buy</h3></noscript>
 </div>
</body>
</html>