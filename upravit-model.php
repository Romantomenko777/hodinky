<?php
include_once "_inc/header.php";

$model_objekt = new Model();

if (isset($_POST["upravit_id"])) {
    $model_objekt->upravit($_POST["upravit_id"], $_POST["titulok"], $_POST["popis"], $_POST["cena"]);

    header("Location: modely.php");
    exit;
} else {
    if (isset($_GET["id"])) {
        $model = $model_objekt->zobrat($_GET["id"]);
    } else {
        echo "404";
        exit;
    }
}
?>

<main style="padding-top: 5rem;" class="mb-5">
    <div class="text-center mb-4">
        <h1>Upraviť model</h1>
    </div>

    <div class="container">
        <div class="col-md p-4 bg-secondary-subtle border border-secondary rounded">
            <form method="post">
                <div class="mb-3">
                    <label for="titulok" class="form-label">Titulok</label>
                    <input type="text" class="form-control" id="titulok" name="titulok"
                        value="<?php echo $model->titulok ?>" required>
                </div>
                <div class="mb-3">
                    <label for="obrazok" class="form-label">Súbor s obrázkom</label>
                    <input type="text" disabled class="form-control" value="<?php echo $model->obrazok ?>" id="obrazok"
                        name="obrazok">
                </div>
                <div class="mb-3">
                    <label for="cena" class="form-label">Cena</label>
                    <input type="text" class="form-control" id="cena" name="cena" value="<?php echo $model->cena ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="popis" class="form-label">Popis</label>
                    <textarea class="form-control" id="popis" name="popis" rows="4" required><?php echo $model->text ?></textarea>
                </div>
                <button type="submit" name="upravit_id" value="<?php echo $model->id ?>" class="btn btn-primary">
                    Upraviť
                </button>
            </form>
        </div>
    </div>
</main>

<?php
include_once "_inc/footer.php";
?>