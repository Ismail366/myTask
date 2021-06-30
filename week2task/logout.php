<?php
session_start();
session_unset();
session_destroy();
echo "<h3> Good bye</h3>";
?>
