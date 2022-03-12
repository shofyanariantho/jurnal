@extends('frontend.layout.home')
@section('content')
<div class="basic-1 bg-dark-blue" style="height: 100%">
    <div class="container" class= "d-flex justify-content-center">
            <h1>Login</h1>
    </div>
    <hr class="mb-4"/>
    <div class="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-6">
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
                        <a style="float: left" href="/register"><strong>Register Here</strong> </a>
                        <button type="submit" class="btn btn-solid-reg" style="float: right">
                            {{ __('LOGIN') }}
                        </button>
                        </div>
                </div>
                {{-- ROW 2 --}}
                
                
            </div>
        </form>
        </div>
    </div>
    
@endsection