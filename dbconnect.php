<?php
/**
 * Created by PhpStorm.
 * User: gerry
 * Date: 2.11.2016 г.
 * Time: 15:00
 */

define('DB_SERVER','eu-cdbr-azure-north-e.cloudapp.net');
define('DB_USERNAME','bf059db43a1be2');
define('DB_PASSWORD','a1369579');
define('DB_DATABASE','sms');

$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$db=new mysqli(
    'eu-cdbr-azure-north-e.cloudapp.net',
    'bf059db43a1be2',
    'a1369579',
    'sms'
);


if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}