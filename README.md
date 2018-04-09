The web application is hosted on localhost using the free application that can be found at the link http://www.wampserver.com/ and download.
After installing the wamp server - the whole folder (new) located in the SOURCE folder will be placed in the www folder that you can find at the place where you installed the wamp server.
Wamp server will start by double-clicking on the wampmanager or via the command prompt with the start wampmanager command, and if you run it through a command prompt, you should be careful that you are in the directory of the wamp server itself.
The next thing you need to do is create your database. With the help of the GenarateTables and DataTest scripts stored in the SOURCE folder, you create tables and fill them with data.
In addition to starting the server, you need to be connected to your database additionally. Connection is enabled using the init.php file that is located in the SOURCE / new folder itself, and you need to make several changes :
• $ dbuser = 'username';
• $ dbpass = 'password';
• $ dbname = 'database name';
• $ conn = pg_connect ("host = localhost port = 5432 dbname = databaseName user = username password = password");
After starting a wamp server and successfully connecting to your database by typing localhost / new in your web browser, you will be able to see the initial appearance of the web application.
In our SOURCE folder, all the files and data you need for the full functionality of the web application are stored, including the style style file for better appearance of the web application itself.
The Web application consists of several images in order to achieve better visualization, but they are not placed in the SOURCE folder for space saving.
If you want to achieve the same look of the web application you need several images that need to be placed in a special folder images that you will need to create yourself and place them in the new folder that are located in the SOURCE folder itself.
Besides the full visualization of the web application, you will also need a style.css file that should be placed just like images in the images folder.
Images and file from style.css will be attached to the following link:
https://drive.google.com/file/d/1O_fuBSou1ey2O9jpGtx7CWcL_nJR6CmE/view?usp=sharing


To access the Admin panel, use the username: mmarkov and the mmarkov password.
In our application there are several main sections that are used for full functionality for the web application.
Home page containing information about schools and announcements.
The Section section contains the information for each department separately.
The Sports section contains information about the schools that are present in the sports center including names and coaches.
The Calendar section contains terms for today and tomorrow with information about time. Additionally, with the button button, the given terms can be scheduled through a special form that contains information about the name, email and phone number of the user who wants to schedule the term. With each scheduling of a given term its capacity is reduced by one. The disabled button represents a filled capacity for a given term.
The Contact section contains information about the sports center itself, such as email, phone number and address.
By Login Form, you are logged in to the Admin panel of the web application using the above username and password.
The Admin panel contains submenus for adding and deleting data from the Database.
Add submenus to add employees, users, terms, coaches, departments and sports.
Deleting submenus deletes the above data.
