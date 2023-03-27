<?php
  include "view/header.php";

  if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {
      case 'sanpham':
        include "";
        break;
      
      default:
        include "view/slideshow.php";
        include "view/body.php";
        break;
    }

  }else{
    include "view/slideshow.php";
    include "view/body.php";
    
  }
  
  include "view/footer.php";
  
?>