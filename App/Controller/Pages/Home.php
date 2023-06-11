<?php

namespace App\Controller\Pages;
use \App\Utils\View;
class Home extends Main{
    private static function getNavBar(){
        $html = View::render('Pages/components/layout/NavBar',[
            'logo'=> 'Op-build'
        ]);
        return $html;
    }
    public static function getHome(){
        $content= View::render('Pages/home',[
            'name' => 'OP-Build',
            'navBar' => self::getNavBar()
        ]);
        return parent::getMain('Home - OPBuild', $content);
    }
}