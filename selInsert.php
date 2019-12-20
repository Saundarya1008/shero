<?php

$selName=$_POST['selName'];
$selUserName=$_POST['selUserName'];
$selPassword=$_POST['selPassword'];
$selPhoneNo=$_POST['selPhoneNo'];
$selEmailAddress=$_POST['selEmailAddress'];

include 'dbConnection.php';

$sql="insert into sellerregistration (selName,selUserName,selPassword,selPhoneNo,selEmailAddress) VALUES ('$selName','$selUserName','$selPassword','$selPhoneNo','$selEmailAddress')";
if ($conn->query($sql) === TRUE) {
    echo "THANKS FOR BEING A PART OF TEAM SHERO";
} else {
    echo  $conn->error;
}




?>