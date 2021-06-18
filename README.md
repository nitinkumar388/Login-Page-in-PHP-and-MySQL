
# Login-Page-in-PHP-and-MySQL

Create a PHP MySQL Login System with the help of PHP and MySQL database. 

# Requirements

Text Editor - For writing the code. We can use any text editor such as Notepad, Notepad++, Dreamweaver, etc.

XAMPP - XAMPP is a cross-platform software, which stands for Cross-platform(X) Apache server (A), MySQL (M), PHP (P), Perl (P). XAMPP is a complete software package, so, we don't need to install all these separately.


# Environment Setup

Now, we need to start the webserver and create the files for the login system. There are few steps that are given below to setup the environment.


1. Open the XAMPP Control Panel.

2. Start the Apache server by clicking on the Start button.

3. Start the MySQL by clicking on the Start button.

4. Create all the files needed for login.

5. Create login table in the database using phpMyAdmin in XAMPP.


Now, we will create four files here for the login system.



1. index.html - This file is created for the GUI view of the login page and empty field validation.

2. style.css - This file is created for the attractive view of the login form.

3. connection.php - Connection file contains the connection code for database connectivity.

4. authentication.php - This file validates the form data with the database which is submitted by the user.


Save all these files in the htdocs folder inside the Xampp installation folder. The detailed description and code for these files are discussed below.


# index.html

First, design the login form for the website user to interact with it. This login form is created using html and also contains the empty field validation, which is written in JavaScript. The code for the index.html file is given below:

# style.css

Now, create style.css file to provide a more attractive view to the login form. The CSS code for the style.css file is given below:
## Acknowledgements

 - [Awesome Readme Templates](https://awesomeopensource.com/project/elangosundar/awesome-README-templates)
 - [Awesome README](https://github.com/matiassingers/awesome-readme)
 - [How to write a Good readme](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)


## Database and Table Creation

Access the phpMyAdmin on the browser using localhost/phpmyadmin/ and create a table in the database. create a database and table using GUI based phpMyAdmin rather than queries execution.

Click on New and enter the database name and then click on Create button.

Now create a login table in the database. Create a table by name login in the database which you have created earlier.

Specify the column Name and their Type and Length in the table in which we will store the username and password for the different users and save it by clicking on the save button.

Click on the insert, from where we can insert the records in columns. So insert the username and password here and click on Go button to save the record.


## How to run the login form?

To run the login form, open the xampp control panel and run the apache server and PHP.

Now, type localhost/xampp/folder name/file name in the browser and press Enter key.

All setup is done now. Enter the username and password in the login form and click the login button.

Here, we have inserted an incorrect username, so the user is unable to log in, and it will give the login failed error.


  
## Authors


- [@nitinkumar388](https://github.com/nitinkumar388)
## Badges

Add badges from somewhere like: [shields.io](https://shields.io/)

[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](https://github.com/tterb/atomic-design-ui/blob/master/LICENSEs)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)

  
## Contributing

Contributions are always welcome!

See `contributing.md` for ways to get started.

Please adhere to this project's `code of conduct`.

  
