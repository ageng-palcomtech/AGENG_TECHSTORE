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
Edit product AGENG_TECHSTORE
</div>
<div class="col-md-6 text-end">

    <a href="/product" class="btn btn-primary">Kembali</a>
</div>

<div class="card-body">
    <form action="/saveproduct" class="row" method="post" enctype="multipart/form-data">
        {{-- @method('PUT') --}}
        @csrf
        <div class="col">
            <label for="namaaproduct" class="form-label">NAMA PRODUCT</label>
            <input type="text" value="{{old('nama_product')}}" id="namaaproduct" name="nama_product"
            placeholder="NAMA PRODUCT" aria-label="NAMA product">
            @error('nama_product')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>

            <div class="col">
            <label for="jumlah" class="form-label">JUMLAH PRODUCT</label>
            <input type="number" value="{{old('jumlah_product')}}" id="jumlah" name="jumlah_product" placeholder="JUMLAH PRODUCT" aria-label="JUMLAH PRODUCT">
        </div>
        @error('jumlah_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror

        <div class="col">

            <div class="col">
            <label for="harga" class="form-label">HARGA PRODUCT</label>
            <input type="number" value="{{old('harga_product')}}" id="harga" name="harga_product" placeholder="HARGA PRODUCT" aria-label="HARGA PRODUCT">
        </div>
        @error('harga_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror

        </div>
        <div class="col">
            <label for="SUPPLIER" class="form-label">SUPPLIER PRODUCT</label>
            <input type="text" value="{{old('supplier_product')}}" id="SUPPLIER" name="supplier_product" placeholder="SUPPLIER PRODUCT" aria-label="SUPPLIER PRODUCT">
        </div>
        @error('supplier_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
        <div class="col">
            <label for="status" class="form-label">STATUS PRODUCT</label>
            <select name="status_product" id="status" class="form-select">
                <option value="">--PILIH SATUS PRODUCT--</option>
                <option value="best product">BEST PRODUCT</option>
                <option value="basic product">BASIC PRODUCT</option>

            </select>
            @error('status_product')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        {{-- <div class="col">
            <label for="stts" class="form-label">status</label>
            <input type="text" value="{{old('status_product')}}" id="stts" class="form-control" name="status_product" placeholder="STATUS" aria-label="STATUS">
        </div>
        @error('status_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror --}}

        <div class="mb-3">
            <label for="fotod" class="form-label">FOTO</label>
            <input class="form-control" name="foto_product" value="{{old('foto_product')}}" type="file" id="fotod">
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
