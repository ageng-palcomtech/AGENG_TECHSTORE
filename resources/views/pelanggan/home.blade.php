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
<div class="col-md-3">
<div class="card" >
  <img src="{{ asset('images/lamzu.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title"> Lamzu Maya</h5>
    <p class="card-text">Rp.1.600.000</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-3">
<div class="card" >
  <img src="{{ asset('images/4090.png')}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">RTX 4090</h5>
    <p class="card-text">Rp.39.000.000</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-3">
<div class="card" >
  <img src="{{ asset('images/RIJEN.png')}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">RYZEN 7 7800x3d</h5>
    <p class="card-text">Rp.6.800.000</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-3">
<div class="card" >
  <img src="{{ asset('images/STRIX.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">ROG STRIX16 i7-13650HX|16GB|1TB|NVIDIA RTX4060|W11</h5>
    <p class="card-text">Rp.24.800.000</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>
</div>
</section>

@endsection