<!-- 
    *    Title: Lab 08 - Sample Solution
    *    Author: City University of london
    *    Date: 2021
    *    Availability: https://moodle.city.ac.uk/mod/resource/view.php?id=1846832
    *    Changes: Based on the login.php file from lab 8, variable names and data beign sent into the data based were altered to meet the database requirements.

    
 -->
<?php
    if(!isset($_SESSION)) {
        session_start(); // start the session if it still does not exist
    }

   // connect to the database
	$conn = new mysqli('smcse-stuproj00.city.ac.uk','adbs864','200008250','adbs864'); 
    if ($db->connect_errno) {
        printf("Connection failed: %s\n", $db->connect_error);
        exit();
    } else {
        // declare variables containing values from the input fields of the login form
        //the values come from the *name* attributes of the input fields
        $userLogin = $_POST['login_username'];
        $userPass = $_POST['login_pwd'];

        $hashed_pword = md5($userPass);

        // select the username and password fields which match the data entered in the input fields
        $query = "SELECT Username, Password FROM userDetails WHERE Username = '$userLogin' AND Password = '$hashed_pword'";
        // execute the query
        $result = $conn->query($query);
        // store the results in $row variable
        $row = mysqli_fetch_row($result);

        // if there is a match then activate a custom session called 'username' which allows access to a new web page called appointments
        if ($userLogin == $row[0] && $hashed_pword == $row[1]) {
            $_SESSION['username'] = $userLogin;

            // redirect to this page
            header("Location: booking.php");
        }else{
            // this will alert the user and then redirect to the specified page (Change the URL)
            echo "<script language='javascript'>
                    alert('Please enter valid credentials.');
                    window.location.href = 'https://smcse.city.ac.uk/student/adbs864/login.php';
                  </script>";
        }
    }
?>