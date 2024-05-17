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

    public function upravit($id, $titulok, $text, $cena)
    {
        $sql = "UPDATE model SET titulok = :titulok, text = :text, cena = :cena WHERE id = :id";
        $dotaz = $this->pdo->prepare($sql);

        return $dotaz->execute(
            array(
                "id" => $id,
                "titulok" => $titulok,
                "text" => $text,
                "cena" => $cena
            )
        );
    }

    public function vymazat($id)
    {
        $sql = "DELETE FROM model WHERE id = :id";
        $dotaz = $this->pdo->prepare($sql);

        return $dotaz->execute(
            array(
                "id" => $id
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
