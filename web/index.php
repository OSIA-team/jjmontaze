<?php
session_start();

if(@!isset($_GET['p'])){
	$p = "uvod";
}else{
	$p = $_GET['p'];
}
require "pages/hlavicka.php"; //načete hlavičku html dokumentu
require "pages/menu.php"; // načte menu
switch ($p) {
  case 'uvod':
    require "pages/uvod.php";
    break;

    case 'reference':
      require "pages/reference.php";
      break;

  default:
    require "pages/uvod.php";
    break;
}

require "pages/footer.php"; //načte footer všem stránkám
 ?>
 <?php
 if (isset($_SESSION['error'])) {
   echo '<script>alert("' . $_SESSION['error'] . ' ")</script>';
   session_destroy();
 }
  ?>
