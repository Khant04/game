Hello This is Essence Laundary,

First, You have to install laravel,
To install you need to install composer first,
Then install the xampp
And then you must have local server and database (recommend xampp)
Check the xampp mysqsl port number abd change prots number in ".env" file in the project
And you must have the same name with the one database in mysql and same name with ".env" that in the file

Second, you need to open the xampp and then start the Apache server port and MySQL port
And then open the file of the PS Trade and press the "Shift" key on the keyboard and click the right click with mouse 
(Shift + Right click)
Then you need to click the powershell window
And then you need to run below command
"php artisan migrate:fresh" This command to reset the database
And the run the command "php artisan serve" to run the file

Third, you need to open the browser like - firefox, chrome, etc.
Then enter the localhost like - localhost:8000 or localhost:8080
