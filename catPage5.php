<html>
    
    <head>
        
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <style>
        
div.polaroid {
   
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
/*  margin-bottom: 25px;*/
}

div.container {
     
/*  text-align: center;*/
  padding: 10px 80px;
  height:200px;
 
}
.paragraph{
    margin: 10px;
} 
        
    </style>
    <body>
        <?php
        $i=1;
          include 'dbConnection.php';
           $productIndexLast="SELECT * FROM category5 ORDER BY categoryIndex DESC LIMIT 1  ";
            $productIndexLastFire=$conn->query($productIndexLast);
            $productCategory1LastIndex=$productIndexLastFire->fetch_assoc();
            $index=$productCategory1LastIndex['categoryIndex'];
            echo '<div style="margin-left:500px"><h1>CATEGORY 1</h1><br><br></div>';
           while($i<=$index){
       echo '<div class="row">
            <div class="col-md-3 ">';
                
                
              
                $sql="select * from category5 where categoryIndex='$i'";
                
               $rows=$conn->query($sql);
                $row=$rows->fetch_assoc();
                $selProductCodeNow=$row['productCode'];
                $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
                $rows1=$conn->query($sql1);
                $row1=$rows1->fetch_assoc();
                echo '<div class="polaroid">
                 <img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">
                           
                  <div class="container" >
                  <h3>Rs.'.$row1['selRate'].'</h3> 
                  <p>'.$row1['selProductCategory'].'</p>  ';  
                      ?>
                  <form action="Cart.php" method="post" >
                      <input type="hidden" name="productCode" value="<?php echo $selProductCodeNow;?>">
                 
                
                  <button type="submit"  class="btn btn-success" name="add_to_cart" >Add to Cart</button>    
                   </form>  
        <?php
                    echo '</div>
                </div>';
                
                $i++;
                 if($i>$index){
                   break;
               }
                
                
                
                
                
           echo '<br><br></div>';
           
           echo '<div class="col-md-3 ">';
                
              
               
                $sql="select * from category5 where categoryIndex='$i'";
                
               $rows=$conn->query($sql);
                $row=$rows->fetch_assoc();
                $selProductCodeNow=$row['productCode'];
                $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
                $rows1=$conn->query($sql1);
                $row1=$rows1->fetch_assoc();
                 echo '<div class="polaroid">
                 <img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">
                           
                  <div class="container" >
                  <h3>Rs.'.$row1['selRate'].'</h3> 
                  <div class="paragraph">
                    <p >'.$row1['selProductCategory'].'</p>   ';
                  ?>
                  <form action="Cart.php" method="post" >
                      <input type="hidden" name="productCode" value="<?php echo $selProductCodeNow;?>">
                 
                
                  <button type="submit"  class="btn btn-success" name="add_to_cart">Add to Cart</button>    
                   </form>  
        <?php
                 echo '</div>
                     
                  </div>
                </div>';
                
                           
                
                
                $i++;
                
                
                  if($i>$index){
                   break;
               }
                
               
                
                
                
                
            echo '<br><br></div>
            <div class="col-md-3 ">';
                
             
                $sql="select * from category5 where categoryIndex='$i'";
                
               $rows=$conn->query($sql);
                $row=$rows->fetch_assoc();
                $selProductCodeNow=$row['productCode'];
                $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
                $rows1=$conn->query($sql1);
                $row1=$rows1->fetch_assoc();
                
                echo '<div class="polaroid">
                 <img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">
                           
                  <div class="container" >
                  <h3>Rs.'.$row1['selRate'].'</h3> 
                  <p>'.$row1['selProductCategory'].'</p>   '; 
 ?>
                  <form action="Cart.php" method="post" >
                      <input type="hidden" name="productCode" value="<?php echo $selProductCodeNow;?>">
                 
                
                  <button type="submit"  class="btn btn-success" name="add_to_cart">Add to Cart</button>    
                   </form>  
        <?php                 

                echo ' </div>
                </div>';
                
                
                $i++;
                
                
                  if($i>$index){
                   break;
               }
                
              
                
                
                
          echo ' <br><br></div>
            <div class="col-md-3 ">';
            
                $sql="select * from category5 where categoryIndex='$i'";
                
               $rows=$conn->query($sql);
                $row=$rows->fetch_assoc();
                $selProductCodeNow=$row['productCode'];
                $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
                $rows1=$conn->query($sql1);
                $row1=$rows1->fetch_assoc();
                echo '<div class="polaroid">
                 <img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">
                           
                  <div class="container" >
                  <h3>Rs.'.$row1['selRate'].'</h3> 
                  <p>'.$row1['selProductCategory'].'</p>   '; 
                ?>
                  <form action="Cart.php" method="post" >
                      <input type="hidden" name="productCode" value="<?php echo $selProductCodeNow;?>">
                 
                
                  <button type="submit"  class="btn btn-success" name="add_to_cart">Add to Cart</button>    
                   </form>  
        <?php
                
                 echo '</div>
                </div>';
                
                $i++;
                
                if($i>$index){
                   break;
               }
                
                
                
            echo    
            '</div>
        
        <br><br></div>';
     }
     echo '<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "Cart.php";
    };
</script>';
        

        
     
     
      ?>  
        
        
        
        
        
    </body>
    
    
</html>

