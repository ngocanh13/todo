<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    function getAllTodos()
    {
       $todo = Todos::all();
       return view('Todos',['todo'=>$todo]);

    }
    function addTodo(Request $request)
    {
        $status = $request->has('status') ? true : false;
        Todos::create(
            [
                'title'=>$request->title,
                'status'=>$status,
                'description' => $request->description,
            ]
        );
        return redirect()->back()->with('success', 'tạo');
    }
    function deleteTodo($id)
    {
        $todo = Todos::find($id);
        if($todo){
            $todo->delete();
            return redirect()->back()->with('succcess','xóa');
        }

    }

}
