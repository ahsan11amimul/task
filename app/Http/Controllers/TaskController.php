<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=Task::where('user_id',auth()->user()->id)->paginate(10);
        return view('task.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data=$request->validate([
            'title' => 'required',
            'description' => 'required',
           
        ]);
        auth()->user()->tasks()->create($validate_data);
        return redirect('/')->with('success','Task Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('task.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('task.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validate_data=$request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'nullable'
           
        ]);
        $task->update($validate_data);
        return redirect('/')->with('success','Task Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/')->with('success','Task Deleted Successfully');
    }
}
