<?php

namespace App\Controller\Pages;
use \App\Utils\View;

class Login extends Main{
    public static function getLogin(){
        $content= View::render('Pages/login',[
            'name' => 'OP-Build',
        ]);
        return parent::getMain('Login - OPBuild', $content);
    }
}