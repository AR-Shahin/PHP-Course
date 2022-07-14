<?php

namespace App\helper;

class Auth extends Session{

    public function isAuthenticate():bool
    {
        if($this->get('auth')){
            return true;
        }
        return false;
    }

     public function setAuth($data):void
    {
        $this->set('auth',true);
        $this->set('userName',$data['name']);
        $this->set('userEmail',$data['email']);
    }

    public function removeAuth():void
    {
        $this->forget('auth');
        $this->forget('userName');
        $this->forget('userEmail');
    }
}