<?php

namespace App\Controller\Pages;
use \App\Utils\View;
class Main{
    public static function getMain($title,$content){
        return View::render('pages/main',[
            'title' => $title,
            'content' => $content
        ]);
    }
}