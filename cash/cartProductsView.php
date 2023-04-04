<?php 

  $ornumber = $_SESSION['ornum'];
  $getCartProducts = mysqli_query($con, "SELECT sales_items.pid, products.product, products.description, products.unit, products.price FROM sales_items JOIN products ON sales_items.pid = products.pid WHERE sales_items.ornum = '$ornumber'");
?>
<table border = '1'>
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
      while($cartProductRow = mysqli_fetch_array($getCartProducts)){
        echo "<tr>";
          echo "<td>".$cartProductRow['pid']."</td>";
          echo "<td>".$cartProductRow['product']."</td>";
          echo "<td>".$cartProductRow['description']."</td>";
          echo "<td>".$cartProductRow['unit']."</td>";
          echo "<td>".$cartProductRow['price']."</td>";
          echo "<td><a href='addToCart.php?pid=".$cartProductRow['pid']."&ornum=".$_SESSION['ornum']."'>Remove from cart</a></td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>