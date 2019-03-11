<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
       {
            $tasks= Task::latest()->get();
            return view('tasks.index',compact('tasks'));
       }

    public function show(Task $task)
       {
           return view('tasks.show',compact('task'));
       }
    
    public function create()
       {
           return view('tasks.create');
       }



       public function edit()
       {
          return view('tasks.edit');
       }

    public function store()
       {

         
        Task::create( request()->validate([
           'title'=>['required','min:3','max:255'],
           'description'=>['required','min:3','max:2000']
        ]));

        //return $attributes;
        //  $task = new Task;

        //  $task->title = request('title');
        //  $task->description = request('description');

        //  $task->save();

        //Task::create($attributes);
        //$task->save();

         return redirect('/tasks');
       }

}
