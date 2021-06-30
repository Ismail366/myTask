<?php
session_start();
?>

<!DOCTYPE html>
<html>   
<?php
session_start();
?>
<head>
    <title></title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <h1>Registration Form</h1>
      <br>
      Firt Name:<input type="text"name="fname"placeholder="Enter your First Name"required>
      <br>
      Surname:<input type="text" name="sname"placeholder="Enter your Surname"required>
      <br>
      Email:<input type="email"name="email"placeholder="E-mail"required>
      <br>
      Password:<input type="password" name="password"placeholder="set a password"required>
      <br>
      <input type= "submit" name = "submit"value ="Register">
      <br>
      <hr>
  </form>
  <?php
  if(isset($_POST["submit"])){
      echo "You have successfully registered!";
      echo "<br>";
      
  }
$email = $_POST["email"];
$password = $_POST["password"];
$_SESSION["email"]= $email;
$_SESSION["password"] = $password;
 
?>
  <button><a href="login.php">Login</a></button>
  
</body>
</html>
