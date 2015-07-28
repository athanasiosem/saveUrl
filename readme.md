## saveUrl web app
Saves URLs. CRD functionality.
App written using PHP5, MySQL, Laravel 5.1, HTML5, CSS3, JavaScript, jQuery, DataTables plugin.
Athanasios Emmanouilidis 2015, MIT LICENSE.

![ScreenShot](http://s9.postimg.org/konupiptb/save_Url_Screenshot.png)

Prerequisites:
--------------
1. A web server with PHP 5.6.8 support.
2. MySQL installed.

Install instructions:
---------------------
0. Download release v.1.0 - https://github.com/athanasiosem/saveUrl/archive/v1.0.zip
1. Extract and Copy all files to a directory called 'saveurl' on your htdocs folder.
2. Create a mysql database called 'saveurl' with user 'saveurl' and password 'saveurl'.
3. Those details are already inserted in config/database.php  file. Also in saveurl\public\server_side\server_processing.php. These are the two locations you need to put the database details for the program to work.
4. Create the database by running php artisan migrate. 
5. Create a user at saveurl/public/auth/register and login with this user details. NOTE: the app is not multi user yet ! The same data exists for all users!
6. Have fun and send me comments or contribute to the project.

