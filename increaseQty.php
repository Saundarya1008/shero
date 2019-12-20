
<html>
    <head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
  <style>
     #bg-1{
           background-color: #1abc9c;
    color: #ffffff;
      }
      
      #bg-2{
         background-color: #1abc9c;
            
      }
      </style>
    </head>
    <body >
       <?php
       include 'dbConnection.php';
       $productCode=$_GET['productCode'];
       $sql1="select * from sellerpanel where productCode='$productCode'";
       $rows1=$conn->query($sql1);
       $row1=$rows1->fetch_assoc();
       
       
       
       
        echo '<div class="container text-center" id="bg-1" style="margin-top:50px">';
    
   echo '<img src='.$row1['selProductImage'].' class="img-circle"  width="250" height="250"><br><br><br>';
   echo '</div>' ; 
   echo '<div class="container text-center" id="bg-2" >'; 
   echo '<table class="table table-stripped" style="width:600px;margin-left:290px;color:#ffffff;border:none">';
   echo '<tr><td> PRODUCT CODE:</td>';
   echo '<td>'.$row1['productCode'].'</td></tr>';
   echo '<tr><td>PRODUCT CATEGORY:</td>';
   echo '<td>'.$row1['selProductCategory'].'</td></tr>';
   echo '<tr><td>PRODUCT SPECIFICATION:</td>';
   echo '<td>'.$row1['selProductSpecification'].'</td></tr>';
   echo '<tr><td>RATE:</td>';
   echo '<td>'.$row1['selRate'].'</td></tr>';
     echo '<tr><td>PRODUCT QUANTITY:</td>';
   echo '<td>'.$row1['selProductQty'].'</td></tr>';
   echo '</table>';
   echo '<form class="form-horizontal" action="updateQty.php"  method="post">';
   
           echo '<div class="form-group col-sm-12">';
           echo '<div class="col-sm-8"></div>';
           echo '<div class="col-sm-4">';
           echo ' <label class="control-label col-sm-5" for="qty" style="color:white">ADD QUANTITY:</label>';
           echo ' <div class="col-sm-4"><input type="text" name="updateSelProductQty" placeholder="add qty" ></div></div></div>';
           echo '<div class="col-sm-12">';
           echo '<div class="col-sm-9"><input type="hidden" name="productCode" value='.$row1['productCode'].'></div>';
           echo '<div class="col-sm-3"><button type="submit" class="btn btn-warning" >UPDATE RATE</button></div>';
           echo '</div>';
           echo '</form>';
   
  
  
       echo '</div>' ; 
       




 





?>
        </body>
<html>
