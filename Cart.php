<html>
    
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <?php
        
        
        session_start();
        $productCode=$_POST['productCode'];
        $qty=$_POST['qty'];
        $inStock=$_POST['inStock'];
        
        
        if(isset($_SESSION['productCart'])){
           $currentno=$_SESSION['counter']+1;
           $_SESSION['productCart'][$currentno]=$productCode;
           $_SESSION['qtyCart'][$currentno]=$qty;
         
           $_SESSION['counter']=$currentno;
                   
            
            
        }else{
            $productCart=array();
            $qtyCart=array();
           
            $_SESSION['productCart'][0]=$productCode;
            $_SESSION['qtyCart'][0]=$qty;
           
            $_SESSION['counter']=0;
        }
        if($qty<=$inStock){
            include 'dbConnection.php';
           $sql="update sellerpanel set selProductQty=selProductQty-$qty where productCode=$productCode";
           if($conn->query($sql)){
        header("location:mainCart.php");
           }
        
        }
        else{
            echo 'that amount of quanity not in stock';
            echo '<br><a href="catPage1.php">BACK TO BUYING</a>';
            
        }
        
        
        
        
        
//        
//        
//        include 'dbConnection.php';
//     static $count=1;
//     $i=1;
//     
//      $sql="select * from sellerpanel where productCode='$productCode'";
//      $rows=$conn->query($sql);
//      $num=$rows->num_rows;
//      echo $num;
//      $row=$rows->fetch_assoc();
//      
//      echo $row['productCode'];
//     
//       
//       
//          
//       
//       
//       
//       
//       echo  '<table><th><td>productCode</td>
//                        <td>seller registration id</td>
//                        <td>product category</td>
//                        <td>product specification</td>
//                        <td>product rate</td>
//                        <td>product image</td>
//                        <td>action</td>
//                        </th></table>';
//                       
//                      while($i<=count){  
//                        
//                    echo '<table>   <tr>
//                       <td>'.$row['productCode'].'</td>
//                       <td>'.$row['selRegID'].'</td>
//                       <td>'.$row['selProductCategory'].'</td>
//                       <td>'.$row['selProductSpecification'].'</td>
//                       <td>'.$row['selRate'].'</td>
//                       <td><img src='.$row['selProductImage'].'></td>
//                        
//                        </tr>
//
//
//
//                            </table>';
//                       
//                    $i++;
//                      }
//                     
//       
//        
//        $count++;
        
        ?>
        
        
        
    </body>
    
    
</html>