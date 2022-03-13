@extends('frontend.layout.home')
@section('content')
<div class="basic-1 bg-dark-blue" style="height: 100%">
    <div class="container" class= "d-flex justify-content-center">
            <h1>Upadate Your Profile</h1>
    </div>
    <hr class="mb-4"/>
    <div class="container">
        <form action="/profil/{{$profile->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" value="{{$profile->user->name}}" class="form-control-input form-control-select" placeholder="Masukan Nama" required  disabled style="background-color: gray">
                        @error('name')
                        <div class="alert alert-primary" role="alert">
                           {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{$profile->user->email}}"class="form-control-input form-control-select" placeholder="Email" required disabled style="background-color: gray">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                   
                    <div class="form-group">
                        <label for="lembaga">Nama Lembaga</label>
                          <input type="text" name="lembaga" value="{{$profile->lembaga}}" class="form-control-input form-control-select" placeholder="Lembaga" required>
                          @error('lembaga')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="gelar_depan">Gelar Depan</label>
                      <input type="text" name="gelar_depan" value="{{$profile->gelar_depan}}" class="form-control-input form-control-select" placeholder="Gelar Depan" required>
                      @error('gelar_depan')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                </div>
                {{-- ROW 2 --}}
                <div class="col">
                    <div class="form-group">
                        <label for="gelar_belakang">Gelar Belakang</label>
                        <input type="text" name="gelar_belakang" value="{{$profile->gelar_belakang}}" class="form-control-input form-control-select" placeholder="Gelar Belakang" required >
                        @error('gelar_belakang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan Terakhir</label>
                            <input type="text" name="pendidikan" value="{{$profile->pendidikan}}" class="form-control-input form-control-select" placeholder="Pendidikan Terakhir" required>
                            @error('pendidikan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                     
                        
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{$profile->tempat_lahir}}" class="form-control-input form-control-select" placeholder="Tempat Lahir" required>
                            @error('tempat_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                              <input type="text" value="{{$profile->tanggal_lahir}}" onfocus="(this.type='date')" name="tanggal_lahir" class="form-control-input form-control-select" placeholder="Tanggal Lahir" required>
                              @error('tanggal_lahir')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                        </div>
                        <div class="form-group">
                        <a style="float: left" href="/login"><strong>already have account?</strong> </a>
                        <button type="submit" class="btn btn-solid-reg" style="float: right">
                            {{ __('Update Profile') }}
                        </button>
                        </div>
                    </div>    
                
            </div>
        </form>
        </div>
    </div>
    
@endsection