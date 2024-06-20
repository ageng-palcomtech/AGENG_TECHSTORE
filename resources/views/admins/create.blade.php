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
<div class="col-md-6 fw-bold ">
Add Admin AGENG_TECHSTORE
</div>
<div class="col-md-6 text-end">

    <a href="/createadmin" class="btn btn-primary">Add Admin</a>
</div>
    
  <div class="card-body">
  <div class="row g-3">

  <div class="col">
  <label for="formGroupExampleInput" class="form-label">NAMA ADMIN</label>
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">

    <label for="formGroupExampleInput" class="form-label">NO HP</label>
    <input type="text" class="form-control" placeholder="First name" aria-label="First name"> 
    
    <label for="formGroupExampleInput" class="form-label">PASSWORD</label>
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
    
  </div>
  
  
  <div class="col">
  <label for="kelamin" class="form-label">KELAMIN</label>
<select name="jk_admin" id="kelamin" class="form-select">
<option value="">--pilih jenis kelamin--</option>
<option value="lai-laki">lai-laki</option>
<option value="perempuan">perempuan</option>
<option value="khusus">khusus</option>
</select>

  <label for="formGroupExampleInput" class="form-label">EMAIL ADMIN</label>
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">

    <label for="formGroupExampleInput" class="form-label">JABATAN</label>
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>

  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">ALAMAT</label>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">FOTO</label>
  <input class="form-control" type="file" id="formFile">
</div>

  

  
  
</div> 



</div>
</div>
  </div>
</div>



   
 
  
 

  
  
 

@endsection