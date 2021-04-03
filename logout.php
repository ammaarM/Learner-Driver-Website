<!-- 
    *    Title: Lab 08 - Sample Solution
    *    Author: City University of london
    *    Date: 2021
    *    Availability: https://moodle.city.ac.uk/mod/resource/view.php?id=1846832
    *    Changes: no changes were made.

    Based on the logout.php file from lab 8.
 -->
<?php
    session_start();
    unset($_SESSION['username']); // disable the username session

    // end the session
    session_destroy();
    header("Location: login.php"); // redirect back to the form
?>