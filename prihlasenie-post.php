<?php
require_once "_inc/config.php";

if (isset($_POST["email"]) && isset($_POST["heslo"])) {
    $email = $_POST["email"];
    $heslo = $_POST["heslo"];

    $pouzivatel_objekt = new Pouzivatel();
    $pouzivatel = $pouzivatel_objekt->prihlasit($email, $heslo);

    if ($pouzivatel) {
        $_SESSION["prihlaseny"] = true;

        header("Location: index.php");
    } else {
        echo 'Nesprávne údaje. <a href="prihlasenie.php">Skúsiť znova</a>';
    }
}
