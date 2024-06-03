<?php

class Databaza {
    protected $pdo;

    public function __construct() { // Конструктор автоматически вызывается при создании объекта класса и инициализирует подключение к базе данных.
        $databaza = $GLOBALS["DATABAZA"]; 

        try {
            $this->pdo = new PDO(
                "mysql:host=" . $databaza["HOST"] . ";port=" . $databaza["PORT"] . ";dbname=" . $databaza["DB"],
                $databaza["USER"],
                $databaza["PASSWORD"],
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //PDO будет по умолчанию возвращать каждую строку как объект. Поля строки будут доступны как свойства объекта.
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}
