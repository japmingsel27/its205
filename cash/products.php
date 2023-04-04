<?php 
require 'main.php';
require 'home.php';

$product = new Products();
$prod_array = $product->select();
require 'addProducts.php';


if(isset($_POST['save'])){
  $addProduct = $product->add($_POST['product'],$_POST['desc'],$_POST['unit'],$_POST['price']);

  if($addProduct){
    echo "Product Inserted Successfully";
    header('location: products.php');
  }else{
    echo "ERROR";
  }
}

if(isset($_GET['action'])){
  if($_GET['action'] == 'update'){
    $productData = $product->select($_GET['pid']);
    require 'updateView.php';    
  }else{
    echo "delete";
  }
}




?>