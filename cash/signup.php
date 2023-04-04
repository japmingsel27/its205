<?php 
  include('db.php');
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
  <center>
    <fieldset>
      <legend>Signup</legend>
      <?php 
        if(isset($_POST['save'])){
          
          if($_POST['pword'] == $_POST['vpword']){

            $insertToDB = mysqli_query($con, "
              INSERT INTO users(fname,mname,lname,email,password)
              VALUES('".$_POST['fname']."','".$_POST['mname']."','".$_POST['lname']."','".$_POST['email']."','".sha1($_POST['pword'])."')
            ");

            if($insertToDB){
              echo "User Successfully Registered";
            }else{
              echo "Error";
            }
          }else{
            echo "Password Not Matched";
          }
        }
      ?>
      <form method="post">
        <input type="text" name="fname" placeholder="First Name" required><br>
        <input type="text" name="mname" placeholder="Middle Name"><br>
        <input type="text" name="lname" placeholder="Last Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="pword" placeholder="Password" required><br>
        <input type="password" name="vpword" placeholder="Verify Password" required><br>
        <button type="submit" name="save">SAVE</button>
      </form>
      <a href="index.php">Back to login</a>
    </fieldset>
  </center>
</body>
</html>