<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function allTasks(){

        $tasks = $this->getAllTasks();

        return view('tasks.all_tasks', compact('tasks'));
    }

    public function viewTask($id){

        $myTask = Db::table('tasks')
                ->where('tasks.id', $id)
                ->join('users', 'user_id','=','users.id')
                ->select('tasks.*', 'users.name as usname')
                ->first();


        return view('tasks.view_task', compact('myTask'));

    }

    public function deleteTask($id){
        Db::table('tasks')
        ->where('id', $id)
        ->delete();

        return back();

    }

    private function getAllTasks(){
        $tasks = DB::table('tasks')
                ->join('users', 'user_id','=','users.id')
                ->select('tasks.*', 'users.name as usname')
                ->get();

        return $tasks;
    }
}
