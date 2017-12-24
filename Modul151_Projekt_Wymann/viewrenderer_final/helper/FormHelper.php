<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 25.10.2017
 * Time: 10:46
 */

namespace helper;

class FormHelper extends BaseHelper
{

    public function createForm(string $name,
                               string $action,
                               string $method = 'POST',
                               array $options = []
    ):string{
        return "<form action='$action' method='$method' name='$name'>";
    }

    public function inputGroup(string $name, string $classes, array $options = []){
        $this->renderer->setAttribute('name', $name);
        $this->renderer->setAttribute('classes', $classes);
        $this->renderer->setAttribute('type', 'text');
        $this->renderer->setAttribute('options', $options);
        $this->renderer->setAttribute('labelText', $options['label']);
        $this->renderer->renderByFileName('input-group.php');
    }

    public function input(
        string $name,
        string $classes,
        array $options = []
    ){
        return "<input type='text' name='$name' class='$classes'>";
    }

    public function endForm():string{
        return "</form>";
    }

}