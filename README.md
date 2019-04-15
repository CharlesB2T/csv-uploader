# csv-uploader
This is simple form with  which to import data from and export data to CSV files using PHP and MySQL. 
This is an untested example and I should add validations and further calculations.

The goal of the programme is to display total cost per expense category; not just the CSV data in full.

The SQL file should create a table called 'expensesinfo' in the database. The table will be used to insert data from the CSV file.

To create a MySQL connection in PHP for importing and exporting database in MySQL we have the file 'config.php.'

For a user to import a CSV to MySQL there is the file 'index.phtml' which is rendered using a simple Bootstrap form.
In 'index.phtml' there is an action to 'indexController.php' with the method 'get_all_records()'.
This action should fetch all records from the database and display the records in the table in the index page.

Within the 'indexController.php' file we have function A for, if(isset($_POST["import"])){} where the data is save in $getData during the while loop and then is inserted into 'expensesinfo' table when complete.

Also, within the 'indexController.php' file we have function B that displays all data. It's a simple function, initialised in 'index.phtml', "get_all_records".

To export the MySQL databse to a CSV file, we have an "export" button in the 'index.phtml' and a function C, which if(isset($_POST["Export])){}
