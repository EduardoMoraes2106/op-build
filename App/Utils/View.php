<?php

namespace App\Utils;
require_once __DIR__.'/../config.php';

class View{
    private static function getContentView($view){
        $file = __DIR__.'/../View/'.$view."/index.html";
        $content = file_exists($file) ? file_get_contents($file) : '';

        $content = str_replace('{{siteName}}', SITE_NAME, $content);
        $content = str_replace('{{URL_BASE}}', URL_BASE, $content);
        
        return $content;
    }

    public static function render($view, $vars = []){
        $contentView = self::getContentView($view);
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);
        $contentFormated = str_replace($keys,array_values($vars),$contentView);
        return $contentFormated;
    }
}