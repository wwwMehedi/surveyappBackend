<?php

namespace App\Http\Controllers;

use App\Home_Single;
use Illuminate\Http\Request;

class SingleHome extends Controller
{
    public function firsthome(){
        return view('home');
    }
    public function singlehome(Request $request){

        $request->validate([
            'starttime' => 'required',
            'endtime' => 'required',
            'task' => 'required',



           ],

        [
            'starttime.required' => 'please enter your starttime name',
            'endtime.required' => 'please enter your endtime name',
            'task.required' => 'please enter your task name',


        ]);


        $category=new Home_Single();
        $category->user_id = auth()->user()->id; //sync with user
        $category->start_time = $request->input('starttime');
        $category->end_time = $request->input('endtime');
        $category->task = $request->input('task');
        $category->multitaask = $request->input('multitask');
        $category->cost = $request->input('Expenditurecost');
        $category->reason_cost = $request->input('Reasons_Expenditurecost');
        $category->copartner = $request->input('copartner');
        $category->save();


        return redirect()->back();


          }
          public function __construct()
          {
              $this->middleware('auth');
          }
}
