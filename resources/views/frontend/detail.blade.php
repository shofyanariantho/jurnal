@extends('frontend.layout.home')

@section('header')
    <!-- Header -->
    <header class="ex-header bg-dark-blue">
        <div class="container">
          <div class="row">
            <div class="col-xl-10 offset-xl-1">
              <h1>Detail Journal (Judul Journal)</h1>
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
            <img class="img-fluid" src="{{asset('landing/images/coverbook.jpg')}}" alt="alternative" />
          </div>
          <!-- end of image-container -->
        </div>
        <!-- end of col -->
        <div class="col-lg-6 col-xl-7">
          <div class="text-container">
            <p style="display: inline-block" class="mr-2">William H Brock</p>
            <p style="display: inline-block"><strong>( 2005 )</strong></p>
            <h2>The Case of The Poisonous Socks: Tales from Chemistry</h2>
            <p>Rating : 8 / 10</p>
            <p class="mb-5">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo officia iste iusto. Quam vel fugit optio architecto, magni consequatur earum voluptatum. A soluta placeat aperiam blanditiis incidunt magnam, quibusdam
              voluptatem.
            </p>
            <a class="btn-outline-lg mr-3" href="/journal">Back</a>
            <a class="btn-solid-lg" href="#details-lightbox">Download Free</a>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
@endsection