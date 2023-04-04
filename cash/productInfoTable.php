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
      while($productRow = mysqli_fetch_array($productInfo)){
        echo "<tr>";
          echo "<td>".$productRow['pid']."</td>";
          echo "<td>".$productRow['product']."</td>";
          echo "<td>".$productRow['description']."</td>";
          echo "<td>".$productRow['unit']."</td>";
          echo "<td>".$productRow['price']."</td>";
          echo "<td><a href='addToCart.php?pid=".$productRow['pid']."&ornum=".$_SESSION['ornum']."'>Add to cart</a></td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
