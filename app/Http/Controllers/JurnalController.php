<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Jurnal;
use File;
use RealRashid\SweetAlert\Facades\Alert;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $jurnal = Jurnal::all();
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
            'judul' => 'required',
            'penulis' => 'required',
            'abstrak' => 'required',
            'tahun' => 'required',
            'kategori_jurnal_id' => 'required',
            'cover'	=> 'required|image|mimes:jpeg,png,jpg|max:2048',
            'file' => 'required|mimes:pdf|max:10000',
        ],
        [
            'judul.required' => 'Judul Jurnal Tidak Boleh Kosong',
            'penulis.required' => 'Penulis Jurnal Tidak Boleh Kosong',
            'abstrak.required' => 'Abstrak Jurnal Tidak Boleh Kosong',
            'tahun.required' => 'Tahun Jurnal Tidak Boleh Kosong',
            'kategori_jurnal_id.required' => 'Ketegori Jurnal Tidak Boleh Kosong',
            'cover.required' => 'Cover Jurnal Tidak Boleh Kosong',
            'file.required' => 'File Jurnal Tidak Boleh Kosong',
        ]);

        $CoverName = time().'.'.$request->cover->extension();
        $FileName = time().'.'.$request->file->extension();

        $request->cover->move(public_path('gambar'), $CoverName);
        $request->file->move(public_path('doc'), $FileName);

        $jurnal = new Jurnal;
 
        $jurnal->penulis = $request->penulis;
        $jurnal->judul = $request->judul;
        $jurnal->abstrak = $request->abstrak;
        $jurnal->tahun = $request->tahun;
        $jurnal->cover = $CoverName;
        $jurnal->file = $FileName;
        $jurnal->kategori_jurnal_id = $request->kategori_jurnal_id;
 
        $jurnal->save();

        Alert::success('Berhasil', 'Data berhasil ditambahkan!');
        return redirect('/jurnal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = DB::table('kategori_jurnal')->get();
        $jurnal = Jurnal::find($id);
        return view('frontend.detail', compact('jurnal','kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = DB::table('kategori_jurnal')->get();
        $jurnal = Jurnal::findOrFail($id);

        return view('admin.jurnal.editjurnal', compact('jurnal', 'kategori'));
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
        $request->validate([
            'penulis' => 'required',
            'judul' => 'required',
            'abstrak' => 'required',
            'tahun' => 'required',
            'cover'	=> 'image|mimes:jpeg,png,jpg|max:2048',
            'file' => 'mimes:pdf|max:10000',
            'kategori_jurnal_id' => 'required',
        ]);

        $jurnal = Jurnal::find($id); 
        
        if($request->has('cover')) {
            $CoverName = time().'.'.$request->cover->extension();

            $request->cover->move(public_path('gambar'), $CoverName);
            $jurnal->penulis = $request->penulis;
            $jurnal->judul = $request->judul;
            $jurnal->abstrak = $request->abstrak;
            $jurnal->tahun = $request->tahun;
            $jurnal->cover = $CoverName;
            $jurnal->kategori_jurnal_id = $request->kategori_jurnal_id;
        }elseif($request->has('file')){
            $FileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('doc'), $FileName);
            $jurnal->penulis = $request->penulis;
            $jurnal->judul = $request->judul;
            $jurnal->abstrak = $request->abstrak;
            $jurnal->tahun = $request->tahun;
            $jurnal->file = $FileName;
            $jurnal->kategori_jurnal_id = $request->kategori_jurnal_id;

        }else{
            $jurnal->penulis = $request->penulis;
            $jurnal->judul = $request->judul;
            $jurnal->abstrak = $request->abstrak;
            $jurnal->tahun = $request->tahun;
            $jurnal->kategori_jurnal_id = $request->kategori_jurnal_id;
        }

        $jurnal->save();
        return redirect('/jurnal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurnal = Jurnal::find($id);
        $path = "gambar/";
        $path = "doc/";
        File::delete($path . $jurnal->cover);
        File::delete($path . $jurnal->file);
        $jurnal->delete();

        return redirect('/jurnal');
    }
}
