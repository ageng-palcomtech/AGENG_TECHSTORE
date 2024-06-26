@extends('layouts.app')
@section('title')
admin
@endsection
@section('content')


<h1>admin</h1>
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
Data Admin AGENG_TECHSTORE
</div>
<div class="col-md-6 text-end">

    <a href="/createadmin" class="btn btn-primary">Add Admin</a>
</div>

  <div class="card-body">
  <table class="table table-bordered">

    <tr>
      <th scope="col">NO</th>
      <th scope="col">FOTO</th>
      <th scope="col">NAMA</th>
      <th scope="col">JABATAN</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($admin as $item)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td><img src="{{ asset('storage/uploads' . $item->foto_admin)}}" alt="" width="70px"></td>
      <td>{{ $item->nama_admin }}</td>
      <td>{{ $item->nohp_admin }}</td>

      <td>
      <a class="btn btn-success" href="/detailsadmin/{{$item->id}}" role="button">details</a>
      </td>

      <td>
      <a class="btn btn-success" href="/editadmin/{{$item->id}}" role="button">edit</a>
      </td>
      <td>
        <a class="btn btn-success" href="/deleteadmin/{{$item->id}}" role="button">Delete</a>
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
