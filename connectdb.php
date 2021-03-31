<?php 
//PHP structure based on Coyier, C. (2019) PHP Templating in Just PHP | CSS-Tricks. Available at: https://css-tricks.com/php-templating-in-just-php/ (Accessed: 28 March 2021).
 $db = new mysqli('smcse-stuproj00.city.ac.uk','adbs864','200008250','adbs864'); 
 if ($db->connect_error) { 
 printf("Connection failed: %s/n" . $db->connect_error); 
 exit(); 
 } else { 
    echo "Database connected successfully!"; 
    } 
?> 