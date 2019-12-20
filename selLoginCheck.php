
<?php

include 'dbConnection.php';

$selUserName=$_POST['selUserName'];
$selPassword=$_POST['selPassword'];



$sql="select * from sellerregistration where selUserName='$selUserName'";

$rows=$conn->query($sql);

//$row=$rows->fetch_assoc();
//echo $row['selRegID'];
if($row=$rows->fetch_assoc())
{
if($row['selPassword']===$selPassword)
{
  
  
    
  header("location:sellerProfile.php?selRegID=".$row['selRegID']."");

  
}
else{
    echo 'not an autheticated user';
}
}
 else {
 
 header("location:registrationForm.php");
 }


?>
  