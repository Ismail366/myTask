<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <?php
    session_start();
    ?>
    <body>
        <form action ="login.php" method="POST">
            Email:<input type ="email" name ="email"placeholder="Enter your email address"required>
            <br>
            Password:<input type="password"name="password"placeholder="Enter your password"required>
            <br>
            <input type="submit"name = "submit" value="Login">
            <br>
            
        </form>
        <?php
        if(isset($_POST["submit"])){
            if($_POST["email"] == $_SESSION["email"] && $_POST["password"] == $_SESSION["password"]){
                echo "Login Successfull!";
                echo "<br>";
                echo "<button><a href= 'user.php'>Go to user page</a></button>";
            } else{
                echo "Invalid email address or password!";
            }
        }
        
        
    ?>    
    </body>
    
    
</html>
