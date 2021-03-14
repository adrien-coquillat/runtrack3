<?php

class user
{
    public $id;


    function __construct()
    {
    }


    private function connectdb()
    {
        return new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');
    }

    public function register($prenom, $nom, $email, $password)
    {
        $db = $this->connectdb();

        $msg = '';
        $prenom = htmlspecialchars(trim($prenom));
        $nom = htmlspecialchars(trim($nom));
        $email = htmlspecialchars(trim($email));

        $password = htmlspecialchars(trim($password));
        $cryptedpass = password_hash($password, PASSWORD_BCRYPT);

        if (strlen($password) > 5) {
            $sth = $db->prepare("INSERT INTO utilisateurs (nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$cryptedpass')");
            $sth->execute();
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
            $msg = "";
            // return $msg;
        } else {
            $msg = "le mot de pass doit contenir 6 caractères";
            // return $msg;
        }



        return $msg;
    }

    public function connect($email, $password)
    {
        $db = $this->connectdb();
        // $msg = '';
        $email = htmlspecialchars(trim($email));
        $password = htmlspecialchars(trim($password));

        $query = $db->prepare("SELECT id FROM utilisateurs WHERE email = '$email'");
        $query->execute();
        $checkemail = $query->rowCount();
        if ($checkemail) {
            $query = $db->prepare("SELECT password FROM utilisateurs WHERE email = '$email'");
            $query->execute();
            $results = $query->fetch(PDO::FETCH_OBJ);
            $hashedpassword = $results->password;
            if (password_verify($password, $hashedpassword)) {
                $query = $db->prepare("SELECT id, email FROM utilisateurs WHERE email = '$email'");
                $query->execute();
                $result = $query->fetch(PDO::FETCH_OBJ);
                $this->id = (int)$result->id;
                $this->email = $result->email;
                session_start();
                $_SESSION['user'] === true;
                header("Location: ../index.php");
                return $_SESSION['user'];
            }
            //  else {
            //     $msg = 'mot de passe incorrect';
            //     // return $msg;
            // }
        }
        // else {
        //     $msg = 'email incorrect';
        //     // return $msg;
        // }
    }
}
