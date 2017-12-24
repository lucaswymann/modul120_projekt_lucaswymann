<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 26.10.2017
 * Time: 09:11
 */

namespace controller;


use services\ChatFunction;
use services\DataBaseFunction;
use services\LoginFunction;

class BaseController
{
    protected $viewrenderer;
    public $httpHandler;
    public $viewTemplate;
    public $controllerName;
    public $dataBaseFunction;
    public $loginFunction;
    public $chatFunction;
    public $doNotRender = false;


    /**
     * UserController constructor.
     * @param $renderer
     */
    public function __construct()
    {
        $this->viewrenderer = new \Viewrenderer();
        $this->httpHandler = new HttpHandler();
        $this->dataBaseFunction = new DataBaseFunction();
        $this->loginFunction = new LoginFunction();
        $this->chatFunction = new ChatFunction();
    }


    public function __destruct()
    {
        if ($this->doNotRender == false) {
            $this->viewrenderer->renderLayout('header.php');
            $this->viewrenderer->renderByFileName("/view/" . "$this->controllerName/" . $this->viewTemplate);
            $this->viewrenderer->renderLayout('footer.php');
        } else {

        }
    }
}