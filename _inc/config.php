<?php

$GLOBALS["DATABAZA"] = array(
    "HOST" => "localhost",
    "PORT" => 3306,
    "DB" => "hodinky",

    "USER" => "root",
    "PASSWORD" => ""
);

require_once "class/Databaza.php";
require_once "class/Kontakt.php";
require_once "class/Model.php";
require_once "class/Pouzivatel.php";

session_start();
