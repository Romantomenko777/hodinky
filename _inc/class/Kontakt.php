<?php

class Kontakt extends Databaza {
    public function vytvorit($meno, $email, $sprava) {
        $sql = "INSERT INTO kontakt (meno, email, sprava) VALUES (:meno, :email, :sprava);";
        $dotaz = $this->pdo->prepare($sql);

        return $dotaz->execute(array(
            "meno" => $meno,
            "email" => $email,
            "sprava" => $sprava)
        );
    }
}
