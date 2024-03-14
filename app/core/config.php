<?php


if($_SERVER['SERVER_NAME'] =='localhost'){

    /** database config **/
	define('DBNAME', 'mvctwo_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

    define('ROOT','http://localhost/mvctwo/public');
}else{
    /** database config **/
	define('DBNAME', 'mvctwo_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
    define('ROOT','https://www.mydomain.com');

};