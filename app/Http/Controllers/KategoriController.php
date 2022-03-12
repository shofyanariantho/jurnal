<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function create() {
        return view('admin.jurnal.kategori');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $kategori = new Kategori;
 
        $kategori->nama = $request->nama;
        $kategori->deskripsi = $request->deskripsi;
 
        $kategori->save();

        return redirect('/admin/jurnal/kategori');
    }

    public function index() {
        $kategori = Kategori::all();
        return view('admin.jurnal.kategori', compact('kategori'));
    }

    public function edit($kategori_id) {
        $kategori = Kategori::where('id', $kategori_id)->first();
        return view('admin.jurnal.edit-jurnal', compact('kategori'));
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