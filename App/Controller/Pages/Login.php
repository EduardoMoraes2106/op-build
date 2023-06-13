<?php

namespace App\Controller\Pages;
use \App\Utils\View;

class Login extends Main{

    private static function getForm(){
        $content = View::render('pages/login/components/form');
        return $content;
    }
    private static function getScript(){
        $content = View::render('pages/components/script',[
            'link'=>'assets/js/login.js'
        ]);
        return $content;
    }
    private static function getStyles(){
        $styles = '';
        $styles .= View::render('pages/components/style',[
            'link'=>'assets/css/style.css'
        ]);
        $styles .= View::render('pages/components/style',[
            'link'=>'assets/css/responsive.css'
        ]);
        return $styles;
    }
    public static function getLogin(){
        $content= View::render('pages/login',[
            'name' => 'OP-Build',
            'form' => self::getForm(),
            'scripts'=> self::getScript()
        ]);
        $styles = self::getStyles();
        return parent::getMain('Login - OPBuild', $content,$styles);
    }
}