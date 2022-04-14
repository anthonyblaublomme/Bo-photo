<?php

class DBData
{
    private $dbh;

    public function getUser()
    {
        $getUsers = [];
        
        if(isset($_GET['email']) && isset($_GET['password'])) {
        $email = $_GET['email'];
        $password = $_GET['password'];

        $errors = [];

        $sql = "
            SELECT *
            FROM app_users
            WHERE email = '$email' && password = '$password'
        ";

        $getUsers = $this->dbh->query($sql)->fetch(PDO::FETCH_ASSOC);
        
        } else {
            $errors[] = "Cet utilisateur n'existe pas";
        }

        return $getUsers;
    }


    public function insertUser()
    {
        $firstname = isset($_GET['firstname']) ? $_GET['firstname'] : '';
        $lastname = isset($_GET['lastname']) ? $_GET['lastname'] : '';
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $password = isset($_GET['password']) ? $_GET['password'] : '';

        $insertQuery = "
            INSERT INTO app_users (email, password, firstname, lastname)
            VALUES ('{$email}', '{$password}', '{$firstname}', '{$lastname}')
        ";

        $count = $this->dbh->exec($insertQuery);

        return $count;
    }

    
}