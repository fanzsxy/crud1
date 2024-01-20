<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;


class BukuController extends Controller
{
    public function index(){
        $buku = Buku::all();

        return view('buku.index',compact(['buku']));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){

         Buku::create($request->except(['_token','submit']));
         return redirect('/buku');
    }

    public function edit($id){

        $buku = Buku::find($id);
        return view('buku.edit',compact(['buku']));
    }
    public function update($id,Request $request){
        $buku = Buku::find($id);
        $buku->update($request->except(['_token','submit']));
        return redirect('/buku');
    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}
