<?php
// gestion de la cbx a la base de données.
// la variable de cnx est appele ensuite dans le taskmanager

class database
{
    private $bdd;


    public function __construct()
    {
        try
        {
            $bdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_LOGIN, DB_PASSWORD);

        }
        catch(Exception $e)
        {
            die('Erreur :' .$e->getMessage());
        }

        $this->bdd = $bdd;
    }


    public function getBdd()
    {
        return $this->bdd;
    }


}
