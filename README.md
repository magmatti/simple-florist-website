# Simple Florist Website
This is a basic florist website developed for university purposes. The website is developed using HTML, CSS, Bootstrap, PHP and JavaScript.

*Requires XAMPP server installed on client's computer to run locally

## Getting Started
**Prerequisites**

* Make sure you have XAMPP installed on your computer. If not, download and install XAMPP [from here](https://www.apachefriends.org/download.html).
* Clone this repository using 
```bash
  git clone https://github.com/magmatti/simple-florist-website.git
```
* Copy cloned repository to ```xampp/htdocs``` directory

**Set up Database**

* Open phpMyAdmin by visiting http://localhost/phpmyadmin in your browser.
* Create a new database named ```florist_website``` for example.
* Create tables and feed data using SQL queries located in ```/sql``` project directory.

**Configure Database Connection**

* Open ```php/db_connection.php``` file and update the database credentials.
```php
<?php
    $servername = "localhost";
    $username = "root";
    $password = "YOUR_PASSWORD";
    $dbname = "florist_website";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Checking connection for failures
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
```
* Update the $servername, $username, $password, and $dbname variables with your database credentials.
*  *If you are using default configuration leave $username variable equal to "root" and set $password to blank string "".
```php
  $username = "root";
  $password = "";
```
   
**Run the website**

* Start XAMPP Control Panel
* Run Apache and MySQL modules
* Open your web browser and go to http://localhost/simple-florist-website.

## Screenshots

![Screenshot_27-2-2024_182221_127 0 0 1](https://github.com/magmatti/simple-florist-website/assets/64103440/eb553e2d-c9bf-47d2-b7e7-b1dc7d4efb72)
![Screenshot_27-2-2024_182729_127 0 0 1](https://github.com/magmatti/simple-florist-website/assets/64103440/60e6bb48-901b-4a8b-b6aa-9ea8b16d17e3)

## Contributing
Contributions are welcome! Feel free to submit pull requests to improve the functionality, design, or any other aspects of the website.


