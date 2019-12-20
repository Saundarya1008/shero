<?php
include 'dbConnection.php';

$selProductCategory=$_POST['selProductCategory'];
$selProductSpecification=$_POST['selproductSpecification'];
$selRate=$_POST['selRate'];
$selRegID=$_POST['selRegID'];


$target_dir = "img/";
$target_file = $target_dir .time().basename($_FILES["selProductImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["selProductImage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["selProductImage"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["selProductImage"]["tmp_name"], $target_file)) {
       
        $sql="insert into sellerpanel (selRegID,selProductCategory,selProductSpecification,selRate,selProductImage) VALUES('$selRegID','$selProductCategory','$selProductSpecification','$selRate','$target_file')";
        
        if($conn->query($sql)){
            echo 'inserted succefully';
            $selRegLast="SELECT * FROM sellerpanel ORDER BY productCode DESC LIMIT 1  ";
            $selRegLastfire=$conn->query($selRegLast);
            $selProductCatLast=$selRegLastfire->fetch_assoc();
            echo $selProductCatLast['productCode'];
             $sql="select * from sellerpanel where productCode=".$selProductCatLast['productCode']."";
             echo 'it starts';
               $rows=$conn->query($sql);
              
               echo 'here';
          if($row=$rows->fetch_assoc()){
              echo 'inserted now';
                echo $row['selProductCategory'];
                echo 'hello';
              switch($row['selProductCategory']){
                  case "cat1":$sql1="insert into category1 (productCode) VALUES (".$row['productCode'].")";
                                 echo 'hello1';
                                $conn->query($sql1);
                                break;
                  case "cat2":$sql1="insert into category2 (productCode) VALUES (".$row['productCode'].")";
                                    echo 'hello2';          
                                   $conn->query($sql1);
                                             break;
                  case "cat3":$sql1="insert into category3 (productCode) VALUES (".$row['productCode'].")";
                       echo 'hello3';        
                      $conn->query($sql1);
                                break;
                  case "cat4":$sql1="insert into category4 (productCode) VALUES (".$row['productCode'].")";
                                echo 'hello4';         
                               $conn->query($sql1);
                                         break;          
                 
                 case "cat5":$sql1="insert into category5 (productCode) VALUES (".$row['productCode'].")";
                                echo 'hello4';         
                               $conn->query($sql1);
                                         break;          
                                     
                  case "cat6":$sql1="insert into category6 (productCode) VALUES (".$row['productCode'].")";
                                echo 'hello4';         
                               $conn->query($sql1);
                                         break;          
                  case "cat7":$sql1="insert into category7 (productCode) VALUES (".$row['productCode'].")";
                                echo 'hello4';         
                               $conn->query($sql1);
                                         break;          
                            
                 case "cat8":$sql1="insert into category8 (productCode) VALUES (".$row['productCode'].")";
                                echo 'hello4';         
                               $conn->query($sql1);
                                         break;          
                     case "cat9":$sql1="insert into category9 (productCode) VALUES (".$row['productCode'].")";
                                echo 'hello4';         
                               $conn->query($sql1);
                                         break;          
                     case "cat10":$sql1="insert into category10 (productCode) VALUES (".$row['productCode'].")";
                                echo 'hello4';         
                               $conn->query($sql1);
             
                                     
                    default:
                            echo "Your favorite color is neither red, blue, nor green!";         
              }
          }
        }
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




?>