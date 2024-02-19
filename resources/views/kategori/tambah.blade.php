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

<form action="/kategori/store" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kategori</label>
    <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" value="{{old ('nama_kategori')}}" id="nama_kategori" aria-describedby="emailHelp">
    @error('nama_kategori')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control  @error('slug') is-invalid @enderror" value="{{old ('slug')}}" id="slug" aria-describedby="emailHelp">
    @error('slug')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  
  
  
   
    
    <input class="btn btn-primary" type="submit" name="submit" value="simpan">
</form>



</div>
</div>

@endsection
    </div>
    </div>

