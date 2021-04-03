<?php
    session_start();
    // connect to the database
    //use your moodle student name both as the login (second parameter) and the name of the database you are connecting to (last parameter)
    //the password is your student id number, which is nine digits long as the third parameter - the password
	$conn = new mysqli('smcse-stuproj00.city.ac.uk','adbs864','200008250','adbs864'); 
    if ($conn->connect_errno) {
        printf("Connection failed: %s\n", $conn->connect_error);
        exit();
    } else {
        // declare the variables for registration and assign values to these variables from the data entered by the user in the fields
        // real_escape_string makes data safe when sending a query to mySQL
        $username = $conn->real_escape_string($_SESSION['username']);
        $date = $conn->real_escape_string($_POST['book_date']);
        $time = $conn->real_escape_string($_POST['book_time']);
        
        // insert values from the input fields to the database
        mysqli_query($conn, "INSERT INTO bookingDetails (username, date, time)
        VALUES ('$username', '$date', '$time')")
            
        or die(mysqli_error($conn)); // cancel if there is an error
        // then redirect the user to the same page and log in (change to appropriate URL)
        echo "<script language='javascript'>
                alert('Booked successfully!')
                window.location.href = 'https://smcse.city.ac.uk/student/adbs864/index.php ';
                </script>";
    
    }
?>