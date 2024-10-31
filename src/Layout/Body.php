<?php 

namespace Layout;

class Body{
    public static function render($load_view){

       
        Header::render_self();
        
        $view = "/";
        $view = $view . $load_view;
        include __DIR__ .'\..\Views' . $view .".ph";
        Footer::render_self();
    }
}