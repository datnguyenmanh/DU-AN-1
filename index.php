<?php
include './page/website/header.php';
if ((isset($_GET['url'])) && ($_GET['url'] != "")) {
  $act = $_GET['url'];
  switch ($act) {
    case 'contact':
      include "view/contact.php";
      break;
      case 'product':
        include "view/product.php";
        break;
  }
} else {
  include "view/index.php";
}

include './page/website/footer.php';