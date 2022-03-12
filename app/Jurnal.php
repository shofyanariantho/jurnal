<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    protected $table = 'kategori_jurnal';
    protected $fillable = ['penulis', 'judul', 'abstrak', 'tahun', 'cover', 'file', 'user_id', 'kategori_jurnal_id'];
}
