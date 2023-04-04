<?php 
  include 'db.php';
?>
<style>
  table tr:hover{
    background: #e6e6;
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="products.php" method="POST">
    <input type="text" name="product" placeholder="Product Name">
    <input type="text" name="desc" placeholder="Product Description">
    <input type="text" name="unit" placeholder="Product Unit">
    <input type="text" name="price" placeholder="Product Price">
    <button type="submit" name="save">SAVE</button>
  </form>
  <table border='1'>
    <thead>
      <th>PID</th>
      <th>PRODUCT</th>
      <th>DESCRIPTION</th>
      <th>UNIT</th>
      <th>PRICE</th>
      <th>ACTION</th>
    </thead>
    <tbody>
      <?php 
        while($row = mysqli_fetch_array($prod_array)){
          echo "<tr>";
            echo "<td>".$row['pid']."</td>";
            echo "<td>".$row['product']."</td>";
            echo "<td>".$row['description']."</td>";
            echo "<td>".$row['unit']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>
              <a href='products.php?action=update&pid=".$row['pid']."' >UPDATE</a> | 
              <a href='products.php?action=delete&pid=".$row['pid']."' >DELETE</a>
            </td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</body>
</html>