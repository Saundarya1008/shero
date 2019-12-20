  <?php
    $selName=$_POST['selName'];
    $selUserName=$_POST['selUserName'];
    $selPassword=$_POST['selPassword'];
    $selPhoneNo=$_POST['selName'];
    $selEmailAddress=$_POST['selEmailAddress'];
    $otp=$_POST['$otp'];
    $enteredOTP=$_POST['enteredOTP'];
  
  
  
            if($otp==$enteredOTP){
                include 'dbConnection.php';
                $sql="insert into sellerregistration (selName,selUserName,selPassword,selPhoneNo,selEmailAddress) VALUES ('$selName','$selUserName','$selPassword','$selPhoneNo','$selEmailAddress')";
               if($conn->query($sql)){ 
                header("location:selInsert.php");
               }
            }
               echo 'wrong otp';
            
            ?>