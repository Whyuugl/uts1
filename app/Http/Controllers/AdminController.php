<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = Admin::all();
        return view('admin', compact('data'));
    }

    public function user(){
        return view('user');
    }

    public function tambahbunga(){
        return view('tambahbunga');
    }

    public function insertbunga(Request $request){
        $data = Admin::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotobunga/', $request->file('foto')->getClientOriginalName());
            $data->Foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin')->with('success', 'Data Berhasil Ditambah');
    }

    public function tampilbunga($id){
        $data = Admin::find($id);
        return view('tampilbunga', compact('data'));
    }

    public function updatebunga(Request $request, $id){
        $data = Admin::find($id);
        $data->update($request->all());
        return redirect()->route('admin')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id) {
        $data = Admin::find($id);
        $data->delete();
        return redirect() -> route('admin') -> with('succes', 'Berhasil');
    }
}
