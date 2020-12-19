<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;


class MenuController extends Controller
{
    public function menuadmin(){
        $data_menu = Menu::all();
        return view ('menuadmin',compact('data_menu'));
    }

    public function create(){
        return view ('menu_create');
    }

    public function store(Request $request){
        Menu::create($request->all());
        return redirect()->route('menuadmin','menu');
    }

    public function edit($id){
        $data_menu = Menu::findorfail($id);
        return view('menu_edit',compact('data_menu'));
    }

    public function update(Request $request, $id){
        $data_menu = Menu::findorfail($id)
        -> update ([
                'image'         => $request['image'],
                'name'          => $request['name'],
                'description'   => $request['description'],
                'price'         => $request['price'],
        ]);
        return redirect()->route('menuadmin','menu');
    }

    public function delete($id){
        $data_menu = Menu::findorfail($id)
        -> delete();
        return redirect()->route('menuadmin','menu');
    }
    
    public function menu(){
        $data_menu = Menu::all();
        return view ('menu', compact('data_menu'));
    }

}
