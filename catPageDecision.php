<?php

$catName=$_POST['Search'];
switch($catName){
    
    case "cat1":header("location:catPage1.php");
        break;
    
    case "cat2":header("location:catPage2.php");
        break;
    
     case "cat3":header("location:catPage3.php");
        break;
    
     case "cat4":header("location:catPage4.php");
        break;
    
     case "cat5":header("location:catPage5.php");
        break;
    
     case "cat6":header("location:catPage6.php");
        break;
    
     case "cat7":header("location:catPage7.php");
        break;
    
     case "cat8":header("location:catPage8.php");
        break;
    
     case "cat9":header("location:catPage9.php");
        break;
    
     case "cat10":header("location:catPage10.php");
        break;
    
   
    default:echo 'no related search found';
}




?>