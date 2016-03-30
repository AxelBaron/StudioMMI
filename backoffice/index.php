<?php
/**
 * Created by PhpStorm.
 * User: skytoa
 * Date: 30/03/2016
 * Time: 09:58
 */



if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    echo "test";
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    echo "testelse";
    require_once("libraries/password_compatibility_library.php");
}
echo "test";
require_once("config/db.php");

require_once("classes/Login.php");

$login = new Login();

if ($login->isUserLoggedIn() == true) {
    echo "test login";
    include("views/logged_in.php");
} else {
    echo "test login else";
    include("views/not_logged_in.php");
}