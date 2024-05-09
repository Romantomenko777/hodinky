<?php
include_once "_inc/header.php";
?>

<main style="padding-top: 5rem;" class="mb-5">
  <div class="text-center mb-4">
    <h1>Prihláste sa alebo sa registrujte</h1>
  </div>

  <div class="container d-flex justify-content-center gap-4">
    <div class="col-md col-lg-4 p-4 bg-secondary-subtle border border-secondary rounded">
      <h2 class="fs-3">Prihlásiť sa</h2>

      <form method="post" action="prihlasenie-post.php">
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="heslo" class="form-label">Heslo</label>
          <input class="form-control" type="password" id="heslo" name="heslo" required>
        </div>
        <button type="submit" class="btn btn-primary">Prihlásiť sa</button>
      </form>
    </div>

    <div class="col-md col-lg-4 p-4 bg-secondary-subtle border border-secondary rounded">
      <h2 class="fs-3">Registrovať sa</h2>

      <form method="post" action="registracia-post.php">
        <div class="mb-3">
          <label for="meno" class="form-label">Meno</label>
          <input type="text" class="form-control" id="meno" name="meno" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="heslo" class="form-label">Heslo</label>
          <input class="form-control" type="password" id="heslo" name="heslo" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrovať sa</button>
      </form>
    </div>
  </div>
  </div>
</main>

<?php
include_once "_inc/footer.php";
?>