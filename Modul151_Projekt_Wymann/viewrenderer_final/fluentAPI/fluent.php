<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 20.12.2017
 * Time: 10:29
 */


class Fluent
{
    function __construct($cache) {
        $this->cache = ($cache ? $cache : []);
    }
    public function _($name) {
        array_push($this->cache, $name);
        return new Fluent($this->cache);
    }
    public function method() {
        return $this->cache;
    }
    public function __call($name, $args) {
        return $this->_($name);
    }
}
$fluent = new Fluent;
$chain = $fluent->das()->Ziel();
print_r($chain->method());
$new_chain = $chain->arbeiten()->_("können")->mit()->fluent()->api();
print_r($new_chain->method());