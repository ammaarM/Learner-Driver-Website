<?php
//PHP structure based on Coyier, C. (2019) PHP Templating in Just PHP | CSS-Tricks. Available at: https://css-tricks.com/php-templating-in-just-php/ (Accessed: 28 March 2021).
$pageTitle = 'Lose The L - About Us';
require_once "navbar.php";
?>

<!-- 
    image sources:
    https://www.thesun.co.uk/wp-content/uploads/2019/07/NINTCHDBPICT000504832617-e1562980210607.jpg?w=670
 -->
    <!-- Top content -->
    <div class="top-content section-container-image-bg">
        <div class="container">
            <!-- Title and description row -->
            <div class="row">
                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h1>About Us</h1>
                </div>
            </div>
            <!-- End title and description row -->
        </div>
    </div>

    <!-- Description -->
    <div class="section-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col section-1 section-description wow fadeIn">
                    <h2>Description</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 section-1-box wow fadeInUp">
                    <p class="medium-paragraph">
                        Here are Lose The L we provide high quality driving lessons for all types of learner drivers.
                        We aim to help to help you master driving in the most efficient and safest way possible. 
                    </p>
                </div>
                <div class="col-md-6 section-1-box wow fadeInDown">
                    <img src="https://cdn.images.express.co.uk/img/dynamic/24/590x/secondary/Driving-lessons-latest-2464063.jpg?r=1591771069035">
                    <!-- 
                        Image Source:
                        Author: www.express.co.uk
                        https://cdn.images.express.co.uk/img/dynamic/24/590x/secondary/Driving-lessons-latest-2464063.jpg?r=1591771069035 -->
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews -->
    <div class="section-3-container section-container">
        <div class="container">

            <div class="row">
                <div class="col section-3 section-description wow fadeIn">
                    <h2>Reviews</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-3-box-icon">
                                <i class="far fa-address-card"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3>Ahmed, Hull</h3>
                            <p>
                                "Very happy with the support and service provided."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-3-box-icon">
                                <i class="far fa-address-card"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3>Aadhil, Hemel Hempsted</h3>
                            <p>
                                "Friendly instuctor and very affordable price."
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-3-box-icon">
                                <i class="far fa-address-card"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3>Nabeel, Leeds</h3>
                            <p>
                                "Taught me so much more about how to use the clutch than previous instuctors."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-3-box-icon">
                                <i class="far fa-address-card"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3>Hassan, Swansea</h3>
                            <p>
                                "I learnt to drive super fast with these instuctors!"
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
<?php
require_once "footer.php";
?>
