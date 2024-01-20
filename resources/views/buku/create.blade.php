@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">TAMBAH BUKU</h1>
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

<form action="/buku/store" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
    <input type="text" name="nama_buku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penerbit</label>
    <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal Terbit</label>
    <input type="date" name="tanggal_terbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
   
    
    <input class="btn btn-primary" type="submit" name="submit" value="simpan">
</form>



</div>
</div>

@endsection
    </div>
    </div>

