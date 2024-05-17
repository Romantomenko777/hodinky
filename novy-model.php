<?php
include_once "_inc/header.php";



if (isset($_POST["vytvorit"])) {
    $model_objekt = new Model();
    $model_objekt->vytvorit($_POST["titulok"], $_POST["popis"], $_POST["cena"], $_POST["obrazok"]);

    header("Location: modely.php");
    exit;
}
?>

<main style="padding-top: 5rem;" class="mb-5">
    <div class="text-center mb-4">
        <h1>Nový model</h1>
    </div>

    <div class="container">
        <div class="col-md p-4 bg-secondary-subtle border border-secondary rounded">
            <form method="post">
                <div class="mb-3">
                    <label for="titulok" class="form-label">Titulok</label>
                    <input type="text" class="form-control" id="titulok" name="titulok" required>
                </div>
                <div class="mb-3">
                    <label for="obrazok" class="form-label">Súbor s obrázkom</label>
                    <input type="text" class="form-control" value="hodinky1.webp" id="obrazok" name="obrazok" required>
                </div>
                <div class="mb-3">
                    <label for="cena" class="form-label">Cena</label>
                    <input type="text" class="form-control" id="cena" name="cena" required>
                </div>
                <div class="mb-3">
                    <label for="popis" class="form-label">Popis</label>
                    <textarea class="form-control" id="popis" name="popis" rows="4" required></textarea>
                </div>
                <button type="submit" name="vytvorit" class="btn btn-primary">Vytvoriť</button>
            </form>
        </div>
    </div>
</main>

<?php
include_once "_inc/footer.php";
?>