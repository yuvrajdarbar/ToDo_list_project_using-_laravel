<?php

namespace App\Http\Controllers;

use App\Models\todo_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = todo_list::all();
        return view('home',['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $list = DB::table('todo_lists')->insert([
            'name' =>$request->name,

        ]);
        return redirect(route('index'));
    }

       /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todo_list  $todo_list
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = DB::table('todo_lists')->find($id);
        return view('edit_list',['list' => $list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todo_list  $todo_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $list = DB::table('todo_lists')->where('id',$id)->update([
            'name' =>$request->name,
        ]);
        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todo_list  $todo_list
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('todo_lists')->where('id',$id)->delete();
        return redirect(route('index'));
    }
}
