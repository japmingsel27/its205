<?php 
  require 'db.php';

  $pid = $_GET['pid'];
  $ornum = $_GET['ornum'];

  $insertToSalesItems = mysqli_query($con, "INSERT INTO sales_items (ornum, pid, qty) VALUES ('$ornum', '$pid', 1) ");

  header('location: cashiering.php');
?>