<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUsers(){
        $hello = 'Finalmente vamos para código';
        $helloAgain = 'cucu';

        $daysOfWeek = $this->getWeekDays();
        $info = $this->info();

        $users = $this->getContacts();
        return view('users.all_users', compact(
            'hello',
            'helloAgain',
            'daysOfWeek',
            'info',
            'users'
        ));
    }
    public function addUser(){
        return view('users.add_user');
    }
    private function getWeekDays(){

        $daysofWeek = ['Segunda', 'Terça', 'Quarta', 'Quinta'];

        return $daysofWeek;
    }

    private function info(){

        $courseInfo = [
            'name' => 'Software Developer',
            'year' => 2024,
            'modules' => ['PHP', 'WebServices', 'Java'],
            ['Teste', 4, 'Sofia', 'João']
        ];

        return  $courseInfo;
    }

    private function getContacts(){
        $users = [
            ['id'=>1, 'name'=>'Sara', 'phone'=>'91222222', 'email'=> 'sara@gmail.com'],
            ['id'=>2, 'name'=>'Joaquim','phone'=> '91222222',  'email'=>'Joaquim@gmail.com'],
            ['id'=>3, 'name'=>'Helder','phone'=> '91222222',  'email'=>'Helder@gmail.com'],
            ['id'=>4, 'name'=>'Bruno', 'phone'=>'91222222',  'email'=>'Bruno@gmail.com'],
        ];

        return $users;

    }
}
