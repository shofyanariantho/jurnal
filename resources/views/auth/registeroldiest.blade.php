@extends('frontend.layout.home')
@section('content')
<div id="journal" class="basic-3 bg-dark-blue" style="height: 841px">
    <div class="container" class= "d-flex justify-content-center">
            <h1>Register Now</h1>
    </div>
    <hr class="mb-4"/>
    <div class="container">
        <form action="{{ route('register') }}" method="POST">
            @csrf
        <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control-input form-control-select" placeholder="Masukan Nama" required >
                        @error('name')
                        <div class="alert alert-primary" role="alert">
                           {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control-input form-control-select" placeholder="Email" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input type="password" name="password" class="form-control-input form-control-select" placeholder="Password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control-input form-control-select" placeholder="Re-Type Password" required>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                          <input type="text" name="lembaga" class="form-control-input form-control-select" placeholder="Lembaga" required>
                          @error('lembaga')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                    </div>
                
                    <div class="form-group">
                      <input type="text" name="gelar_depan" class="form-control-input form-control-select" placeholder="Gelar Depan" required>
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
                            <input type="text" name="gelar_belakang" class="form-control-input form-control-select" placeholder="Gelar Belakang" required >
                            @error('gelar_belakang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="pendidikan" class="form-control-input form-control-select" placeholder="Pendidikan Terakhir" required>
                            @error('pendidikan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" name="jenis_kelamin" class="form-control-input form-control-select" placeholder="Jenis Kelamin" required>
                            @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        {{-- <div class="form-group ">
                            <select name="jenis_kelamin" class="form-control-select form-control-input" required >
                                <option value="" disabled selected >Jenis Kelamin</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <input type="text" name="tempat_lahir" class="form-control-input form-control-select" placeholder="Tempat Lahir" required>
                            @error('tempat_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                              <input type="text" onfocus="(this.type='date')" name="tanggal_lahir" class="form-control-input form-control-select" placeholder="Tanggal Lahir" required>
                              @error('tanggal_lahir')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                        </div>
                        <div class="form-group">
                        <a class="popup-with-move-anim" style="float: left" href="#login"><strong>already have account?</strong> </a>
                        <button type="submit" class="btn btn-solid-reg" style="float: right">
                            {{ __('REGISTER') }}
                        </button>
                        </div>
                    </div>    
        </div>
        </form>
    </div>
    
</div>
@endsection