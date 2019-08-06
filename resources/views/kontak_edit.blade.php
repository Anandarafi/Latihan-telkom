@extends('layout.main')

@section('title',  'Update Gan') 

@section('container')
  <section class="main-section">
    <div class="content">
      <h1>Update Data Siswa</h1>
      <hr>
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
          </ul>
        </div>
        @endif

        @foreach($data as $datas)
        <form action="/kontak/update" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $datas->id_kontak}}"> <br/>
          <div class="form-group">
            <label for="nama">Nama Siswa</label>
            <input type="text" class="form-control" name="nama" value="{{ $datas->nama }}" required="required">
          </div>
          <div class="form-group">
            <label for="email">Email Siswa</label>
            <input type="email" class="form-control" name="email" value="{{ $datas->email }}" required="required">
          </div>
          <div class="form-group">
            <label for="nohp">No. HP Siswa</label>
            <input type="text" class="form-control" name="nohp" value="{{ $datas->nohp }}" required="required">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat Siswa</label>
            <textarea  class="form-control" name="alamat"  value="{{ $datas->alamat }}" required="required"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        
        </form>
        @endforeach
    </div>

  </section>
@endsection