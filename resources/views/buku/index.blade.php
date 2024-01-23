@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">BUKU</h1>
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
<a href="/buku/create" class="btn btn-primary">tambah</a>
<table  class="table table-hover">
    <tr>
        <th>No</th>
        <th>Nama Buku</th>
        <th>Penerbit</th>
        <th>Tanggal Terbit</th>
        <th>Aksi</th>
    </tr>
@foreach($buku as $b)

    <tr>
        <td>{{$b->id}}</td>
        <td>{{$b->nama_buku}}</td>
        <td>{{$b->penerbit}}</td>
        <td>{{$b->tanggal_terbit}}</td>
        <td >
         <div class="btn-group" role="group" aria-label="Basic example">
            
            <a href="/buku/{{$b->id}}/edit" class="btn btn-warning">edit</a>
            <a href="#" class="btn btn-danger" id="delete" data-id="{{$b->id}}">hapus</a>
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
    </div>
    </div>

    
