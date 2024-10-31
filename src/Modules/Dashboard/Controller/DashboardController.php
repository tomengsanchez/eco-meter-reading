<?php 
namespace Src\Controller;

use Layout\Body;

class DashboardController{


    public static function index(){
        Body::render('Dashboard\Index');
    }
}