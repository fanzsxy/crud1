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

<table  class="table table-hover">
    <tr>
        
        <th>Nama Buku</th>
        <th>Penerbit</th>
        <th>Kategori</th>
        <th>Tanggal Terbit</th>
   
    </tr>
@foreach($buku as $kategori )

    <tr>
       
        <td>{{$kategori->nama_buku}}</td>
        <td>{{$kategori->penerbit}}</td>
        <td>{{$kategori->nama_kategori}}</td>
        <td>{{$kategori->tanggal_terbit}}</td>
      
    </tr>
@endforeach
</table>
</div>

@endsection
    </div>
    </div>

    
