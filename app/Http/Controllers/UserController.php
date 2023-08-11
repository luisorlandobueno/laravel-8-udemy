<?php 

namespace App\Http\Controllers;


use Illuminate\Http\Request;



class  UserController extends Controller{



    public function index(){

        return view('welcome');

    }



    public function showname($name){


        return view('example' , ['name' => $name]);


    }


    public function suma($num = 0){

        $b = 80;
        return $num +$b;


    }






}
