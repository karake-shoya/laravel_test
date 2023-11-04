<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
    function index()
    {
        $todo_lists = TodoList::all();

        return view('todo_list.index', ['todo_lists' => $todo_lists]);
    }

    function addTodo(Request $request)
    {
        $todo_list = new TodoList();
        $todo_list->name = $request->name;
        $todo_list->save();
        return redirect('/list');
    }

    function updateTodo(Request $request, $id)
    {
        $todo_list = TodoList::find($id);
        $todo_list->name = $request->input('name'); //'name'フィールドの値を更新
        $todo_list->save();
        return redirect('/list');
    }

    function deleteTodo($id)
    {
        $todo_list = TodoList::find($id);
        $todo_list->delete();
        return redirect('/list');
    }
}
