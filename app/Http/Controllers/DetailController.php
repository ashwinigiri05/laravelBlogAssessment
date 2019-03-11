<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Details;

class DetailController extends Controller
{
    protected $guarded = [];
    public function store(Request $request,$id)
    {
    //  dd($request->all());

    
    request()->validate([
        'name'=>['required','min:3','max:255'],
         'email'=>'required|email',
        'comment'=>['required','min:3','max:1000']
     ]);
        
     $task=new Details;

        $task->create([
            'task_id'=>$id,
            'name'=>$request->name,
            'email'=>$request->email,
            'comment'=>$request->comment
            ]);

         
        
        return back();
    }


}
