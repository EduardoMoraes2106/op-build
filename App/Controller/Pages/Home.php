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

    private static function getHeader(){
        $contentHeader = View::render('Pages/components/header/content/contentHome');

        $header = View::render('Pages/components/header',[
            'headerContent'=> $contentHeader
        ]);
        return $header;
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
    
    public static function getHome(){
        $content= View::render('pages/home',[
            'name' => 'OP-Build',
            'navBar' => self::getNavBar(),
            'header'=> self::getHeader()
        ]);
        $styles = self::getStyles();
        return parent::getMain('Home - OPBuild', $content,$styles);
    }
}