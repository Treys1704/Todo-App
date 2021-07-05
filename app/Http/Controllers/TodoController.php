<?php

namespace App\Http\Controllers;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){

        $todo = Todo::all();

        return view('todos.index')->with('todos', $todo);
    }

    public function show($todoId){
        return view('todos.show')->with('todo', Todo::find($todoId));
    }

    public function create(){
        return view('create_todo');
    }

    public function store(){

        $this->validate(request(), [
            'name' => 'required|min:6',
            'description' => 'required|min:5'
        ]);

        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        session()->flash('success', 'Todo created successfully');

        return redirect('/todos');
    }

    public function edit(Todo $todo){

        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo){
        $this->validate(request(), [
            'name' => 'required|min:6',
            'description' => 'required|min:5'
        ]);

        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();

        session()->flash('success', 'Todo updated successfully');

        return redirect('/todos');
    }

    public function delete(Todo $todo){

        $todo->delete();

        session()->flash('success', 'Todo deleted successfully');

        return redirect('/todos');
    }

    public function completed(Todo $todo){
        $todo->completed = true;

        $todo->save();

        return redirect('/todos');
    }
}
