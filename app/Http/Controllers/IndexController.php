<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $info = $this->getCesaeInfo();


        return view('main.home', compact('info'));
    }

    private function getCesaeInfo(){
        $cesaeInfo = [
            'name'=> 'Cesae',
            'address'=> 'Rua do Cesae',
            'email'=> 'Cesae@gmail.com',
        ];

        return $cesaeInfo;
    }
}
