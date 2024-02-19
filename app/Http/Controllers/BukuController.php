<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index(){
        
        $buku = DB::table('buku')
        ->join('kategori', 'kategori.id_kategori', '=', 'buku.id_kategori')
        ->get();

return view('buku.index')->with('buku', $buku);

        // $buku = Buku::all();

        // return view('buku.index',compact(['buku']));
    }

    public function create(){
        $buku['kategori'] = Kategori::all();
        return view('buku.create',$buku);
    }

    public function store(Request $request){
        $request->validate([
            'nama_buku' => 'required|min:2',
            'penerbit' => 'required',
            'tanggal_terbit' => 'required',
        ]);

        $nama_buku = $request->nama_buku;
        $penerbit = $request->penerbit;
        $tanggal_terbit = $request->tanggal_terbit;
        $kategori = $request->kategori;
        
        Buku::create([
            'nama_buku'=>$nama_buku,
            'penerbit'=>$penerbit,
            'tanggal_terbit'=>$tanggal_terbit,
            'id_kategori'=>$kategori,
            

        ]);

        //  Buku::create($request->except(['_token','submit']));
         return redirect('/buku')->with('status','buku berhasil ditambah');
    }

    public function edit($id){

        $data = [  
        'buku'=> Buku::where('id', $id)->first(),
        'kategori' => Kategori::all()
        ];
        return view('buku.edit',$data);
        
    }
    public function update(Request $request ,$id){

        // $request->validate([
        //     'nama_buku' => 'required',
        //     'penerbit' => 'required',
        //     'id_kategori' => 'required',
        //     'tanggal_terbit' => 'required'
        // ]);

        $buku = Buku::where('id', $id)->first();
        // $buku->update([
        //     'nama_buku' => $request->nama_buku,
        //     'penerbit' => $request->penerbit,
        //     'id_kategori' => $request->id_kategori,
        //     'tanggal_terbit' => $request->tanggal_terbit
        // ]);

        $buku->update($request->except(['_token','submit']));

        return redirect('/buku')->with('status','buku berhasil diedit');
    }

    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku')->with('status','buku berhasil dihapus');
    }

}
