# Laravel Stored Procedure
[![license](https://img.shields.io/github/license/mashape/apistatus.svg?maxAge=2592000)](https://github.com/kaviranga/laravel_stored_procedure/blob/master/LICENSE)

This project includes script that can handle mysql stored procedures using laravel framework.
This version supports currently for laravel 5.0 beta,5.1,and 5.2 and mysql version 5.5*.
I want your feedback for this project for the future improvements.Comments are welcome! 

Thank you!

## Issues

* If you found a error, please send an e-mail to laravelportal[at]gmail[dot]com or,
* Mention in the issues

## How to install this ?

It is simple and easy!
* First clone this repsitory to your local machine using the command in terminal window ***"git clone git@github.com:kaviranga/laravel_stored_procedure.git"***.
* For Windows users ,if your are running wamp stack clone this repo to ***"c:\wamp\www"*** folder.
* For linux users first you have to install "LAMP" stack to your computer. After that clone this repository to ***"/var/www/html/"*** folder.

## How to create database and tables needed to this project ? 
* First you have to create database schema for this by issuing the command ***"create schema nerds;"*** in mysql command line interface.
* Then by issuing the command ***"use nerds;"*** you are able use that database.
* Then you have to create the tables for the database by issuing the following command 
  ``` 
      CREATE TABLE IF NOT EXISTS 'document_details' (
      'id' int(11) NOT NULL AUTO_INCREMENT,
      'document_name' varchar(100) NOT NULL DEFAULT '',
      'document_path' varchar(100) NOT NULL DEFAULT '',
      PRIMARY KEY ('id')
      ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
  ```
* After that you must create the stored procedure like below
   ```
      DELIMITER//
      CREATE PROCEDURE sp_insert_document_details
      (IN name VARCHAR(100), IN path VARCHAR(100) )
        BEGIN
          INSERT INTO document_details(document_name,document_path) VALUES (name,path);
        END//
      DELIMITER;  
   ```
* Now you are ready to run the project.

## How to run this project ? 
* To run this first you must locate to your project folder , ***"c:\wamp\www\laravel_stored_procedure"*** in windows commmand prompt or ***"/var/www/html/laravel_stored_procedure"*** in linux terminal window.
* Then isssue this command in command line window ***"php -S localhost:8888 -t publlic"*** on windows or linux.
* Then navigate to the url ***"http://localhost:8888/documents/send"*** and you can view the web interface of the project.
* Then you can type some values in the two input boxes and send that data to the mysql database tables.

## Important!
* You must edit ***".env"*** file to include the database parameters according to your computers configurations.
* This is the speediest way to handling data with laravel.Because stored procedure faster than traditional sql queries. 

## License
* The Laravel Stored Procedure project is open-sourced software licensed under the MIT licence.
