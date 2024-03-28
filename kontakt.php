<?php
include_once "_inc/header.php";
?>

    <main style="padding-top: 5rem;" class="mb-5">
      <div class="text-center mb-4">
        <h1>Kontakt</h1>
        <p>Máte otázky? Skontaktujte nás!</p>
      </div>
      
      <div class="container">
        <div class="d-flex gap-4 row justify-content-center">
          <div class="col-md col-lg-4 p-4 bg-secondary-subtle border border-secondary rounded">
            <h2 class="fs-3">O nás</h2>
            <p>
              Sme malá firma založená v roku 2023. Špecializujeme sa v oblasti predaja kvalitných
              a značkových hodiniek. Našim cieľom je prinášať na trh kvalitné hodinky za rozumné ceny.
            </p>

            <h6>Naša firma sídli na adrese:</h6>
            <code class="text-black">
              Hodinky s. r. o. <br/>
              Hodinárska 1 <br/>
              123 04  Hodinkovo
            </code>
            <br/>
            <hr/>

            <p class="mt-3">
              <b>Mobil:</b> <a href="tel:+421950466574">+421 950 466 574</a><br/>
              <b>E-mail:</b> <a href="mailto:info@hodinky.sk">info@hodinky.sk</a>
            </p>
          </div>
            
          <div class="col-md col-lg-4 p-4 bg-secondary-subtle border border-secondary rounded">
            <h2 class="fs-3">Kontakt</h2>
            
            <form method="post" action="/kontakt-dakujeme.html">
              <div class="mb-3">
                <label for="meno" class="form-label">Meno</label>
                <input type="text" class="form-control" id="meno" name="meno" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="sprava" class="form-label">Správa</label>
                <textarea class="form-control" id="sprava" name="sprava" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Odoslať</button>
            </form>
          </div>
        </div>
      </div>
    </main>

<?php
include_once "_inc/footer.php";
?>
