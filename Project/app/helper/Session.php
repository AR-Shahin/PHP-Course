<?php

namespace App\helper;

class Session{

    public static function set($key,$value){
        $_SESSION[$key] = $value;
    }

    public static function get($key){

        if(!empty($_SESSION[$key])){
            return $_SESSION[$key];
        }
    }


    public static function forget($key){
        if(!empty($_SESSION[$key])){
            unset($_SESSION[$key]);
        }
    }
}