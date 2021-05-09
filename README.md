# SMU-Advancement-And-Internalisation-Office
This repository contains a PHP App for Sefako Makgatho Advancement And Internalisation Office

## Steps to Setup the server-side app
1. **Clone the application**

	```bash
	git clone https://github.com/SbusisoSGT/SMU-Advancement-And-Internalisation-Office.git
	cd SMU-Advancement-And-Internalisation-Office
	```
  
2. **Create MySQL database**

	```bash
	create database i18noffice
	```

3. **Change MySQL username and password as per your MySQL installation**

	+ open `app/Config/Database.php` file.

	+ change `USERNAME` and `PASSWORD` properties as per your mysql installation
  
  
4. **Run Migrations**

    + run `database\migrations\create_funders_table_migration.sql` file.
    + run `database\migrations\create_donations_table_migration.sql` file. 
  
  After running the above SQL files for migration, you can now start adding funders and donations to your application.

  #### The Application is now ready to be used.
  
  
