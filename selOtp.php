<html>
    <head>
        
        
    </head>
    <body>
        <?php
        $selName=$_POST['selName'];
        $selUserName=$_POST['selUserName'];
        $selPassword=$_POST['selPassword'];
        $selPhoneNo=$_POST['selPhoneNo'];
        $selEmailAddress=$_POST['selEmailAddress'];
        $otp=rand(100000,999999);
        
        $to = $selEmailAddress;
        $subject = "verification";
        $txt = $otp;
        $headers = "From: webmaster@example.com" . "\r\n" .
        "CC: somebodyelse@example.com";

        mail($to,$subject,$txt,$headers);
        
        
        ?>
        <form action="otpVerification.php" method="post">
            <label>ENTER OTP SENT TO YOUR REGISTERED MAIL</label>
            <input type="text" placeholder="enter otp" name="enteredOTP">
            <input type="hidden" value="<?php echo '$selName';  ?>">
            <input type="hidden" value="<?php echo '$seluserName';  ?>">
            <input type="hidden" value="<?php echo '$selPassword';  ?>">
            <input type="hidden" value="<?php echo '$selPhoneNo';  ?>">
            <input type="hidden" value="<?php echo '$selEmailAdderss';  ?>">
            <input type="hidden" value="<?php echo '$otp';  ?>">
            
            <button type="button" class="btn btn-warning"></button>
        </form>
        
    </body>
    
    
</html>