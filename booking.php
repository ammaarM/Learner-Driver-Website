<!-- 
    *    Title: Lab 06 - Sample Solution
    *    Author: City University of london
    *    Date: 2021
    *    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172
    *    Changes: Based on the login.html page from lab 6, layout and population of the website were changed as well as the inputs being changed and a calendar being added to the page. 
    

    
 -->
<?php
//PHP structure based on Coyier, C. (2019) PHP Templating in Just PHP | CSS-Tricks. Available at: https://css-tricks.com/php-templating-in-just-php/ (Accessed: 28 March 2021).
$pageTitle = 'Lose The L - About Us';
require_once "navbar.php";
?>
    <body class="light">
    <!-- Section -->
    <section class="section-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col section-1 section-description wow fadeIn">
                    <h1 style="margin-top: 3em">Book Your lesson now</h1>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
        </div>
    </section>
    <!-- 
        *    Title: Lab 06 - Sample Solution
        *    Author: City University of london
        *    Date: 2021
        *    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172

        Based on the footer from about.html page from lab 6
    -->
    <h2>Booking</h2>
     <p>Please fill in this form to book an appointment:</p>

    <div id="myCalendarWrapper"></div>
    <!-- Main content -->
    <main class="section-2-container section-container section-container-gray-bg">
        <div class="container">
            <div class="row">
                <!-- Booking form -->
                <div class="col-md-6 section-3-box wow fadeIn">
                    <form method="post" action="book.php" id="register-form">
                        <div class="container">
                            <fieldset class="fields" id="fieldset1">
                                
                            
                                <div class="input-type-1">
                                    <label for="date"><b>Date</b></label>
                                    <input type="text" placeholder="Enter the date you want" name="book_date" id="book_date" maxlength="20">
                                    <small id="bookUsernameTag">Error Message</small>
                                </div>

                                <div class="input-type-1">
                                    <label for="time"><b>Time</b></label>
                                    <input type="number" placeholder="Enter the time you want eg:1200" name="book_time" maxlength="5" id="book_time">
                                    <small id="bookDateTag">Error Message</small>
                                </div>
                                <div class="input-type-1">
                                    <button type="submit" class="registerbtn" id="regBtn">Book Now</button>
                                </div>

                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/js/CalendarPicker.js"></script>
    <script>
        const nextYear = new Date().getFullYear() + 1;
        const myCalender = new CalendarPicker('#myCalendarWrapper', {
            // If max < min or min > max then the only available day will be today.
            min: new Date(),
            max: new Date(nextYear, 10) // NOTE: new Date(nextYear, 10) is "Sun Nov 01 <nextYear>"
        });
    
        const currentToDateString = document.getElementById('book_date');
        currentToDateString.value = myCalender.value.toDateString();
    
        myCalender.onValueChange((currentValue) => {
            currentToDateString.value = currentValue.toDateString();
    
            console.log(`The current value of the calendar is: ${currentValue}`);
        });
    </script>

<?php
require_once "footer.php";
?>