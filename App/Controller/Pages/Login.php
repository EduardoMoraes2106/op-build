<?php

namespace App\Controller\Pages;
use \App\Utils\View;

class Login extends Main{

    private static function getForm(){
        $content = View::render('Pages/login/components/form');
        return $content;
    }

    public static function getLogin(){
        $content= View::render('Pages/login',[
            'name' => 'OP-Build',
            'form' => self::getForm()
        ]);
        return parent::getMain('Login - OPBuild', $content);
    }
}