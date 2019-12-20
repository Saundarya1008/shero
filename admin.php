<html>
    <head>
        
        
    </head>
    
    <body>
        <table>
            
        <?php
        echo '<tr>';
        echo '<th>PURCHASE ID</th>';
        echo '<th>NAME</th>';
        echo '<th>EMAIL</th>';
        echo '<th>PHONE NO</th>';
        echo '<th>ADDRESS</th>';
        echo '<th>DATE</th>';
        //echo '<th>TOTAL CHARGES</th>';
        echo '<th>SELLER PRODUCT IMAGE</th>';
        echo '<th>PRODUCT CODE</th>';
        echo '<th>SELLER REGISTRATION ID</th>';
        echo '<th>SELLLER PRODUCT CATEGORY</th>';
        echo '<th>SELLER PRODUCT SPECIFICATION</th>';
        echo '<th>SELLER RATE</th>';
        echo '<th>SELLER PRODUCT QUANTITY</th>';
        echo '<th>TOTAL AMOUNT</th>';
        echo '<th>SELLER PROFIT</th>';
        echo '<th>ADMIN PROFIT</th>';
        
        echo '</tr>';
        
        
  include 'dbConnection.php';
  $sql="select * from admintable";
  $rows=$conn->query($sql);
 while ($row=$rows->fetch_assoc()){
     $productCode=$row['productCode'];
     $qtyPurchased=$row['selProductQty'];
    // echo $productCode;
     $sql1="select * from sellerpanel where productCode='$productCode'";
     $rows1=$conn->query($sql1);
     //echo $rows1->num_rows;
     $row1=$rows1->fetch_assoc();
     $totalAmount=$row1['selRate']*$qtyPurchased;
     $sellerProfit=0.8*$totalAmount;
     $adminProfit=0.2*$totalAmount;
     echo '<tr>';
     echo '<td>'.$row['purchaseID'].'</td>';
     echo '<td>'.$row['Name'].'</td>';
     echo '<td>'.$row['email'].'</td>';
     echo '<td>'.$row['phoneNo'].'</td>';
     echo '<td>'.$row['address'].'</td>';
     echo '<td>'.$row['date'].'</td>';
    // echo '<td>'++'</td>';
     echo "<td><img src=".$row1['selProductImage']." style='width:100px;height:100px'></td>";
     echo '<td>'.$row['productCode'].'</td>';
     echo '<td>'.$row1['selRegID'].'</td>';
     echo '<td>'.$row1['selProductCategory'].'</td>';
     echo '<td>'.$row1['selProductSpecification'].'</td>';
     echo '<td>'.$row1['selRate'].'</td>';
     echo '<td>'.$row['selProductQty'].'</td>';
     echo '<td>'.$totalAmount.'</td>';
     echo '<td>'.$sellerProfit.'</td>';
     echo '<td>'.$adminProfit.'</td>';
     echo '</tr>';
     
     
 }
  
        
        ?>
        </table>  
        
        
        
    </body>
    
    
    
    
    
</html>