## saveUrl web app
Saves URLs. CRD functionality.
App written using PHP5, MySQL, Laravel 5.1, HTML5, CSS3, JavaScript, jQuery, DataTables plugin.
Athanasios Emmanouilidis 2015, MIT LICENSE.

![ScreenShot](http://s9.postimg.org/konupiptb/save_Url_Screenshot.png)

Prerequisites:
--------------
1. PHP 5.6.8 support [For windows preferably XAMMP - https://www.apachefriends.org].
2. Web server
    i) For windows preferably XAMMP - https://www.apachefriends.org
    ii) For Linux preferably LAMP
    iii) For unix preferably MAMP
3. MySQL installed.

Install instructions for Windows:
---------------------------------
1. Install XAMPP.
2. Start webserver and MySQL from the XAMMP control panel.
3. Download release v.1.0 - https://github.com/athanasiosem/saveUrl/archive/v1.0.zip
4. Extract and Copy the directory called 'saveUrl-1.0' on your htdocs folder. Then rename it to 'saveurl'.
5. Create a mysql database called 'saveurl' with user 'saveurl' and password 'saveurl'.
6. The details are pre-configured in saveurl\config\database.php  file. Also in saveurl\public\server_side\server_processing.php. These are the two locations you need to provide the database details for the program to work.
7. Open cmd.exe, go to 'saveurl' folder and type 'composer update --no-scripts'. After this finishes run 'php artisan migrate' to create the database. If you get error running 'php artisan migrate' then run 'composer dump-autoload'.
8. Have fun and send me comments or contribute to the project.

Install instructions for Linux/Unix:
---------------------------------
1. Install LAMP/MAMP.
2. Clone the repo or download release v.1.0 - https://github.com/athanasiosem/saveUrl/archive/v1.0.zip
3. Extract and Copy the directory called 'saveUrl-1.0' on your htdocs folder. Then rename it to 'saveurl'.
4. Create a mysql database called 'saveurl' with user 'saveurl' and password 'saveurl'.
5. The details are pre-configured in saveurl\config\database.php  file. Also in saveurl\public\server_side\server_processing.php. These are the two locations you need to provide the database details for the program to work.
6. Open the terminal and change directory to 'saveurl' folder. Type <code>composer update --no-scripts</code>. After updating the composer  use <code>php artisan migrate</code>.
7. Have fun and send me comments or contribute to the project.

</bold>NOTE: the app is not multi user yet ! The same data exists for all users!</bold>
