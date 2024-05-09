<?php
include_once "_inc/header.php";
?>

<?php
if (isset($_POST["meno"]) && isset($_POST["email"]) && isset($_POST["sprava"])) {
  $meno = $_POST["meno"];
  $email = $_POST["email"];
  $sprava = $_POST["sprava"];

  $kontakt_objekt = new Kontakt();
  $kontakt_objekt->vytvorit($meno, $email, $sprava);

  ?>
  <main style="padding-top: 5rem;">
    <p class="my-5 text-center">Ďakujeme za Váš kontakt, odpíšeme Vám hneď ako to bude možné.</p>
  </main>
  <?php
} else {
  ?>
  <main style="padding-top: 5rem;">
    <p class="my-5 text-center">Nejaká chyba.</p>
  </main>
  <?php
}
?>

<?php
include_once "_inc/footer.php";
?>