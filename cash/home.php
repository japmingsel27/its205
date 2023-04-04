<?php
session_start();

if(!isset($_SESSION['userid'])){
  header("location: index.php");
  echo $_SESSION['userid'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>Welcome to home</li>
    <li>
      <a href="products.php">Products</a>
    </li>
    <li>
      <a href="cashiering.php">Cashiering</a>
    </li>
    <li>
      <a href="logout.php">logout</a>
    </li>
  </ul>
</body>
</html>