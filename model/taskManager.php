<?php

//appel de la variable DB issue de database.php qui lance la cnx


class taskManager extends database
{

    public function getHash()
    {
        new database();
        $db=$this->getBdd();

        $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

        $query = 'SELECT password FROM admin WHERE login ="'.$login.'"';
        $req=$db->prepare($query);
        $req->execute();
        $row=$req->fetch(PDO::FETCH_ASSOC);
        $bddhash=$row['password'];

        $hash = password_verify($password, $bddhash);
        $db = null; // cloture de la cnx

        return $hash;
    }

}