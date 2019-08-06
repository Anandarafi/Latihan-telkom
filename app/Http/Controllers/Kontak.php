<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use App\ModelKontak;
use Validator;

class Kontak extends Controller
{
    public function index()
    {
        //mengamil data dari table kategori
        $data['datas']=ModelKontak::join('kategori','kategori.id_kategori','kontak.id_kategori')->get(); 
        //mengirim data
        return view("kontak",$data);
    }
    public function create()
    {
        return view('kontak_create');
    }
    public function store(Request  $request)
    {
        $this->validate($request, [
            'nama'          => 'required',
            'email'         => 'required',
            'nohp'          => 'required',
            'foto'          => 'required',
            'alamat'        => 'required', 
            'username'      => 'required',
            'password'      => 'required', 
            'id_kategori'   => 'required' 
        ]);

        $data = new ModelKontak();
        $data->nama         = $request->nama;
        $data->email        = $request->email;
        $data->nohp         = $request->nohp;
        $data->foto         = $request->foto;
        $data->alamat       = $request->alamat;
        $data->username     = $request->username;
        $data->password     = $request->password;
        $data->id_kategori  = $request->id_kategori;
        $data->save();

        return redirect()->action('Kontak@index')->with('alert_message', 'Berhasil Menambah Data Siswa Baru!');
    }
    public function edit($id)
    {
        $data = ModelKontak::where('id_kontak', $id)->get();
        return view('kontak_edit', compact('data'));
    }
    //update Data
    public function update(Request $request)
    {

        ModelKontak::where('id_kontak', $request->id)->update([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'nohp'      => $request->nohp,
            'alamat'    => $request->alamat
        ]);
        
        return redirect()->action('Kontak@index')->with('alert_message', 'Berhasil Mengubah Data Siswa Gan!');

    }
    public function hapus($id)
    {
        ModelKontak::where('id_kontak', $id)->delete();

        return redirect()->action('Kontak@index')->with('alert_message', 'Berhasil Menghapus Data Siswa Gan');
    }
    
}
