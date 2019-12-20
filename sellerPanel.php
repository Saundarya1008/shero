<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    include 'dbConnection.php';
    $selRegID=$_GET['selRegID'];
 
    $sql="select * from sellerregistration panel where selRegID='$selRegID'";
   $rows=$conn->query($sql);
  
   $row=$rows->fetch_assoc();
  
    ?>

    <div class="row" style="margin-top: 100px">
        <div class="col-md-2"></div>
        <div class="col-md-2" style="background-color: #f10861e3;color:white;height:470px;border:2px solid black">
            
             <h2>PRODUCT FORM</h2>
        </div>
    
        <div class="container col-md-6" style="border:2px solid black">
 

  
            <form class="form-horizontal" action="selPanelInsert.php" method="post" enctype="multipart/form-data">
      <div class="form-group" style="margin-top: 30px">
      <label class="control-label col-sm-2" for="category">PRODUCT CATEGORY:</label>
      <div class="col-sm-10">
            <select name="selProductCategory" class="form-control" value="select product category">
            <option value="cat1">cat1</option>
            <option value="cat2">cat2</option>
            <option value="cat3">cat3</option>
           
            <option value="cat4">cat4</option>
            <option value="cat5">cat5</option>
            <option value="cat6">cat6</option>
            <option value="cat7">cat7</option>
            <option value="cat8">cat8</option>
            <option value="cat9">cat9</option>
            <option value="cat10">cat10</option>
              
          </select>
        
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="specification">PRODUCT SPECIFICATIONS:</label>
      <div class="col-sm-10"> 
          <textarea class="form-control"  placeholder="Enter product specification" name="selproductSpecification" rows="5">  </textarea>
       
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="rate">PRODUCT RATE:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  placeholder="Enter product rate" name="selRate">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="img">PRODUCT IMAGE:</label>
      <div class="col-sm-10">          
          <input type="file" class="form-control"   name="selProductImage">
      </div>
    </div>
                <input type="hidden" name="selRegID" value="<?php echo $row['selRegID']; ?>">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-warning" style="width:150px;margin-bottom: 30px">Submit</button>
      </div>
    </div>
  </form>
</div>
        
       <div class="col-md-2"></div>  
        
</div>
</body>
</html>
