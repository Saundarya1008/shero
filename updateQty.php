<?php

$productCode=$_POST['productCode'];
$addQty=$_POST['updateSelProductQty'];
include 'dbConnection.php';
$sql="update sellerpanel set selProductQty=selProductQty+$addQty where productCode='$productCode'";
$sql1="select * from sellerpanel where productCode='$productCode'";
$rows=$conn->query($sql1);
if($row=$rows->fetch_assoc()){

$selRegID=$row['selRegID'];

}
if($conn->query($sql)){
    header("location:sellerProfile.php?selRegID='$selRegID'");
}
else{
    echo 'updation not successful';
}


?>

