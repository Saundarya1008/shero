<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
     <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 2000,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1700;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    
    
<style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb052 .i {position:absolute;cursor:pointer;}
        .jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
        .jssorb052 .i:hover .b {fill-opacity:.7;}
        .jssorb052 .iav .b {fill-opacity: 1;}
        .jssorb052 .i.idn {opacity:.3;}

        .jssora053 {display:block;position:absolute;cursor:pointer;}
        .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
        .jssora053:hover {opacity:.8;}
        .jssora053.jssora053dn {opacity:.5;}
        .jssora053.jssora053ds {opacity:.3;pointer-events:none;}
        
        
        .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    </style>
    
    
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
  
 
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="navbar-header" style="margin-left:200px">
      <a class="navbar-brand" href="#">SHERO</a>
    </div>
   
      <form class="navbar-form navbar-left" action="catPageDecision.php" method="post">
        <div class="input-group" style="margin-left:60px">
            <!--<input type="text" class="form-control" placeholder="Search" name="search" style="width:500px">-->
            <select  class="form-control" value="select product category" placeholder="Search" name="Search" style="width:500px;margin-top: 8px">
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
          
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
      
       <ul class="nav navbar-nav navbar-right">
           <li style="margin-right:25px"   onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="#"><span class="glyphicon glyphicon-user"></span> login & Sign Up</a></li>
           <li style="margin-right:30px"><a href="mainCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a></li>
        </ul>
  </div>
</nav><br>

<div style="margin:0;padding:0;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; background-color: #262626;">
    
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="980x380/001.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="980x380/002.jpg" />
            </div>
            <div>
                <img data-u="image" src="980x380/003.jpg" />
            </div>
            <div>
                <img data-u="image" src="980x380/004.jpg" />
            </div>
            <div>
                <img data-u="image" src="980x380/005.jpg" />
            </div>
            <div>
                <img data-u="image" src="980x380/006.jpg" />
            </div>
            <div>
                <img data-u="image" src="980x380/007.jpg" />
            </div>
            <div data-b="0">
                <img data-u="image" src="980x380/008.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="980x380/009.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="980x380/010.jpg" />
            </div>
            <div style="background-color:#ff7c28;">
                <div style="position:absolute;top:50px;left:50px;width:450px;height:62px;z-index:0;font-size:16px;color:#000000;line-height:24px;text-align:left;padding:5px;box-sizing:border-box;">Photos in this slider are to demostrate jssor slider,<br />
                    which are not licensed for any other purpose.
                </div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    
</div>
  
<div class="container-fluid bg-3 text-center">    
 <br>
  <div class="row">
    <div class="col-sm-3">
     <?php
     include 'dbConnection.php';
     
     $interval = 1; // Interval in seconds
     srand(floor(time() / $interval)); 
    $randomID1= mt_rand(1, 7);
    $sql="select * from category1 where categoryIndex='$randomID1'";
    $rows=$conn->query($sql);
    $row=$rows->fetch_assoc();
    $selProductCodeNow=$row['productCode'];
    $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
    $rows1=$conn->query($sql1);
    $row1=$rows1->fetch_assoc();
    echo '<img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">';
   
     
     ?>
      
    </div>
    <div class="col-sm-3"> 
        <?php
    include 'dbConnection.php';
     
     $interval = 1; // Interval in seconds
     srand(floor(time() / $interval)); 
    $randomID1= mt_rand(1, 7);
    $sql="select * from category1 where categoryIndex='$randomID1'";
    $rows=$conn->query($sql);
    $row=$rows->fetch_assoc();
    $selProductCodeNow=$row['productCode'];
    $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
    $rows1=$conn->query($sql1);
    $row1=$rows1->fetch_assoc();
    echo '<img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">';
    ?>
    </div>
    <div class="col-sm-3"> 
      
           <?php
    include 'dbConnection.php';
     
     $interval = 1; // Interval in seconds
     srand(floor(time() / $interval)); 
    $randomID1= mt_rand(1, 7);
    $sql="select * from category1 where categoryIndex='$randomID1'";
    $rows=$conn->query($sql);
    $row=$rows->fetch_assoc();
    $selProductCodeNow=$row['productCode'];
    $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
    $rows1=$conn->query($sql1);
    $row1=$rows1->fetch_assoc();
    echo '<img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">';
    ?>
        
        
    </div>
    <div class="col-sm-3">
    
           <?php
    include 'dbConnection.php';
     
     $interval = 1; // Interval in seconds
     srand(floor(time() / $interval)); 
    $randomID1= mt_rand(1, 7);
    $sql="select * from category1 where categoryIndex='$randomID1'";
    $rows=$conn->query($sql);
    $row=$rows->fetch_assoc();
    $selProductCodeNow=$row['productCode'];
    $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
    $rows1=$conn->query($sql1);
    $row1=$rows1->fetch_assoc();
    echo '<img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">';
    ?>
        
        
    </div>
  </div>
</div>
 <br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
     
           <?php
    include 'dbConnection.php';
     
     $interval = 1; // Interval in seconds
     srand(floor(time() / $interval)); 
    $randomID1= mt_rand(1, 7);
    $sql="select * from category1 where categoryIndex='$randomID1'";
    $rows=$conn->query($sql);
    $row=$rows->fetch_assoc();
    $selProductCodeNow=$row['productCode'];
    $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
    $rows1=$conn->query($sql1);
    $row1=$rows1->fetch_assoc();
    echo '<img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">';
    ?>
        
    </div>
    <div class="col-sm-3"> 
      
           <?php
    include 'dbConnection.php';
     
     $interval = 1; // Interval in seconds
     srand(floor(time() / $interval)); 
    $randomID1= mt_rand(1, 7);
    $sql="select * from category1 where categoryIndex='$randomID1'";
    $rows=$conn->query($sql);
    $row=$rows->fetch_assoc();
    $selProductCodeNow=$row['productCode'];
    $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
    $rows1=$conn->query($sql1);
    $row1=$rows1->fetch_assoc();
    echo '<img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">';
    ?>
        
    </div>
    <div class="col-sm-3"> 
    
           <?php
    include 'dbConnection.php';
     
     $interval = 1; // Interval in seconds
     srand(floor(time() / $interval)); 
    $randomID1= mt_rand(1, 7);
    $sql="select * from category1 where categoryIndex='$randomID1'";
    $rows=$conn->query($sql);
    $row=$rows->fetch_assoc();
    $selProductCodeNow=$row['productCode'];
    $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
    $rows1=$conn->query($sql1);
    $row1=$rows1->fetch_assoc();
    echo '<img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">';
    ?>
        
    </div>
    <div class="col-sm-3">
    
           <?php
    include 'dbConnection.php';
     
     $interval = 1; // Interval in seconds
     srand(floor(time() / $interval)); 
    $randomID1= mt_rand(1, 7);
    $sql="select * from category1 where categoryIndex='$randomID1'";
    $rows=$conn->query($sql);
    $row=$rows->fetch_assoc();
    $selProductCodeNow=$row['productCode'];
    $sql1="select * from sellerpanel where productCode='$selProductCodeNow'" ;
    $rows1=$conn->query($sql1);
    $row1=$rows1->fetch_assoc();
    echo '<img src='.$row1['selProductImage'].' class="img-responsive" style="width:100%;height:200px" alt="Image">';
    ?>
        
        
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>


<div id="id01" class="modal" style="margin-top:80px;margin-bottom: 50px">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form class="modal-content animate" action="selLoginCheck.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="loginImage.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="selUserName" style="width:500px"  required><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" style="width:500px" name="selPassword" required><br>
        
      <button type="submit" style="width:500px">Login</button><br>
    
    </div>
      <div style="margin-bottom:20px;margin-left: 20px">
      <a href="registrationForm.php" >NEW TO SHERO?CREATE ACCOUNT</a>
      </div>
  </form>
  </div>
        <div class="col-md-3"></div>    
    
    </div>
       </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    





 <script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>
