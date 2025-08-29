A simple script to test a LAMP build for Apache, MySQL and PHP functionality.

Thsi script is written in php and was tested on an Ubuntu Linux server running Apache2, Mysql and PHP.

This script checks the following;
* Apache web server - if the script runs then Apache is up (there may be some errors)
* The MySQL database is accessible on localhost using the username of root and the password of supers3cret!1234 (change these credentials accordingly)
* PHP - If everything executes cleanly then it shows that PHP is working.

  Note, this code has zero error checking, so if any errors such as incorrect credentials, database server hostname, etc, it will simply bomb out with Internal Server Error 500.

  So be aware that this code is purely to test the functionality and will report back if everything is OK. Anything else will cause an error.

  Enjoy!

  F1lby  (29 August 2025)
  
