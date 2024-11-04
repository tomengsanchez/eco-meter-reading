<?php 
namespace Src\Controller;

use Layout\Body;   

class MeterController{

    public static function index(){
        $data = [];
        Body::render('Meter/List', $data);

    }

    public function create(){
        $data = [];
        Body::render('Meter/Add', $data);
    }
}
