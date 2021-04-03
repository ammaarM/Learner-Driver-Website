<!-- 
    *    Title: Lab 08 - Sample Solution
    *    Author: City University of london
    *    Date: 2021
    *    Availability: https://moodle.city.ac.uk/mod/resource/view.php?id=1846832
    *    Changes: Based on the register.php file from lab 8, variable names and data beign sent into the data based were altered to meet the database requirements.   

    
 -->
<?php
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
        $username = $conn->real_escape_string($_POST['username']);
        $firstName = $conn->real_escape_string($_POST['firstname']);
        $lastName = $conn->real_escape_string($_POST['lastname']);
        $mobile = $conn->real_escape_string($_POST['phone']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['psw']);

        $hashed_pword = md5($password); // encrypt the given password
        
        // this is for back-end form validation
        // query that selects the username field
        $query_username = "SELECT username FROM userDetails WHERE username = '$username'";
        // execute the query
        $res_username = mysqli_query($conn, $query_username);

        // if the username entered by the user already exists, then create an alert and redirect to login page
        if (mysqli_num_rows($res_username) > 0) {
            echo "<script language='javascript'>
                    alert('Username already taken. Registration failed.');
                    window.location.href = 'https://smcse.city.ac.uk/student/adbs864/login.php';
                    </script>";
        }
        // if the username does not exist then...
        else {
            // insert values from the input fields to the database
            //username, fName, lName, mobile, email, password = names of columns you created in your database
            mysqli_query($conn, "INSERT INTO userDetails (Username, FirstName, LastName, number, Email, Password)
            VALUES ('$username', '$firstName', '$lastName', '$mobile', '$email', '$hashed_pword')")
                
            or die(mysqli_error($conn)); // cancel if there is an error

            // then redirect the user to the same page and log in (change to appropriate URL)
            echo "<script language='javascript'>
                    alert('Registered successfully!')
                    window.location.href = 'https://smcse.city.ac.uk/student/adbs864/login.php ';
                    </script>";
        }
    }
?>
