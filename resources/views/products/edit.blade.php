@extends('layouts.app')
@section('title')
product
@endsection
@section('content')


<h1>product</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
<hr>
<div class="card">
<div class="card-header row align-items-center">
<div class="col-md-6 fw-bold ">
Add product AGENG_TECHSTORE
</div>
<div class="col-md-6 text-end">

    <a href="/product" class="btn btn-primary">Kembali</a>
</div>

<div class="card-body">
    <form action="/updateproduct/{{$product->id}}" class="row" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="col">
            <label for="nmproduct" class="form-label">NAMA product</label>
            <input type="text" value="{{$product->nama_product}}" id="nmproduct" name="nama_product" aria-label="NAMA product">
        </div>
        @error('nama_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
        <div class="col">
            <label for="nohp" class="form-label">NO HP</label>
            <input type="text" value="{{$product->nohp_product}}" class="form-control" name="nohp_product" id="nohp" placeholder="NO HP" aria-label="NO HP">
        </div>
        @error('nohp_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
            <div class="col">
            <label for="passproduct" class="form-label">PASSWORD</label>
            <input type="password" value="{{$product->password_product}}" id="passproduct" name="password_product" placeholder="PASSWORD" aria-label="PASSWORD">
        </div>
        @error('password_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
        <div class="col">
            <label for="jk" class="form-label">kelamin</label>
            <select name="jk_product" id="jk" class="form-select">
                @if ($product->jk_product=='laki-laki')
                <option value="{{$product->jk_product}}">{{$product->jk_product}}</option>
                <option value="perempuan">perempuan</option>
                <option value="khusus">khusus</option>

                @elseif ($product->jk_product=='perempuan')
                <option value="{{$product->jk_product}}">{{$product->jk_product}}</option>
                <option value="laki-laki">laki-laki</option>
                <option value="khusus">khusus</option>

                @else
                <option value="{{$product->jk_product}}">{{$product->jk_product}}</option>
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
                @endif
            </select>
            @error('jk_product')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col">
            <label for="emailproduct" class="form-label">EMAIL product</label>
            <input type="email" value="{{$product->email_product}}" id="emailproduct" name="email_product" placeholder="EMAIL product" aria-label="EMAIL product">
        </div>
        @error('email_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
        <div class="col">
            <label for="jbatn" class="form-label">JABATAN</label>
            <input type="text" value="{{$product->jabatan_product}}" id="jbatn" class="form-control" name="jabatan_product" placeholder="JABATAN" aria-label="JABATAN">
        </div>
        @error('jabatan_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
        <div class="col">
            <label for="alamatproduct">ALAMAT</label>
            <textarea class="form-control" id="alamatproduct"
            name="alamat_product" style="height: 100px">{{$product->alamat_product}}</textarea>
        </div>
        @error('alamat_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="fotod" class="form-label">FOTO</label>
            <input  name="foto_lama" value="{{$product->foto_product}}" type="hidden">
            <input class="form-control" name="foto_product" value="{{$product->foto_product}}" type="file" id="fotod">
        </div>
        @error('foto_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
    </div>



    </div>
<
  </div>
    </div>












@endsection
