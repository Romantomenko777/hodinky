<?php

class Databaza {
    protected $pdo;

    public function __construct() {
        $databaza = $GLOBALS["DATABAZA"];

        try {
            $this->pdo = new PDO(
                "mysql:host=" . $databaza["HOST"] . ";port=" . $databaza["PORT"] . ";dbname=" . $databaza["DB"],
                $databaza["USER"],
                $databaza["PASSWORD"],
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}
