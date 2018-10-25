<?php
    include("database.php");
    session_start();
if (isset($_GET['page'])) {
    if ($_GET['page']=="src") {
    $sql="SELECT COUNT(*) FROM `mobile feature` WHERE `Model`LIKE '%".$_GET['find']."%' or `Brand` LIKE '%".$_GET['find']."%'";
	$js=getJSONFromDB($sql);
    $ar=json_decode($js,true);
    echo $ar[0]["COUNT(*)"];
    }
    else if ($_GET['page']=="model") {
    $sql="SELECT COUNT(*) FROM `mobile feature`,`brand` WHERE `mobile feature`.`Brand` =`brand`.`Brand Name` AND `brand`.`Id` =".$_GET["id"];
	$js=getJSONFromDB($sql);
    $ar=json_decode($js,true);
    echo $ar[0]["COUNT(*)"];
    }
    else if ($_GET['page']=="reg") {
    $sql="SELECT COUNT(`Email`) FROM `user` WHERE `Email`='".$_GET["email"]."'";
	$js=getJSONFromDB($sql);
    $ar=json_decode($js,true);
    echo $ar[0]["COUNT(`Email`)"];
    }
    elseif ($_GET['page']== "cart") {
        $dsql="DELETE FROM `chart` WHERE `C_ID` =".$_GET['id'];
        $rs=updateSQL($dsql);
        if ($rs>0) {
           $sql="SELECT `C_ID`, `Model`, `Quantity`, `Price`, `TPrice` FROM `chart` WHERE `Email` ='".$_SESSION['user']."'";
        $js=getJSONFromDB($sql);
        $ar=json_decode($js,true);
        if($ar==null)
        {
           echo "<tr><td><h2>No items were found.<h2></td></tr>";
        }
        elseif ($ar!=null) {
            echo "<tr><th>Model</th><th>Quantity</th><th>Price</th><th>Total Price</th></tr>";
            foreach ($ar as $p) {
                echo "<tr><td class ='vlu'>".$p['Model']."</td><td class ='vlu'>".$p['Quantity']."</td><td class ='vlu'>".$p['Price']."</td><td class ='vlu'>&#2547;".$p['TPrice']."</td><td class ='btn' ><span class='btnclose' title='Remove form Cart' onclick= 'Remove(".$p['C_ID'].")' >&times</span></td></tr>";
            }
             $total="select SUM(`TPrice`) as Total FROM `chart` WHERE `Email` ='".$_SESSION["user"]."'";
    $js1=getJSONFromDB($total);
    $ar1=json_decode($js1,true);
    echo "<tr><td></td><td></td><td class ='vlu' style='font-weight: bolder;font-size:17px;'>Total Price:</td><td class ='vlu' style='font-weight: bolder;font-size:17px;'>&#2547;".$ar1[0]['Total']."</td></tr>";
        } 
        }
    }
    elseif ($_GET['page']=="fullorder") {
        if($_GET['state']=="pending")
        {
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
        }
        else if($_GET['state']=="delever")
        {
             $sql="SELECT `O_ID`, `Product`, `Date`, `Stutas`, `Address`, `Payment Type`, `Price` FROM `order` WHERE `Stutas` ='deleverd'";
            $js=getJSONFromDB($sql);
            $ar=json_decode($js,true);
            if($ar==null)
            {
                echo "<tr><td><h2>No items were found.<h2></td></tr>";
            }
            elseif ($ar!=null) {
                 echo "<tr><th>Product [Quantity]</th><th>Date</th><th>Stutas</th><th>Address</th><th>Payment Type</th><th>Price</th></tr>";
                foreach ($ar as $p) {
                    echo "<tr><td class ='vlu'>".$p['Product']."</td><td class ='vlu lol'>".$p['Date']."</td><td class ='vlu lol'  >".$p['Stutas']."</td><td class ='vlu'  >".$p['Address']."</td><td class ='vlu'  >".$p['Payment Type']."</td><td class ='vlu'>&#2547;".$p['Price']."</td><td><button class='buton' onclick=change_stutas('".$p['O_ID']."')>Not Deleverd</button></td></tr>";
                }
            }
        }
        elseif($_GET['state']=="pendingchange")
        {
            $sq="UPDATE `order` SET `Stutas` = 'deleverd' WHERE `order`.`O_ID` = ".$_GET['id'];
            $rs=updateSQL($sq);
             if ($rs>0) {
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
             }
        }
        elseif($_GET['state']=="nopendingchange")
        {
            $sq="UPDATE `order` SET `Stutas` = 'not deleverd' WHERE `order`.`O_ID` = ".$_GET['id'];
            $rs=updateSQL($sq);
             if ($rs>0) {
                $sql="SELECT `O_ID`, `Product`, `Date`, `Stutas`, `Address`, `Payment Type`, `Price` FROM `order` WHERE `Stutas` ='deleverd'";
                $js=getJSONFromDB($sql);
                $ar=json_decode($js,true);
                if($ar==null)
                {
                    echo "<tr><td><h2>No items were found.<h2></td></tr>";
                }
                elseif ($ar!=null) {
                     echo "<tr><th>Product [Quantity]</th><th>Date</th><th>Stutas</th><th>Address</th><th>Payment Type</th><th>Price</th></tr>";
                    foreach ($ar as $p) {
                        echo "<tr><td class ='vlu'>".$p['Product']."</td><td class ='vlu lol'>".$p['Date']."</td><td class ='vlu lol'  >".$p['Stutas']."</td><td class ='vlu'  >".$p['Address']."</td><td class ='vlu'  >".$p['Payment Type']."</td><td class ='vlu'>&#2547;".$p['Price']."</td><td><button class='buton' onclick=change_stutas('".$p['O_ID']."')>Not Deleverd</button></td></tr>";
                    }
                }
             }
        }
    }
}
?>