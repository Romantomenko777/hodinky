<?php

$GLOBALS["DATABAZA"] = array(
    "HOST" => "localhost",
    "PORT" => 3306,
    "DB" => "projekt",

    "USER" => "root",
    "PASSWORD" => ""
);

ini_set("display_errors",1);
error_reporting(E_ALL);

require_once "class/Databaza.php";
require_once "class/Kontakt.php";
require_once "class/Model.php";
require_once "class/Pouzivatel.php";

session_start();
