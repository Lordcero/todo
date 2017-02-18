<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Todo;
class todoController extends Controller
{
public function save(Request $request)
{
    $todo = new Todo;
     
    $todo->title=$request->title;

    $todo->save();

}
public function view()
    {
        $todo = new Todo;
        $todos = $todo->all();
        return view('show',['todos'=>$odos]);
    }

}
