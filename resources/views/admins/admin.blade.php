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
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
</div>
  </div>
</div>
@endsection
