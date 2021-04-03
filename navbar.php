<?php
session_start();
//PHP structure based on Coyier, C. (2019) PHP Templating in Just PHP | CSS-Tricks. Available at: https://css-tricks.com/php-templating-in-just-php/ (Accessed: 28 March 2021).
$html = '<!DOCTYPE html>
<head>
    <!-- 
        *    Title: Lab 06 - Sample Solution
        *    Author: City University of london
        *    Date: 2021
        *    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172
        *    Changes: Based on the navbar about.html page in lab 6, layout and population of the website were changed adjustments to the calendar were made here so that it would be in the correct format when its called..
    -->
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <title>Lose The L</title>

   <!-- CSS -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/media-queries.css">
   <link rel="stylesheet" href="assets/css/CalendarPicker.style.css">
   <link rel="icon" href="assets/img/images/l-plate-jumbo-badge-11378-p.jpg" type="image/jpg" sizes="16x16">
   <style>

   <!-- 
    *    Title: CalendarPickerJS
    *    Author: MathiasWP
    *    Date: December 12, 2020
    *    Availability: https://github.com/MathiasWP/CalendarPickerJS
 -->
    #myCalendarWrapper {
        width: 35em;
        padding: 2em 4em;
        position: relative;
        font-size: 1rem;
        margin: 2rem auto 5rem;
        background-color: #fff;
    }
    </style>';


$html .= '<title>' . $pageTitle .'</title>';
$user = $_SESSION['username'];
$html .=   '</head>

<body>
    <!-- Menu -->
    <nav class="navbar navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Lose The L</a>

            <!-- Burger menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Text menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="booking.php">Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login/Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';
    echo $html;
?>