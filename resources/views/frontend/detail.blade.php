@extends('frontend.layout.home')

@push('style')
<link href="{{asset('landing/css/rating.css')}}" rel="stylesheet" />    
@endpush

@section('header')
    <!-- Header -->
    <header class="ex-header bg-dark-blue">
        <div class="container">
          <div class="row">
            <div class="col-xl-10 offset-xl-1">
              <h1>Journal {{$jurnal->judul}}</h1>
            </div>
            <!-- end of col -->
          </div>
          <!-- end of row -->
        </div>
        <!-- end of container -->
      </header>
      <!-- end of ex-header -->
@endsection

@section('content')
<div id="details" class="basic-1 bg-dark-blue">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-5">
          <div class="image-container img-book">
            <img class="img-fluid" src="{{asset('gambar/'. $jurnal->cover)}}" alt="alternative" />
          </div>
          <!-- end of image-container -->
        </div>
        <!-- end of col -->
        <div class="col-lg-6 col-xl-7">
          <div class="text-container">
            <p style="display: inline-block" class="mr-2">{{$jurnal->penulis}}</p>
            <p style="display: inline-block"><strong>( {{$jurnal->tahun}} )</strong></p>
            <h2>{{$jurnal->judul}}</h2>
            <p>Rating : 8 / 10</p>
            <p class="mb-5">
              {{ strip_tags( $jurnal->abstrak ) }}
              
            </p>
            <a class="btn-outline-lg mr-3" href="{{ url()->previous() }}">Back</a>
            <a class="btn-solid-lg" href="{{asset('doc/'. $jurnal->file)}}" target="_blank">Download Free</a>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  {{-- Komentar --}}
  <div class=" bg-dark-blue">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 my-2"> 
            <h3 class="my-3">Review</h3>
            <li class="media">
              @foreach ($jurnal->review as $item)
              @endforeach
              <a href="#" class="pull-left">
                <img src="https://bootdey.com/img/Content/user_3.jpg" alt="" class="rounded-circle" style="margin-right: 1rem" />
              </a>
              <div class="media-body">
                <strong class="text-success">{{$item->user->name}}</strong>
                <p>{{$item->isi}}</p>
              </div>
            </li>
          </div>
          <div class="col-lg-12 my-5">
            <form action="/review" method="POST">
              @csrf
                <input type="hidden" name="jurnal_id" value="{{$jurnal->id}}">
                <label class="my-1">Beri Nilai</label>
                <input class="form-control mb-2" type="number" name="poin">
                <label class="my-1">Komentar</label>
                <textarea class="form-control" name="isi" placeholder="write a comment..." rows="3" style="margin-bottom: 1rem"></textarea>
                <button type="submit" class="btn-solid-lg">Post</button>
                <div class="clearfix"></div>
            </form>
          </div>
        </div>
    </div>
  </div>
  {{-- End Komentar --}}
@endsection


    
