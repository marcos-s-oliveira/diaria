<?php
if(isset($_GET['debug'])){
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
}else{
    error_reporting(E_ALL);
    ini_set('display_errors', FALSE);
    ini_set('display_startup_errors', FALSE);
}
$server = $_SERVER['SERVER_ADDR'];
const server = "127.0.0.1";
define('base', "../../../diaria/");
define('models', "app/models/");
define('views', "app/views/");
define('controllers', "app/controllers/");
define('classes', "app/classes/");
session_start();

require_once("app/core/app.php");
$app = new App;

