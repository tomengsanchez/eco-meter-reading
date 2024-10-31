<?php 
namespace Src\Controller;   

use Src\Controller;
use Model\CompanyModel;
class CompanyController extends Controller{

    public static function index(){
        echo "This is company";

        // print_r(new CompanyModel()); 
    }

    public function create(){

    }
    public function store(){

    }
}