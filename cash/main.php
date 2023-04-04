<?php 

class Products
{
  public $db_con;
  public $pid;
  public $product;
  public $description;
  public $unit;
  public $price;

  public function __construct()
  {
    require 'db.php';
    $this->db_con = $con;
  }

  public function add($product,$description,$unit,$price)
  {
    $this->product = $product;
    $this->description = $description;
    $this->unit = $unit;
    $this->price = $price;

    $query = mysqli_query($this->db_con, "
      INSERT INTO products(product, description, unit, price)
      VALUES('$this->product','$this->description','$this->unit','$this->price')
    ");

    if($query){
      return true;
    }else{
      return false;
    }

  }

  public function select($var=null)
  {
    if($var){
      $query = mysqli_query($this->db_con, "SELECT * FROM products WHERE pid = '$var' OR product like '$var%' OR description like '%$var%' ");
    }else{
      $query = mysqli_query($this->db_con, "SELECT * FROM products");
    }
    return $query;
  }

  public function update($product,$description,$unit,$price){
    $this->product = $product;
    $this->description = $description;
    $this->unit = $unit;
    $this->price = $price;
    $query = mysqli_query($this->db_con,"
          UPDATE products 
          SET 
            product = '".$this->product."',
            description = '".$this->description."',
            unit = '".$this->unit."',
            price = '".$this->price."'
    ")or die(mysqli_error($this->db_con));

    if($query){
      return true;
    }else{
      return false;
    }
  }
}
?>