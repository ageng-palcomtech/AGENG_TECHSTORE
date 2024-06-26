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

    <a href="/admin" class="btn btn-primary">Kembali</a>
</div>

<div class="card-body">
    <form action="/saveadmin" class="row" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col">
            <label for="nmadmin" class="form-label">NAMA ADMIN</label>
            <input type="text" value="{{old('nama_admin')}}" id="nmadmin" name="nama_admin" aria-label="NAMA ADMIN">
        </div>
        @error('nama_admin')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
        <div class="col">
            <label for="nohp" class="form-label">NO HP</label>
            <input type="text" value="{{old('nohp_admin')}}" class="form-control" name="nohp_admin "id="nohp" placeholder="NO HP" aria-label="NO HP">
        </div>
        @error('nohp_admin')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
            <div class="col">
            <label for="passadmin" class="form-label">PASSWORD</label>
            <input type="password" value="{{old('passadmin')}}" id="passadmin" name="password_admin" placeholder="PASSWORD" aria-label="PASSWORD">
        </div>
        @error('password_admin')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
        <div class="col">
            <label for="jk" class="form-label">kelamin</label>
            <select name="jk_admin" id="jk" class="form-select">
                <option value="">--pilih jenis kelamin--</option>
                <option value="lai-laki">lai-laki</option>
                <option value="perempuan">perempuan</option>
                <option value="khusus">khusus</option>
            </select>
            @error('jk')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col">
            <label for="emailadmin" class="form-label">EMAIL ADMIN</label>
            <input type="email" value="{{old('emailadmin')}}" id="emailadmin" name="email_admin" placeholder="EMAIL ADMIN" aria-label="EMAIL ADMIN">
        </div>
        @error('email_admin')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
        <div class="col">
            <label for="jbatn" class="form-label">JABATAN</label>
            <input type="text" value="{{old('jbatn')}}" id="jbatn" class="form-control" name="jabatan_admin" placeholder="JABATAN" aria-label="JABATAN">
        </div>
        @error('jabatan_admin')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
        <div class="col">
            <label for="alamatadmin">ALAMAT</label>
            <textarea class="form-control" value="{{old('alamatadmin')}}" id="alamatadmin" placeholder="Leave a comment here"
            name="alamat_admin" style="height: 100px"></textarea>
        </div>
        @error('alamat_admin')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="fotod" name="foto_admin" class="form-label">FOTO</label>
            <input class="form-control" value="{{old('fotod')}}" type="file" id="fotod">
        </div>
        @error('foto_admin')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>



</div>
</div>
  </div>
</div>












@endsection
