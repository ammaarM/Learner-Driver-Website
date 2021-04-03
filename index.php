<?php
//PHP structure based on Coyier, C. (2019) PHP Templating in Just PHP | CSS-Tricks. Available at: https://css-tricks.com/php-templating-in-just-php/ (Accessed: 28 March 2021).
$pageTitle = 'Lose The L - Home';
require_once "navbar.php";
?>
    <!-- Top content -->
    <div class="top-content section-container-image-bg">
        <div class="container">
            <!-- Title and description row -->
            <div class="row">
                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h1>Welcome to Lose the L</h1>
                </div>
            </div>
            <!-- End title and description row -->
        </div>
    </div>

    <!-- Booking content -->
    <div class="section-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col section-1 section-description wow fadeIn">
                    <h2>Book Your First Lesson Now</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 section-1-box wow fadeInDown">
                    <img src="https://i2-prod.walesonline.co.uk/incoming/article18353855.ece/ALTERNATES/s810/0_MODEL-RELEASE-PICTURE-Driving-instructor-observing-learner-driver.jpg">
                    <!-- 
                        Image Source:
                        Author: www.Walesonline.co.uk
                        Site: https://i2-prod.walesonline.co.uk/incoming/article18353855.ece/ALTERNATES/s810/0_MODEL-RELEASE-PICTURE-Driving-instructor-observing-learner-driver.jpg -->
                </div>
                <div class="col-md-4 section-1-box wow fadeInUp">
                    <p class="medium-paragraph">
                        We are taking new customers in England with the first lesson being insured witha money back
                        guarantee if you don't like out services. Take advantage of our current special offers by booking online now.
                    </p>
                </div>
            </div>
        </div>
    </div>


<?php
require_once "footer.php";
?>
