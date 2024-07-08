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
            <label for="nmproduct" class="form-label">NAMA PRODUCT</label>
            <input type="text" value="{{$product->nama_product}}" id="nmproduct" name="nama_product"  placeholder="NAMA PRODUCT" aria-label="NAMA PRODUCT">
        </div>
            @error('nama_product')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror

        <div class="col">
            <label for="jumlah" class="form-label">JUMLAH PRODUCT</label>
            <input type="number" value="{{$product->jumlah_product}}" class="form-control"
            name="jumlah_product" id="jumlah" placeholder="JUMLAH PRODUCT" aria-label="JUMLAH PRODUCT">
        </div>
        @error('jumlah_product')
        <div class="text-danger">
            {{$message}}
            @enderror

            <div class="col">
            <label for="hargaproduct" class="form-label">HARGA PRODUCT</label>
            <input type="number" value="{{$product->harga_product}}" id="hargaproduct"
            name="harga_product" placeholder="HARGA PRODUCT" aria-label="HARGA PRODUCT">
        </div>
            @error('harga_product')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror

        <div class="col">
            <label for="supplierproduct" class="form-label">SUPPLIER PRODUCT</label>
            <input type="text" value="{{$product->supplier_product}}" id="supplierproduct" name="supplier_product"
            placeholder="SUPPLIER PRODUCT" aria-label="SUPPLIER PRODUCT">
        </div>
        @error('supplier_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror

        <div class="col">
            <label for="status" class="form-label">STATUS</label>
            <select name="status_product" id="status" class="form-select">
                @if ($product->status_product=='Best Product')
                <option value="{{$product->status_product}}">{{$product->status_product}}</option>
                <option value="Basic Product">basic product</option>

                @else
                <option value="{{$product->status_product}}">{{$product->status_product}}</option>
                <option value="Best Product">Best Product</option>
                <option value="Basic Product">Basic Product</option>
                @endif
            </select>
            @error('status_product')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>

        {{-- <div class="col">
            <label for="status" class="form-label">STATUS PRODUCT</label>
            <select name="status_product" id="status" class="form-select">
                <option value="">--PILIH SATUS PRODUCT--</option>
                <option value="Best Product">Best Product</option>
                <option value="basic product">BASIC PRODUCT</option>

            </select>
            @error('status_product')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div> --}}
        {{-- <div class="col">
            <label for="sttsproduct" class="form-label">status</label>
            <input type="file" value="{{$product->jabatan_product}}" id="sttsproduct" class="form-control" name="status_product" placeholder="status" aria-label="STATUS">
        </div>
        @error('status_product')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror --}}

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
