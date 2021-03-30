<?php 
 $db = new mysqli('unix.city.ac.uk','adbs864','password','database'); 
 if ($db->connect_error) { 
 printf("Connection failed: %s/n" . $db->connect_error); 
 exit(); 
 } 
?> 