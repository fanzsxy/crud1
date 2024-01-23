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
        $request->validate([
            'nama_buku' => 'required|min:2',
            'penerbit' => 'required',
            'tanggal_terbit' => 'required',

        ]);

         Buku::create($request->except(['_token','submit']));
         return redirect('/buku')->with('status','buku berhasil ditambah');
    }

    public function edit($id){

        $buku = Buku::find($id);
        return view('buku.edit',compact(['buku']));
    }
    public function update($id,Request $request){

        $request->validate([
            'nama_buku' => 'required|min:2',
            'penerbit' => 'required',
            'tanggal_terbit' => 'required',

        ]);

        $buku = Buku::find($id);
        $buku->update($request->except(['_token','submit']));
        return redirect('/buku')->with('status','buku berhasil diedit');
    }

    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku')->with('status','buku berhasil dihapus');
    }
}
