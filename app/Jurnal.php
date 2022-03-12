<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    protected $table = 'jurnal';
    protected $fillable = ['penulis', 'judul', 'abstrak', 'tahun', 'cover', 'file', 'kategori_jurnal_id'];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }
    
}
