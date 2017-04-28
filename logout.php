<?php

/* Destroys the current session of the user and redirects the user to the login page */

session_start();
session_destroy();
header('location: login.php');
 ?>
