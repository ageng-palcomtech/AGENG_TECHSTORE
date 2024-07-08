@extends('layouts.main')
@section('title')
home
@endsection

@section('content')
<section class="hero">
<main class="content">
<h1>Beli peralatan Elektronik kalian Disini</h1>
<P>Laptop,Pc gaming,Vga,Cpu,Psu,Ram,Ssd,Hdd,Casing pc,Fan cooler,Mother Board,Dan beracam peralatan elektronik lainnya</P>
<a href="/product" class="btn">Pesan Sekarang</a>
</main>
</section>

<section class="about container">
<h2 class="text-center mt-5 fw-bold" >About Us</h2>
<div class="row mt-3">

<div class="col-md-6">
<img src="{{ asset('images/gambar.jpg')}}" alt=""width="100%">
</div>
<div class="col-md-6">
<p>toko ini berdiri sebelum anda lahir</p>
</div>
</div>
</section>

<section class="best-product py-3 bg-primary">
<div class="container">
<h2 class="text-center fw-bold">best product</h2>
<div class="row">
    @foreach ($product as $item)

<div class="col-md-3">
<div class="card" >
  <img src="{{ asset('storage/uploads/' . $item->foto_product)}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">{{ $item->nama_product }}</h5>
    <p class="card-text">{{ $item->harga_product }}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
@endforeach


</div>
</div>
</div>
</div>
</section>

@endsection
