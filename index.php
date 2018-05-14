<?php
include('core/mvc.php');
//include("core/autoloader.php"); //TODO

use core\classes\database;

//settings
$SITE_CONF = parse_ini_file('core/config/config.ini');

if($SITE_CONF['APP_DEBUG'])
{
    error_reporting(-1);
}
else
{
    error_reporting(0);
}







?>  