@extends('frontend.layout.home')

@section('header')
<header id="header" class="header">
    <div class="container">
      <div class="row">
          <div class="col-lg-6 col-xl-5">
                  <div class="text-container">
                      <h1 class="h1-large">Journal Edu For Future</h1>
                      <p class="p-large">Upload your journal for your portfolio and help everbody</p>
                      <a class="btn-solid-lg page-scroll" style="cursor: pointer" href="/register">REGISTER</a>
                      <a class="btn-outline-lg page-scroll" style="cursor: pointer" href="/login">LOGIN</a>
                  </div>
                  </div>
                  
                <div class="col-lg-6 col-xl-7 ">
                <div class="image-container">
                    <img class="img-fluid" src="{{asset('landing/images/landing-img.svg')}}" alt="alternative" />
                </div>
                <!-- end of image-container -->
                </div>
            <!-- end of image-container -->
            </div>
    </div>
                      
                     
  </header>
  <!-- end of header -->
@endsection

@section('content')
<!-- Content -->
<div id="journal" class="basic-3 bg-dark-blue">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="h2-heading">Get Journal For Free</h2>
          <p class="p-heading p-large">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit voluptate distinctio accusantium aperiam minima aliquam deserunt itaque, quae tempore in, omnis maxime! Fugit ullam inventore cupiditate ipsam voluptatibus cum commodi.
          </p>
          <a class="btn-solid-lg" href="/journal">Show More Journal</a> 
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of Content -->
  @endsection


