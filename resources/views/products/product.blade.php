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
<div class="col-md-6">
Data product AGENG_TECHSTORE
</div>
<div class="col-md-6 text-end">

    <a href="/createproduct" class="btn btn-primary">Add product</a>
</div>

  <div class="card-body">
  <table class="table table-bordered">

    <tr>
        <th scope="col">NO</th>
        <th scope="col">FOTO</th>
      <th scope="col">NAMA</th>
      <th scope="col">JUMLAH</th>
      <th scope="col">HARGA</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($product as $item)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td><img src="{{ asset('storage/uploads/' . $item->foto_product)}}" alt="" width="70px"></td>
      <td>{{ $item->nama_product }}</td>
      <td>{{ $item->jumlah_product }}</td>

      <td>
      <a class="btn btn-primary" href="/detailsproduct/{{$item->id}}" role="button">details</a>
      </td>

      <td>
      <a class="btn btn-primary" href="/editproduct/{{$item->id}}" role="button">edit</a>
      </td>
      <td>
        <a class="btn btn-primary" href="/deleteproduct/{{$item->id}}" role="button">Delete</a>
        </td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
  </div>
</div>
@endsection
