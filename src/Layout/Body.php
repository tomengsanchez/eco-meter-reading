<?php 

namespace Layout;

class Body{
    public static function render($load_view, $data = []){

        Header::render_self();
        $view = "/";
        
        $view = $view . $load_view;
        $data_view = $data;
        
        include __DIR__ .'/../Views/Pages' . $view .".ph";
        Footer::render_self();
    }
}