<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 18.12.2017
 * Time: 09:25
 */

namespace services;
use controller\HttpHandler;


class LoginFunction
{

    private $pdo;
    private $httpHandler;

    public function __construct()
    {
        $this->pdo = DBConnection::getDbConnection();
        $this->httpHandler = new HttpHandler();
    }


    public function checkLogin(){
        $array = [
            'errorMessages' => []
        ];

        if(isset($_GET['login'])) {
            $email = $_POST['email'];
            $passwort = $_POST['passwort'];

            $statement = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
            $result = $statement->execute(array('email' => $email));
            $user = $statement->fetch();

            //Überprüfung des Passworts
            if ($user !== false && password_verify($passwort, $user['passwort'])) {
                $_SESSION['userid'] = $user['id'];
                die('Login erfolgreich. Weiter zu <a href="main">internen Bereich</a><img width="1545px" src="/viewrenderer_final/logg.png">');
            } else {
                $array['errorMessages']['password'] = "E-Mail oder Passwort war ungültig";
            }

        }
    }
}