<html>


<body>
<?php

  




include 'dbConnection.php';

$purchaseId=  mt_rand(100000,999999);
$firstName=$_POST['firstname'];
$email=$_POST['email'];
$address=$_POST['address'];
$number=$_POST['number'];
$date=$_POST['date'];
echo $date;
$newDate=$date.substr(5, 13);
echo $newDate;
$cartItems= unserialize(html_entity_decode($_POST['cartItems']));

$totalCharges=$_POST['totalAmount'];
$sno=$_POST['sno'];
echo $sno;

$totalDifferentProducts=$sno;


for($row=1;$row<=$sno+1;$row++)
{
   
    
       $productCode=$cartItems[$row-1][1];
       $qty=$cartItems[$row-1][2];
//       $totalAmount=$cartItems[$row-1][8];
//        $sellerProfit=0.8*$totalAmount;
//        $adminProfit=0.2*$totalAmount;
        
     // $sql="insert into admintable (purchaseID,totalDifferentProducts,firstName,email,phoneNo,address,date,totalCharges,selProductImage,productCode,selRegID,selProductCategory,selProductSpecification,selRate,selProductQty,totalAmount,sellerProfit,adminProfit)values ($purchaseId,$totalDifferentProducts,'$firstName','$email','$number','$address','$date',$totalCharges,'$selProductImage',$productCode,$selRegID,'$selProductCategory','$selProductSpecification',$selRate,$qty,$totalAmount,$sellerProfit,$adminProfit)";  
      //echo 'inserting';
       $sql="insert into admintable(purchaseID,name,email,address,phoneno,date,productCode,selProductQty) values($purchaseId,'$firstName','$email','$address',$number,'$date',$productCode,$qty)";
     
      if($conn->query($sql)){ 
    
//     $sql2="select * from sellerregistration where selRegID='$selRegID'";
//     $rows2=$conn->query($sql2);
//     $row2=$rows2->fetch_assoc();
//    
//    $to = $row2['selEmailAddress'];
//    $subject = "My subject";
//    $txt = "hello ".$row2['selName']."!...congratulations..!! your product with product code='$productCode' product category='$selProductCategory' product specification='$selProductSpecification' with rate='$selRate' has been placed an order of quantity='$qty' totalAmount='$totalAmount'\n you must deliver it to ------ by this week..you have made a profit of '$sellerProfit' according to our 80-20 partnership";
//    $headers = "From: webmaster@example.com" . "\r\n" .
//    "CC: somebodyelse@example.com";
//
//mail($to,$subject,$txt,$headers);
echo 'inserted successfully';
       }

}





?>
    
    
    
    
</body>
    </html>