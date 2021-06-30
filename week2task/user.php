<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Page</title>
    </head>
    <body>
        <h2>User Page</h2>
        <?php
        echo "<p> Welcome ".$_SESSION['email']."</p>";
        echo "<p> Want to logout?</p>";
        echo "Click on the logout button below";
        echo "<br>";
        echo "<button><a href= 'logout.php'>Logout</a></button>";
       ?>
    </body>
</html>