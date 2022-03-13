<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profile";
    protected $fillable = ["lembaga", "gelar_depan", "gelar_belakang", "pendidikan", "jenis_kelamin", "tempat_lahir", "tanggal_lahir", "user_id"];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
