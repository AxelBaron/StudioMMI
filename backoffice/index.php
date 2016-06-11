<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * @author: skytoa
 * Date: 10/06/2016
 * Time: 09:58
 */

if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    require_once("libraries/password_compatibility_library.php");
}
require_once("config/db.php");

require_once("classes/Login.php");

require_once("classes/Materiel.php");

$login = new Login();

if ($login->isUserLoggedIn() == true) {
    include("views/logged_in.php");
} else {
    include("views/not_logged_in.php");
}
?>	
</body>
</html>