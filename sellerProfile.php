<html>

    <head>
        <title>
            
        </title>
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
    </head>
   <body> 
<?php
include 'dbConnection.php';
$selRegID=$_GET['selRegID'];
$sql="select * from sellerregistration where selRegID=$selRegID";
$rows=$conn->query($sql);
$row=$rows->fetch_assoc();

 $sql1="select * from sellerpanel where selRegID=$selRegID";
            
           
             $rows1=$conn->query($sql1);
             $row1=$rows1->fetch_assoc();

?>
       
       <div class="row" style="margin-top:100px">
          <div class="col-md-1"></div>
           <div class="col-md-2 well">
               <img src="<?php echo $row['selImage']; ?>" class="img-circle"  width="100" height="100"> <br> <br>
               
                <div class="col-md-12 "><?php echo $row['selRegID']; ?></div><br>
               <div class="col-md-12 "><?php echo $row['selName']; ?></div><br>        
               <div class="col-md-12"><?php echo $row['selUserName']; ?></div><br>
               <div class="col-md-12"><?php echo $row['selPhoneNo']; ?></div><br>
               <div class="col-md-12"><?php echo $row['selEmailAddress']; ?></div><br><br>
             <?php echo '<div class="col-md-12"><button type="button" class="btn btn-success"><a href="sellerPanel.php?selRegID='.$row['selRegID'].' " style="text-decoration: none">ADD A NEW PRODUCT</a></div><br>';
           ?>
             </div>
           <div class="col-md-8 ">
              
               
             <?php
           
            
          
           
             echo '<table class="table table-stripped">';
             echo '<thead>';
                echo '<tr>';
             echo '<th>productCode</th>';
             echo '<th>selProductImage</th>';
             echo '<th>selProductCategory</th>';
             echo '<th>selProductSpecification</th>';
             echo '<th>selRate</th>';
             echo '<th>selProductQty</th>';
             echo '<th></th>';
            echo '</tr>';
       
             echo '</thead>';
            echo '<tbody>';
            
             while( $row1=$rows1->fetch_assoc()){
                
                 echo '<tr>';
                 echo '<td>'.$row1['productCode'].'</td>';
                 echo "<td><img src=".$row1['selProductImage']." style='width:100px;height:100px'></td>";
                 echo '<td>'.$row1['selProductCategory'].'</td>';
                 echo '<td>'.$row1['selProductSpecification'].'</td>';
                 echo '<td>'.$row1['selRate'].'</td>';
                 echo '<td>'.$row1['selProductQty'].'</td>';
              
                 echo '<td><button type="button" class="btn btn-warning"><a href="updateRate.php?productCode='.$row1['productCode'].'" style="text-decoration:none">UPDATE RATE</button></td>';
                 echo '<td><button type="button" class="btn btn-warning"><a href="increaseQty.php?productCode='.$row1['productCode'].'" style="text-decoration:none">ADD PRODUCT</button></td>';
                 echo '</tr>';
                
             }
                 echo '<tbody>';   
              echo '</table>';
             
         
             ?>
           </div>
         <div class="col-md-1"></div>
           
           
       </div>
       
       
       
   </body>
</html>