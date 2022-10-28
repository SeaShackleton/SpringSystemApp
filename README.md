
## About Project

This was a project I put together as part of a challenge. The challenge rules are:

The purpose of this challenge is to test your ability to come up with solutions on your own. In this challenge you will write actual code for a small web application that will collect information using an online form.  The web application should collect the name and address of a company and store it into a database. The web application will need information about the company, as well as company employees. 

- There can be multiple employees per company. 
- The application will need a way to show all companies and the number of employees per company in a table. 
- Likewise the application will need to show each employee and their respective companies.
- Please use proper validation and data filtering when collecting information using the online form. 
- Write the SQL queries to create the database that will store this data. 

## SQL files

Within the sql directory there are 2 sql files. Either run one OR the other along with the proper commandline.
1. Run the full.sql will build the entire database and the app will be able to run
2. Run the with_artisan.sql and it will create the database and proper user account. Also, you will need to run the following command within the app directory so where Laravel can build out the database correctly: 

```php
php artisan migrate
```

## Viewing

Either run this on a webserver OR you can run this app like this:

```php
php artisan serve
```

Or if on a remote machine
```php
php artisan serve --host xxx.xxx.xxx.xxx --port xxxx
```
