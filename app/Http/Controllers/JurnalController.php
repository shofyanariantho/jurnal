<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Jurnal;
use File;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurnal = jurnal::all();
        return view('admin.jurnal.index', compact('jurnal'));
        // return view('frontend.journal', compact('jurnal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = DB::table('kategori_jurnal')->get();
        return view('admin.jurnal.create', compact('kategori'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'penulis' => 'required',
            'judul' => 'required',
            'abstrak' => 'required',
            'tahun' => 'required',
            'cover'	=> 'required|image|mimes:jpeg,png,jpg|max:2048',
            'file' => 'required|mimes:pdf|max:10000',
            'kategori_jurnal_id' => 'required',
        ]);

        $CoverName = time().'.'.$request->cover->extension();
        $FileName = time().'.'.$request->file->extension();

        $jurnal = new Jurnal;
 
        $jurnal->penulis = $request->penulis;
        $jurnal->judul = $request->judul;
        $jurnal->abstrak = $request->abstrak;
        $jurnal->tahun = $request->tahun;
        $jurnal->cover = $CoverName;
        $jurnal->file = $FileName;
        $jurnal->kategori_jurnal_id = $request->kategori_jurnal_id;
 
        $jurnal->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
