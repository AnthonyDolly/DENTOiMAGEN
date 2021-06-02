<?php

class ConexionB
{

    public function conectar()
    {
        $link = new PDO("mysql:host=localhost;dbname=dentoimagen", "root", "");
        return $link;
    }
}
