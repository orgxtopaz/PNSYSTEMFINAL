<!-- ENDING THE SESSION EMAIL LOGOUT -->
<?php 

session_start();
unset($_SESSION["user"]);

header('location:/pnsystem/day1/landingpage.php');

?>