 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>


</head>
<body>

<div class="container">







 <?php
  session_start();
 
   include 'dbConnection.php';
     
      if(isset($_GET['productCode'])){
          $productCode=$_GET['productCode'];
          unset($_SESSION['productCart'][$productCode]);
      }
      
      if(isset($_SESSION['productCart']) && !empty($_SESSION['productCart'])){
          echo "<table class='table table-striped'>";
          echo "<thead>";
        
          echo "<tr>";
          echo "<th>sno#</th>";
          echo "<th>Product Image</th>";
          echo "<th>Product Code</th>";
          echo "<th>Product Category</th>";
          echo "<th>Product Specification</th>";
          echo "<th>Per Product Price</th>";
          echo "<th>Product Quantity</th>";
         echo "<th>Product totalPrice</th>";
          echo "<th></th>";
        
          
          
          
          
          echo "</tr>";
          echo "</thead>";
          
          
          
          $i=0;
          $sum=0;
          $grandTotal=array();
          $subTotal=array();
          echo " <tbody>";
          $cartItems=array();
          foreach ($_SESSION['productCart'] as $key => $value) {
           
              $i++;
              $sql="select * from sellerpanel where productCode='{$value}'";
            $rows=$conn->query($sql);
            $row=$rows->fetch_assoc();
              $qty=$_SESSION['qtyCart'][$key];
              $rate=$row['selRate'];
             $qtyActual=(int)$qty;
              $totalPrice=$qtyActual*$rate;
             
            echo "<tr>";  
            echo "<td>$i</td>";
             echo "<td><img src=".$row['selProductImage']." style='width:100px;height:100px'></td>";
              echo "<td>".$row['productCode']."</td>";
              echo "<td>".$row['selProductCategory']."</td>";
            echo "<td>".$row['selProductSpecification']."</td>";
           echo '<td>'.$row['selRate'].'</td>'; 
            echo '<td>'.$qty.'</td>';
            echo '<td>'.$totalPrice.'</td>';
               echo "<td><button type='btn' class='btn btn-danger'  ><a href='?productCode=$key' style='text-decoration:none;color:white'>REMOVE</a></button></td>";
               $col=0;
               $cartItems[$key][$col]=$i;
               $col++;
              
               $cartItems[$key][$col]=$row['productCode'];
               $col++;
              
         
               $cartItems[$key][$col]=$qty;
               $col++;
               $cartItems[$key][$col]=$totalPrice;
               
               
              
           echo "</tr>"; 
           $sum=$sum+$totalPrice;
              
          }
         
          echo "  </tbody>";
          echo "</table>";
          echo"<div class='row'>";
          echo "<div class='col-md-8'></div>";
          echo "<div class='col-md-4'>
                <div class='col-md-12'>
                <div class='col-md-8'>TOTAL CHARGES:</div>
                <div class='col-md-4'>
                    Rs.".$sum."</div>
                   </div></div>";
                  
                  
         echo"</div><br>";
         $totalCharges=$sum+100;
        echo "<div class='row'>
                <div class='col-md-8'></div>
                <div class='col-md-4'>
                    <div class='col-md-12'>
                <div class='col-md-8'>SHIPPING CHARGES:</div>
                <div class='col-md-4'>
                    Rs.100</div>
                   </div></div></div><br>";
        
          echo "<div class='row'>
                <div class='col-md-8'></div>
                <div class='col-md-4'>
                    <div class='col-md-12'>
                <div class='col-md-8'>FINAL CHARGES:</div>
                <div class='col-md-4'>
                    Rs.".$totalCharges."</div>
                   </div></div></div><br><br>";
         ?>
     <form action="adminTable.php" method="post">
              <div class="row">
          <div class="col-md-2 "></div>
          <div class="col-md-8 ">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address">
            <label for="number"><i class="fa fa-phone" style="font-size:23px;text-shadow:2px 2px 4px #000000;"></i> Phone Number</label>
            <input type="text" id="num" name="number" >
            <input type="hidden" name="date" value="<?php echo date('Y-m-d') ; ?>">
            <?php
            $cartItems_s=  serialize($cartItems);
            $cartItems_encoded=  htmlentities($cartItems_s);
            
                    ?>
            <input type="hidden" name="cartItems" value="<?php echo $cartItems_encoded;?>">
            <input type="hidden" name="totalAmount" value="<?php echo $totalCharges;?>">
            <input type="hidden" name="sno" value="<?php echo $i;?>">
             <input type="submit"  value="Submit Details&buy now" class="btn">
 
          </div>
          <div class="col-md-2"></div>
          </div>
        </form>
        
         
    <?php  }
         else{
                    echo "<div style='margin-left:150px;margin-top:150px' >";
              echo "<h2 style='font-family: 'Roboto', sans-serif'>cart empty</h2>"; 
              echo "<br>";
        
             
              echo "<button type='button' class='btn btn-primary'><a href='frontPage.php' style='text-decoration:none;color:white'>BUY PRODUCTS</a></buton>";
              echo "</div>";
            }
       
        
        
        
        ?>

    </div>
   
    
    </body>
</html>