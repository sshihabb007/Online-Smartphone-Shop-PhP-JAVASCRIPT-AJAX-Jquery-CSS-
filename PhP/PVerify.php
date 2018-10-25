<?php
include("database.php");
session_start();
   $u= (isset($_SESSION["user"])) ? $_SESSION["user"] : 'null' ;
   if ($u==null) {
	   echo "you Have  to Login";
   }
   $dt = date("d-m-y");
$id= $_REQUEST["id"];
$p= $_REQUEST["price"];
$q= $_REQUEST["qty"];
$tp=$q*$p;
$ck=0;
$c=0;
$sq="select * from `mobile feature` where Id=".$id;
$data1=getDataFromDB($sq);
$m= $data1[$c]["Model"];
$s="select * from `chart`";
$data=getDataFromDB($s);
foreach ($data as $k => $val) {
	if($val["Email"]==$u){
		if($val["Model"]==$m){
			if($q+$val["Quantity"]<5){
					$x= $q+$val["Quantity"];
		            $s2="update `chart` SET Quantity=".$x." where C_ID=".$val['C_ID']." ";
					$rs1=updateSQL($s2);
					if ($rs1>0) {
						echo "Added Into Cart";
						$ck=1;
						break;
					}
					break;
			}else{
				echo "You Already added ".$val["Quantity"]." items! you cannt Order More than 4 Items";
				$ck=1;
				break;
			}
		}
	}
	
}

if($ck==0){
	$sq3="insert into `chart` (Email,Model,M_ID,Quantity,Price,TPrice,Date) VALUES('".$u."','".$data1[$c]["Model"]."','".$data1[$c]["Id"]."','".$q."','".$p."','".$tp."','".$dt."') ";
		$rs=updateSQL($sq3);
		if ($rs>0) 
		{
			echo "Added Into Cart";
		}
}
?>