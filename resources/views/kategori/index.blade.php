@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kategori</h1>
          </div><!-- /.col -->
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Buku v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->


      <div class="container">
<a href="/kategori/tambah" class="btn btn-primary">tambah</a>
<table  class="table table-hover">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>daftar buku</th>
        <th>Aksi</th>
    </tr>
@foreach($kategori as $k)

    <tr>
        <td>{{$k->id_kategori}}</td>
        <td>{{$k->nama_kategori}}</td>
        <td>
          <a href="/kategori/{{$k->id_kategori}}" class="">lihat</a>
        </td>
        <td >
         <div class="btn-group" role="group" aria-label="Basic example">
            
            <a href="/kategori/{{$k->id_kategori}}/edit" class="btn btn-warning">edit</a>
    
            {{-- <form action="/buku/{{$b->id}}" method="POST" >
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" id="delete" value="hapus">
            </form> --}}
          </div>
        </td>
        
    </tr>
    
@endforeach
</table>

</div>

@endsection



    
