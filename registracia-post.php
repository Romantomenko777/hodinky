<?php
require_once "_inc/config.php";

if (isset($_POST["meno"]) && isset($_POST["email"]) && isset($_POST["heslo"])) {
    $meno = $_POST["meno"];
    $email = $_POST["email"];
    $heslo = $_POST["heslo"];

    $sifra = password_hash($meno, PASSWORD_DEFAULT);

    $pouzivatel_objekt = new Pouzivatel();
    $bol_vytvoreny = $pouzivatel_objekt->vytvorit($meno, $email, $sifra);

    if ($bol_vytvoreny) {
        $_SESSION["prihlaseny"] = true;
        header("Location: index.php");
    } else {
        echo 'Chyba pri vytváraní používateľa. <a href="registracia.php">Skúsiť znovu</a>';
    }
}
