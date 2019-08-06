@extends('layout.main')

@section('title',  'Daftar Gan') 

@section('container')
  <section class="main-section">
    <div class="content">
      <h1>Tambah Data Siswa</h1>
      <hr>
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
          <li><strong>{{ $error }}</strong></li>
          @endforeach
          </ul>
        </div>
        @endif

        <form action="/kontak/store" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nama">Nama Siswa</label>
            <input type="text" class="form-control" id="nama" name="nama" required="required">
          </div>
          <div class="form-group">
            <label for="email">Email Siswa</label>
            <input type="email" class="form-control" id="email" name="email" required="required">
          </div>
          <div class="form-group">
            <label for="nohp">No. HP Siswa</label>
            <input type="text" class="form-control" id="nohp" name="nohp" required="required">
          </div>
          <div class="form-group">
            <label for="foto">Foto Siswa</label>
            <input type="text" class="form-control" id="nohp" name="foto" required="required">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat Siswa</label>
            <textarea  class="form-control" name="alamat" id="alamat" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="username">Username Siswa</label>
            <textarea  class="form-control" name="username" id="username" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="password">Password Siswa</label>
            <textarea  class="form-control" name="password" id="password" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="id_kategori">Jurusan Siswa</label>
            <textarea  class="form-control" name="id_kategori" id="id_kategori" required="required"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        
        </form>
    </div>

  </section>
@endsection