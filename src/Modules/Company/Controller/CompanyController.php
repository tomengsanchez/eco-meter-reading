<?php 
namespace Src\Controller;   

use Layout\Body;
use Model\CompanyModel;
use Src\Controller;


class CompanyController extends Controller{
     
    public static function index(){
        $data['test'] = 'tomeng';
        Body::render('Company/List',$data);
    }

    public function create(){

    }
    public function store(){

    }
}