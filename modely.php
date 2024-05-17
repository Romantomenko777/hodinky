<?php
include_once "_inc/header.php";

if (isset($_SESSION["prihlaseny"]) && isset($_POST["odstranit"])) {
  $model_objekt = new Model();
  $model_objekt->vymazat($_POST["odstranit"]);

  header("Location: modely.php");
  exit;
}
?>

<main style="padding-top: 5rem; margin-bottom: 5rem;">
  <h1 class="display-3 fs-bolder text-center mb-5">Galéria Modelov</h1>

  <?php if (isset($_SESSION["prihlaseny"])) { ?>
    <div class="container my-4">
      <a href="novy-model.php" class="btn btn-primary">Pridať model</a>
    </div>
    <?php
  } ?>

  <div class="row row-cols-1 row-cols-md-3 g-4 container mx-auto">
    <?php
    $model_objekt = new Model();
    $modely = $model_objekt->zobrat_vsetko();

    for ($i = 0; $i < count($modely); $i++) {
      $model = $modely[$i];
      ?>

      <div class="col">
        <div class="card h-100">
          <img src="assets/img/<?php echo $model->obrazok ?>" class="card-img-top" alt="<?php echo $model->titulok ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $model->titulok ?></h5>
            <p class="card-text"><?php echo $model->text ?></p>
          </div>
          <div class="card-footer d-flex gap-4 align-items-center justify-content-between">
            <small class="text-body-secondary"><b><?php echo $model->cena ?> €,-</b></small>
            <?php if (isset($_SESSION["prihlaseny"])) { ?>
              <div class="d-flex gap-2 align-items-center">
                <a href="upravit-model.php?id=<?php echo $model->id ?>" class="btn btn-primary">Upraviť</a>
                <form method="POST">
                  <button class="btn btn-primary" type="submit" name="odstranit"
                    value="<?php echo $model->id ?>">Odstrániť</button>
                </form>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>

      <?php
    }
    ?>
  </div>
</main>

<?php
include_once "_inc/footer.php";
?>