<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review_jurnal';
    protected $fillable = ['isi', 'poin', 'user_id', 'jurnal_id'];

    public function jurnal() {
        return $this->belongsTo('App\Jurnal');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
