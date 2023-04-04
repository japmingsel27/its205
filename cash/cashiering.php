<?php 
  require 'db.php';
  require 'main.php';
  require 'home.php';
  require 'searchProductView.php';
  require 'cartProductsView.php';

  $product = new Products();
  $userid = $_SESSION['userid'];
  $_SESSION['printed'] = 0;

  if($_SESSION['printed'] == 1){
      //create sales to get ornum
      $insertToSales = mysqli_query($con, "INSERT INTO sales (userid) VALUES ('$userid')");
      //get the latest sales ornum
      $getLatestOrnum = mysqli_query($con, "SELECT * FROM sales ORDER BY ornum DESC LIMIT 1");
      $orLatesArray = mysqli_fetch_array($getLatestOrnum);
      
      $_SESSION['ornum'] = $orLatesArray['ornum'];
  }


  if(isset($_POST['search_product'])){
    $productInfo = $product->select($_POST['search_product']);
    require 'productInfoTable.php';
  }
?>