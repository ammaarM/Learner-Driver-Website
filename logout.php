<?php
    session_start();
    unset($_SESSION['username']); // disable the username session

    // end the session
    session_destroy();
    header("Location: form.php"); // redirect back to the form
?>