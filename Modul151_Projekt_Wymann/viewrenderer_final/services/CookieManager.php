<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 22.12.2017
 * Time: 14:19
 */

namespace services;


class CookieManager
{
    protected $options;

    public function __construct(array $options){

        $this->options = $options;
        ob_start();
        register_shutdown_function(array(&$this, 'flush_cookies'));

    }

    public function setCookie($name='View', $value='already seen', $expire=''){
        if(!is_numeric($expire)){
            $expire = time() - 86500;
        }else{
            $expire = ($expire > 0) ? time() + $expire : 0;
        }

        return setcookie($this->options['cookie_prefix'] . $name, $value, $expire, $this->options['cookie_path'], $this->options['cookie_domain'], $this->options['cookie_secure'], $this->options['cookie_httponly']);

    }
    public function getCookie(){

    }
    public function deleteCookie(){

    }
    public function flushCookie(){

    }

}