<?php
/**
 * Created by PhpStorm.
 * User: gerry
 * Date: 2.11.2016 г.
 * Time: 15:00
 */

define('DB_SERVER','servername');
define('DB_USERNAME','username');
define('DB_PASSWORD','password');
define('DB_DATABASE','database');

$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);