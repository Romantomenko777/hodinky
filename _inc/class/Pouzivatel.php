<?php

class Pouzivatel extends Databaza
{
    public function vytvorit($meno, $email, $heslo)
    {
        $sql = "INSERT INTO pouzivatel (meno, email, heslo) VALUES (:meno, :email, :heslo);";
        $dotaz = $this->pdo->prepare($sql);

        $sifra = password_hash($heslo, PASSWORD_DEFAULT);

        return $dotaz->execute(
            array(
                "meno" => $meno,
                "email" => $email,
                "heslo" => $sifra
            )
        );
    }

    public function zobrat($email)
    {
        $sql = "SELECT * FROM pouzivatel WHERE email = :email;";
        $dotaz = $this->pdo->prepare($sql);

        $dotaz->execute(
            array(
                "email" => $email
            )
        );

        return $dotaz->fetch();
    }

    public function zobrat_vsetko()
    {
        $sql = "SELECT * FROM pouzivatel;";
        $dotaz = $this->pdo->prepare($sql);

        $dotaz->execute();

        return $dotaz->fetch();
    }

    public function prihlasit($email, $heslo)
    {
        $pouzivatel = $this->zobrat($email);

        if ($pouzivatel) {
            if (password_verify($heslo, $pouzivatel->heslo)) {
                return $pouzivatel;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
