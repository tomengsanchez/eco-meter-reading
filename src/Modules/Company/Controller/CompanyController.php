<?php 
namespace Src\Controller;   

use Layout\Body;
use Src\Controller;


class CompanyController extends Controller{
     
    public static function index(){
        Body::render('Company\List');
    }

    public function create(){

    }
    public function store(){

    }
}