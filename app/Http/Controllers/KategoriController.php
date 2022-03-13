<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
Use Alert;


class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function create() {
        return view('admin.jurnal.kategori');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ],
        [
            'nama.required' => 'Nama Ketegori Tidak Boleh Kosong',
            'deskripsi.required' => 'Deskripsi Kategori Tidak Boleh Kosong',
        ]
    );

        $kategori = new Kategori;
 
        $kategori->nama = $request->nama;
        $kategori->deskripsi = $request->deskripsi;
 
        $kategori->save();
        Alert::success('Congrats', 'You\'ve Has Been Add Ketegori');
        return redirect('/admin/jurnal/kategori');
    }

    public function index() {
        $kategori = Kategori::all();
        return view('admin.jurnal.kategori', compact('kategori'));
    }

    public function edit($kategori_id) {
        $kategori = Kategori::where('id', $kategori_id)->first();
        return view('admin.jurnal.editkategori', compact('kategori'));
    }

    public function update(Request $request, $kategori_id) {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
        
        $kategori = Kategori::find($kategori_id);
        
        $kategori->nama = $request['nama'];
        $kategori->deskripsi = $request['deskripsi'];

        $kategori->save();

        return redirect('/admin/jurnal/kategori');
    }

   

    public function destroy($kategori_id) {
        $kategori = Kategori::find($kategori_id);
 
        $kategori->delete();

        return redirect('/admin/jurnal/kategori');
    }
}