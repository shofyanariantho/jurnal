<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori_jurnal';
    protected $fillable = ['nama', 'deskripsi'];

    public function jurnal()
    {
        return $this->hasMany('App\Jurnal');
    }
}
