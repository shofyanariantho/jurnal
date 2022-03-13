<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function index(){
        $profile = Profile::where('user_id', Auth::id())->first();

        return view('frontend.profile', compact('profile'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'lembaga' => ['required'],
            'gelar_depan' => ['required'],
            'gelar_belakang' => ['required'],
            'pendidikan' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required'],
        ],
    );
    $profile = Profile::find($id);
    $profile->lembaga = $request['lembaga'];
    $profile->gelar_depan = $request['gelar_depan'];
    $profile->gelar_belakang = $request['gelar_belakang'];
    $profile->pendidikan = $request['pendidikan'];
    $profile->tempat_lahir = $request['tempat_lahir'];
    $profile->tanggal_lahir = $request['tanggal_lahir'];
    $profile->save();
    Alert::success('Congrats', 'You\'ve Profile Has Been Updated');
    return redirect('/profil');
    }

}
