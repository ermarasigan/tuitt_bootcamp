<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
// use Auth;

class TaskController extends Controller
{
	 // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }

    function showTasks(){
    	$title = 'Tasks List';
    	$tasks = Task::all();
   	 	return view('tasks/tasks_list', compact('title','tasks'));
    }

    function createTask(Request $request){
    	
        $name = $request->name;
        $description = $request->description;

        $rules = ['name'=>'required'
                 ,'description'=>'required'];
        $this->validate($request,$rules);

		$new_task = new Task();
		$new_task->name = $name;
		$new_task->description = $description;
		$new_task->save();

		return back();
	}

	function deleteTask($id){
    	$task_tbd = Task::find($id);
    	$task_tbd->delete();

    	return back();
    }

    function editTask($id){
    	$title = 'Tasks List';
    	$task = Task::find($id);

    	return view('tasks/edit_form',compact('title','task'));
    }

    function saveEditTask($id, Request $request){

        $name = $request->name;
        $description = $request->description;

        $rules = ['name'=>'required'
                 ,'description'=>'required'];
        $this->validate($request,$rules);

    	$task_tbe = Task::find($id);
    	$task_tbe->name = $name;
    	$task_tbe->description = $description;
    	$task_tbe->save();

    	return redirect('/home');
    }
}