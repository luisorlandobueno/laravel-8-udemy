<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{

    public function index1() {
        return 'este es un controller1';
    }

     public function index2() {
        return 'este es un controller2';
    }

     public function index3() {
        return 'este es un controller3';
    }


}