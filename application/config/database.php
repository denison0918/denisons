<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'cardb';
$active_record = TRUE;

//$db['default']['hostname'] = 'cherishdrs.copozakymfyv.ap-northeast-2.rds.amazonaws.com';
$db['default']['hostname'] = 'tiny-testing.cl9gyacbmh33.ap-northeast-2.rds.amazonaws.com';

$db['default']['username'] = 'WebMaster';
$db['default']['password'] = '1q2w3e4r!';
$db['default']['database'] = 'mydb';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

//$db['cardb']['hostname'] = 'cherishdrs.copozakymfyv.ap-northeast-2.rds.amazonaws.com';
$db['cardb']['hostname'] = 'tiny-testing.cl9gyacbmh33.ap-northeast-2.rds.amazonaws.com';
$db['cardb']['username'] = 'WebMaster';
$db['cardb']['password'] = '1q2w3e4r!';
$db['cardb']['database'] = 'cardb';
$db['cardb']['dbdriver'] = 'mysql';
$db['cardb']['dbprefix'] = '';
$db['cardb']['pconnect'] = TRUE;
$db['cardb']['db_debug'] = TRUE;
$db['cardb']['cache_on'] = FALSE;
$db['cardb']['cachedir'] = '';
$db['cardb']['char_set'] = 'utf8';
$db['cardb']['dbcollat'] = 'utf8_general_ci';
$db['cardb']['swap_pre'] = '';
$db['cardb']['autoinit'] = TRUE;
$db['cardb']['stricton'] = FALSE;


$db['cardamdb']['hostname'] = 'tiny-testing.cl9gyacbmh33.ap-northeast-2.rds.amazonaws.com';
$db['cardamdb']['username'] = 'WebMaster';
$db['cardamdb']['password'] = '1q2w3e4r!';
$db['cardamdb']['database'] = 'cardam_r';
$db['cardamdb']['dbdriver'] = 'mysql';
$db['cardamdb']['dbprefix'] = '';
$db['cardamdb']['pconnect'] = TRUE;
$db['cardamdb']['db_debug'] = TRUE;
$db['cardamdb']['cache_on'] = FALSE;
$db['cardamdb']['cachedir'] = '';
$db['cardamdb']['char_set'] = 'utf8mb4';
$db['cardamdb']['dbcollat'] = 'utf8mb4_general_ci';
$db['cardamdb']['swap_pre'] = '';
$db['cardamdb']['autoinit'] = TRUE;
$db['cardamdb']['stricton'] = FALSE;

/*
$db['cherishdb']['hostname'] = 'cherishdrs.copozakymfyv.ap-northeast-2.rds.amazonaws.com';
$db['cherishdb']['username'] = 'WebMaster';
$db['cherishdb']['password'] = '1q2w3e4r!';
$db['cherishdb']['database'] = 'mydb';
$db['cherishdb']['dbdriver'] = 'mysql';
$db['cherishdb']['dbprefix'] = '';
$db['cherishdb']['pconnect'] = TRUE;
$db['cherishdb']['db_debug'] = TRUE;
$db['cherishdb']['cache_on'] = FALSE;
$db['cherishdb']['cachedir'] = '';
$db['cherishdb']['char_set'] = 'utf8';
$db['cherishdb']['dbcollat'] = 'utf8_general_ci';
$db['cherishdb']['swap_pre'] = '';
$db['cherishdb']['autoinit'] = TRUE;
$db['cherishdb']['stricton'] = FALSE;
*/

/* End of file database.php */
/* Location: ./application/config/database.php */