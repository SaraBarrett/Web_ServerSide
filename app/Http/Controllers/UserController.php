<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function allUsers(){
        $hello = 'Finalmente vamos para código';
        $helloAgain = 'cucu';

        $daysOfWeek = $this->getWeekDays();
        $info = $this->info();


        //verificar se é formador
        //ir à base de dados ver se é formador
        //se formador, return $isTrainer = true
        //dd(request()->query('search'));


        //filtro que vem do que colocamos no FE
        $search = request()->query('search') ? request()->query('search') : null;


        //objecto que carregamos na tabela do FE
        $users = DB::table('users');
        if($search){
            $users = $users
                    ->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
        };
        $users= $users->get();

        //dd($users);

        return view('users.all_users', compact(
            'hello',
            'helloAgain',
            'daysOfWeek',
            'info',
            'users'
        ));
    }

    public function viewUser($id){

        $myUser = DB::table('users')
                ->where('id',$id )
                ->first();

        return view('users.view', compact('myUser'));
    }

    public function deleteUser($id){

        Db::table('tasks')
        ->where('user_id', ($id))
        ->delete();

        Db::table('users')
            ->where('id', ($id))
            ->delete();

        return back();
    }

    public function addUser(){

       /* DB::table('users')
        ->updateOrInsert(
            [
                'email'=> 'Lais@gmail.com',
            ],
            [
                'name'=> 'Lais',
                'password'=> 'sarateste',
                'updated_at' => now(),
                'created_at' => now(),
        ]);


        $users = Db::table('users')
        ->get();

        $myUser = DB::table('users')
        ->where('password', '12345')
        ->first();

        dd($myUser);*/

       return view('users.add_user');
    }

    public function createUser(Request $request){
        $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required|string|max:20',
        ]);

        User::insert([
            'name' => $request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
        ]);

        return redirect()->route('users.all')->with('message', 'Boa, estamos a caminho de ter uma super app com utilizadores adicionados!');
    }


    public function updateUser(Request $request){

        $request->validate([
            'phone' => 'min:9|max:15',
        ]);

        $photo = null;

        if($request->has('photo')){
            $photo = Storage::putFile('profilePictures/', $request->photo);
        }

        User::where('id', $request->id)
        ->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' =>$request->phone,
            'photo' =>$photo,
        ]);

        return redirect()->route('users.all')->with('message', 'Utilizador actualizado');
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

        // $users = [
        //     ['id'=>1, 'name'=>'Sara', 'phone'=>'91222222', 'email'=> 'sara@gmail.com'],
        //     ['id'=>2, 'name'=>'Joaquim','phone'=> '91222222',  'email'=>'Joaquim@gmail.com'],
        //     ['id'=>3, 'name'=>'Helder','phone'=> '91222222',  'email'=>'Helder@gmail.com'],
        //     ['id'=>4, 'name'=>'Bruno', 'phone'=>'91222222',  'email'=>'Bruno@gmail.com'],
        // ];

         $users = DB::table('users')
            //->whereNull('updated_at')
           ->get();

        //$users = User::get();

        $adminType = User::TYPE_ADMIN;

        return $users;

    }
}
