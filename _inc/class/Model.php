<?php

class Model extends Databaza
{
    public function vytvorit($titulok, $text, $cena, $obrazok)
    {
        $sql = "INSERT INTO model (titulok, text, cena, obrazok) VALUES (:titulok, :text, :cena, :obrazok);";
        $dotaz = $this->pdo->prepare($sql);

        return $dotaz->execute(
            array(
                "titulok" => $titulok,
                "text" => $text,
                "cena" => $cena,
                "obrazok" => $obrazok,
            )
        );
    }

    public function zobrat_vsetko()
    {
        $sql = "SELECT * FROM model;";
        $odpoved = $this->pdo->query($sql);

        return $odpoved->fetchAll();
    }
}
