<?php
//PHP structure based on Coyier, C. (2019) PHP Templating in Just PHP | CSS-Tricks. Available at: https://css-tricks.com/php-templating-in-just-php/ (Accessed: 28 March 2021).
$html =  '
<!-- 
    *    Title: Lab 06 - Sample Solution
    *    Author: City University of london
    *    Date: 2021
    *    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172
    *    Changes: Based on the footer from about.html page from lab 6, layout and population of the website were changed. 

    
 -->
<!-- Footer -->
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Lose The L</h5>
                    <p><em>Copyright &copy; 2020 Lose The L</em></p>

                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact us</h5>

                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt"></i>9 King Street, London, EC1A 0XZ</li>
                        <li><i class="fas fa-phone"></i>+44 020 034 0629</li>
                        <li><i class="fas fa-envelope"></i>booknow@LoseTheL.co.uk</li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Disclaimer</h5>

                    <p>
                        Lose The L is a fictitious brand created solely for the purpose of the assessment of IN1010 module at City, 
                        University of London, UK. All products and people associated with Lose The L are also fictitious. 
                        Any resemblance to real brands, products, or people is purely coincidental. Information provided about the product is also fictitious 
                        and should not be construed to be representative of actual products on the market in a similar product category                    
                    </p>                
            </div>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    

    </body>
    </html>';
    echo $html;
?>