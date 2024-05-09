<?php
require_once("config.php");
?>

<!DOCTYPE html>
<html lang="sk" class="overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodinky</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header z-3">
        <div class="header-container">
            <nav class="navbar navbar-expand-sm navbar-light bg-light position-fixed container-fluid">
                <div class="container-fluid">
                  <a class="navbar-brand d-flex gap-3 align-items-center" href="index.php">
                    <img src="assets/img/logo.png" width="40" alt="Logo"/>
                    <span class="navbar-brand-text fw-bold">Hodinky</span>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigacia" aria-controls="navigacia" aria-expanded="false" aria-label="Prepnúť navigáciu">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navigacia">
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Domov</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="modely.php">Modely</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="recenzie.php">Recenzie</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="kontakt.php">Kontakt</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
    </header>
    <div style="visibility: hidden; height: 70px;">.</div>
