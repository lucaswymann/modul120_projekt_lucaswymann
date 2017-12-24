<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 18.12.2017
 * Time: 08:56
 */

namespace services;


use controller\HttpHandler;

class DataBaseFunction
{

    /**
     * @var \PDO
    */
    private $pdo;
    private $httpHandler;

    /**
     * DataBaseFunction constructor.
     */
    public function __construct()
    {
        $this->pdo = DBConnection::getDbConnection();
        $this->httpHandler = new HttpHandler();
    }


    public function checkRegister(): array{
        $array = [
            'errorMessages' => []
        ];




        if($this->httpHandler->isPost()) {
            $error = false;
            $email = $_POST['email'];
            $passwort = $_POST['passwort'];
            $passwort2 = $_POST['passwort2'];
            debug($email);

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $array['errorMessages']['email'] = "Bitte eine gültige E-Mail-Adresse eingeben";
            }
            if(strlen($passwort) == 0) {
                $array['errorMessages']['password'] = "Bitte ein Passwort angeben";
            }
            if($passwort != $passwort2) {
                $array['errorMessages']['password'] = "Die Passwörter müssen übereinstimmen";
                $error = true;
            }

            //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
            if(!$error) {
                $statement = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
                $result = $statement->execute(array('email' => $email));
                $user = $statement->fetch();

                if($user !== false) {
                    $array['errorMessages']['notUnique'] = "Diese E-Mail-Adresse ist bereits vergeben";
                }
            }

            //Keine Fehler, wir können den Nutzer registrieren
            if(!$error) {
                $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);

                $statement = $this->pdo->prepare("INSERT INTO users (email, passwort) VALUES (:email, :passwort)");
                $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash));

                if($result) {
                } else {
                    $array['errorMessages']['unexpectedError'] = "Beim Abspeichern ist leider ein Fehler aufgetreten";
                }
            }
        }
        return $array;
    }

}