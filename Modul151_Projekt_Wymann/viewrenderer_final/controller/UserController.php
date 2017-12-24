<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 25.10.2017
 * Time: 11:30
 */

namespace controller;


use models\User;
use services\DBConnection;

class UserController extends BaseController implements ControllerInterface
{


    /**
     * UserController constructor.
     */

    public function index()
    {

    }

    public function test($id){


        prepare(" insert into users (name, vorname, benutzername) values(?,?)");

    }

    public function update($value,$id){

            // Create connection
            $conn = new mysqli( 'localhost' , 'root' , '' ,'modul151' );
            $value =mysqli_real_escape_string($conn,$value);
            $id =mysqli_real_escape_string($conn,$id);
            // Check connection

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "UPDATE users SET email='{$value}' WHERE email = :email";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
            $conn->close();
        }

    public function register()
    {
        if ($this->httpHandler->isPost()) {
            $errorArray = $this->dataBaseFunction->checkRegister();
            if (count($errorArray['errorMessages'])) {
                $this->viewrenderer->setAttribute('showFormular', true);
                $this->viewrenderer->setAttribute('errorArray', $errorArray);
            } else {
                $this->httpHandler->redirect('user', 'login');
            }
        }
    }

    public function login(){
        if ($this->httpHandler->isPost()) {
            $errorArray = $this->loginFunction->checkLogin();
            if (count($errorArray['errorMessages'])) {

            } else {
                $this->httpHandler->redirect('user', 'main');
            }
        }
    }

    public function main(){

    }

    public function checkChat(){


    }

    public function add()
    {

        if($this->httpHandler->isPost()){
            $data = $this->httpHandler->getData();
            $data['role'];
            $user = new User();
            $user->patchEntity($this->httpHandler->getData());
            if($user->isValid()){
                $user->save();
                $this->httpHandler->redirect('user','index');
            }
        }
    }



    public function view(int $id)
    {
        // TODO: Implement view() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function edit(int $id)
    {
        // TODO: Implement edit() method.
    }
}