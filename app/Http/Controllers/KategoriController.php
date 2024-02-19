<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Buku;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    
    public function index(){

          $kategori = Kategori::all();

        return view('kategori.index',compact(['kategori']));
    }

    
   
    public function kategori($id_kategori)
    {

        $buku = DB::table('buku')
            ->join('kategori', 'kategori.id_kategori', '=', 'buku.id_kategori')
            ->where('buku.id_kategori', $id_kategori)
            ->get();

        return view('kategori.kategori1')->with('buku', $buku);
    }

    // public function kategori2($id_kategori)
    // {

    //     $buku = DB::table('buku')
    //         ->join('kategori', 'kategori.id_kategori', '=', 'buku.id_kategori')
    //         ->where('buku.id_kategori', $id_kategori)
    //         ->get();

    //     return view('kategori.kategori1')->with('buku', $buku);
    // }

    // public function kategori3($id_kategori)
    // {

    //     $buku = DB::table('buku')
    //         ->join('kategori', 'kategori.id_kategori', '=', 'buku.id_kategori')
    //         ->where('buku.id_kategori', $id_kategori)
    //         ->get();

    //     return view('kategori.kategori1')->with('buku', $buku);
    // }

    public function create(){
        $kategori['kategori'] = Kategori::all();
        return view('kategori.tambah',$kategori);
    }

    public function store(Request $request){
        $request->validate([
            'nama_kategori' => 'required',
            'slug' => 'required',

        ]);

        $nama_kategori = $request->nama_kategori;
        $slug = $request->slug;

        Kategori::create([
            'nama_kategori'=>$nama_kategori,
            'slug'=>$slug,
        ]);

        //  Buku::create($request->except(['_token','submit']));
         return redirect('/kategori/index')->with('status','buku berhasil ditambah');
    }

    public function edit($id_kategori){

        $data = [  
        'kategori'=> Kategori::where('id_kategori', $id_kategori)->first(),
       
        ];
        return view('kategori.edit',$data);
        
    }
    public function update(Request $request ,$id_kategori){

        // $request->validate([
        //     'nama_buku' => 'required',
        //     'penerbit' => 'required',
        //     'id_kategori' => 'required',
        //     'tanggal_terbit' => 'required'
        // ]);

        $kategori = Kategori::where('id_kategori', $id_kategori)->first();
        // $buku->update([
        //     'nama_buku' => $request->nama_buku,
        //     'penerbit' => $request->penerbit,
        //     'id_kategori' => $request->id_kategori,
        //     'tanggal_terbit' => $request->tanggal_terbit
        // ]);

        $kategori->update($request->except(['_token','submit']));

        return redirect('/kategori/index')->with('status','buku berhasil diedit');
    }

    public function delete1($id_kategori){
        $kategori = Kategori::find($id_kategori);
        $kategori->delete();
        return redirect('/kategori/index')->with('status','buku berhasil dihapus');
    }

}
