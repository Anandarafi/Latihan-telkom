@extends('layout.main') 

@section('title', 'Daftar Data Siswa')

@section('container')
    <div class="col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Data Kontak Siswa</h2>
            </div>
            <div class="body">
                @if(Session::get('alert_message'))
                    <div class="alert alert-success">
                        <strong>{{Session::get('alert_message')}}</strong>
                    </div>
                @endif
                <table class="table table-hover table-striped">
                    <tr>
                        <td>No</td>
                        <td>Nama Siswa</td>
                        <td>Email Siswa</td>
                        <td>No. Telepon Siswa</td>
                        <td>Alamat Siswa</td>
                        <td>Foto Siswa</td>
                        <td>Nama Jurusan</td>
                        <td>Username Siswa</td>
                        <td>Password Siswa</td>
                        <td>Aksi</td>
                    </tr>
                    @php $no=0; @endphp
                    @foreach($datas as $data)
                    @php $no++; @endphp
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->nohp}}</td>
                        <td>{{$data->alamat}}</td>
                        <td><img width="40" src="{{asset('gambar/'.$data->foto)}}"></td>
                        <td>{{$data->nama_kategori}}</td>
                        <td>{{$data->username}}</td>
                        <td>{{$data->password}}</td>
                        <td><a href="/kontak/edit/{{ $data->id_kontak }}"  class="btn btn-warning">Edit</a> | <a href="/kontak/hapus/{{ $data->id_kontak }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop