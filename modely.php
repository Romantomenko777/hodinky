<?php
include_once "_inc/header.php";
?>

<main style="padding-top: 5rem; margin-bottom: 5rem;">
  <h1 class="display-3 fs-bolder text-center mb-5">Galéria Modelov</h1>

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
          <div class="card-footer">
            <small class="text-body-secondary"><b><?php echo $model->cena ?> €,-</b></small>
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