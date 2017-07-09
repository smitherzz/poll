<?php

error_reporting( E_ALL );
ini_set( "display_errors", 1);

include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Php/MySQL site poll example";
//$pageData->content = include_once "controllers/poll.php";

//database credentials
$dbInfo = "mysql:host=127.0.0.1;port=3306;dbname=playground";
$dbUser = "root";
$dbPassword = "Cholate01";
try {
  //try to create a database connection with a PDO object
  $db = new PDO( $dbInfo, $dbUser, $dbPassword );
  $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $pageData->content = "<h1>We're connected</h1>";
} catch (Exception $e) {
  $pageData->content = include_once "<h1>Connection failed!</h1><p>$e</p>";
}

$pageData->content = include_once "controllers/poll.php";

$page = include_once "views/page.php";

echo $page;
