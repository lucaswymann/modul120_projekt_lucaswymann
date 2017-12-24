<?php

namespace models;
/**
 * Created by PhpStorm.
 * User: Danis
 * Date: 19.10.2017
 * Time: 17:16
 */
class User extends Entity
{
    public $username;
    public $firstname;
    public $lastname;


    protected function defaultValidationConfiguration()
    {
        parent::defaultValidationConfiguration();
        $this->validator->isRequired('username');
    }

    public function save()
    {
        $statement = $this->dbConnection->prepare("INSERT INTO user(username, firstname, lastname)
    VALUES(:username, :firstname, :lastname)");
        $statement->execute(array(
            "username" => $this->username,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,

        ));
        die();
    }


}