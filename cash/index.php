<?php 
  include('db.php');
  session_start();

  if(isset($_SESSION['userid'])){
    header("location: home.php");
   
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
  <center>
    <fieldset>
      <legend>Login</legend>
      <?php 
        if(isset($_POST['go'])){
          $email = $_POST['email'];
          $password = sha1($_POST['password']);

          $getUser = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND password='$password' ");

          if($getUser){
        
            $userArray = mysqli_fetch_array($getUser);

              $_SESSION['userid'] = $userArray['userid'];
              $_SESSION['fname'] = $userArray['fname'];
              $_SESSION['mname'] = $userArray['mname'];
              $_SESSION['lname'] = $userArray['lname'];

              header("location: home.php");
              
          }else{
            echo "user not found";
          }
 

        }
      ?>
      <form method="post">
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit" name="go">GO</button>
      </form>
      <a href="signup.php">Not registered?</a>
    </fieldset>
  </center>
</body>
</html>