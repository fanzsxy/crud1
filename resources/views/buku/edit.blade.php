@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">EDIT BUKU</h1>
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
        
<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @method('PUT')

    @csrf

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama buku</label>
    <input type="text" name="nama_buku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$buku->nama_buku}}">
    @error('nama_buku')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">penerbit</label>
    <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$buku->penerbit}}">
    @error('penerbit')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="title" class="form-label">Book Category</label>
    <select name="id_kategori" id="id_kategori"
        class="form-control @error('kategori_id') is-invalid @enderror">
        <option value="" disabled selected>select category</option>
        @foreach ($kategori as $k)
            <option value="{{ $k->id_kategori }}"
                {{ $k->id_kategori == $buku->kategori_id ? 'selected' : '' }}>
                {{ $k->nama_kategori }}
            </option>
        @endforeach
    </select>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">tanggal terbit</label>
    <input type="date" name="tanggal_terbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$buku->tanggal_terbit}}">
    @error('tanggal_terbit')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  
   

    <input class="btn btn-primary" type="submit" name="submit" value="simpan">
</form>
</div>

@endsection
    </div>
    </div>



