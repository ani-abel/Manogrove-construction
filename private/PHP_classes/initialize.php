<?php
/**
 * Created by PhpStorm.
 * User: WILDcard
 * Date: 6/6/2018
 * Time: 7:50 AM
 */
//define the core paths
//define them as absolute paths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR: is php defined constant
//for windows('\'),
//for unix('/')
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

//get the absolute path from the c:// drive to the current project directory
//this constant defines 'path' f
defined("SITE_ROOT") ? null : define("SITE_ROOT", DS.'xampp'.DS.'htdocs'.DS.'manogrove_construction');

defined("LIB_PATH") ? null : define("LIB_PATH", SITE_ROOT.DS.'PHP_classes');

defined("LIB") ? null : define("LIB", SITE_ROOT.DS.'Lib');

defined("IMAGE_MAGICIAN") ? null : define("IMAGE_MAGICIAN", LIB.DS."php-image-magician");

//define the REG-EX for the password to be used for checking password-strength throughout the site
defined("PASSWORD_PATTERN") ? null : define("PASSWORD_PATTERN",
    "/(^[a-z]{3,}\d{1,}[A-Z]{2,}|^\d{1,}[a-z]{3,}[A-Z]{2,}|^[A-Z]{2,}\d{1,}[a-z]{3,}|^[a-z]{3,}[A-Z]{2,}\d{1,}|^[A-Z]{2,}[a-z]{3,}\d{1,})/i");

$default_image_types = array(
    "jpg",
    "png",
    "gif",
    "jpeg",
);

defined("DEFAULT_IMAGE_SIZE") ? null : define("DEFAULT_IMAGE_SIZE", 3000000);//3mb

//set 'default timezone identifier' = "Africa/Lagos"
date_default_timezone_set('Africa/Lagos');

//define some mysql constants
//select
defined("SEL_ALL") ? null : define("SEL_ALL", "SELECT * FROM");
//insert
defined("INS") ? null : define("INS", "INSERT INTO");

//@Todo: change the pattern from "/singaar\.com\/index\.php/i" to /$_SERVER['HTTP_HOST']\/index\.php/i, b/4 hosting
$step_back = (preg_match("/\/index\.php$/i", $_SERVER["PHP_SELF"]) ? "" : "../");

//load the php_image_magic class here
require_once("Lib/php-image-magician/php_image_magician.php");

//load the config file first
require_once("config.php");

//load basic functions, so everything can use them
require_once("functions.php");

//load core objects
require_once("session.php");
require_once("database.php");
require_once("database_object.php");

//load DB-related classes
require_once("user.php");

//load the projects class
require_once("Project.php");

//load blogPosts
require_once("BlogPosts.php");