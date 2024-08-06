<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::orderBy('updated_at', 'desc')->get();
        return view('todo.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $todo = Todo::create([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body'),
        //     'author' => $request->input('author'),
        // ]);
        // return redirect('todo.index');
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->author = $request->author;
        $todo->save();
        return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $id)
    {
        return view('todo.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $id)
    {
        return view('todo.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $id)
    {
        $id->title = $request->title;
        $id->body = $request->body;
        $id->author = $request->author;
        $id->save();
        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $id)
    {
        // dd($id);
        $id->delete();
        return redirect()->route('todo.index');
    }
}
