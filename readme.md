## saveUrl web app
Saves URLs. CRD functionality. Multi-user.
App written using PHP5, MySQL, Laravel 5.1, HTML5, CSS3, JavaScript, jQuery, DataTables plugin.
Athanasios Emmanouilidis 2015, MIT LICENSE.

![ScreenShot](http://s9.postimg.org/konupiptb/save_Url_Screenshot.png)

Prerequisites:
--------------
1. PHP 5.4+
2. Server<br>
    i) For windows preferably XAMMP - https://www.apachefriends.org<br>
    ii) For Linux preferably LAMP<br>
    iii) For unix preferably MAMP
3. MySQL

Instructions for Windows:
---------------------------------
1. Install XAMPP.
2. Start webserver and MySQL from the XAMMP control panel.
3. Download latest release of saveUrl.
4. Extract and Copy the directory called 'saveUrl-x.x' in your htdocs folder. Then rename it to 'saveurl'.
5. Create a mysql database called 'saveurl' with user 'saveurl' and password 'saveurl'.
6. The details are pre-configured in <strong>saveurl\config\database.php</strong>  file. In this file you need to provide the database details for the program to work.
7. Open cmd.exe, go to 'saveurl' folder and type <code>composer update --no-scripts</code>. After this finishes run <code>php artisan migrate</code> to create the tables. If you get error running <code>php artisan migrate</code> then run <code>composer dump-autoload</code>.
8. Open your favourite browser and navigate to the url.<br>
    i) If screen is blank try changing permissions of <strong>saveurl\storage</strong> to 775 or 777.
9. Have fun and send me comments or contribute to the project.

Instructions for Linux/Unix:
---------------------------------
1. Install LAMP/MAMP.
2. Download latest release of saveUrl.
3. Extract/Copy the directory called 'saveUrl-x.x' in your server[usually /var/www/html] folder. Then rename it to 'saveurl'.
4. Create a mysql database called 'saveurl' with user 'saveurl' and password 'saveurl'.
5. The details are pre-configured in <strong>saveurl/config/database.php</strong> file. In this file you need to provide the database details for the program to work.
6. Open the terminal and change directory to 'saveurl' folder. Type <code>composer update --no-scripts</code>. After updating the composer  use <code>php artisan migrate</code>.
7. Open your favourite browser and navigate to the url.<br>
    i) If screen is blank try changing permissions of <strong>saveurl/storage</strong> to 775 or 777.
8. Have fun and send me comments or contribute to the project.
