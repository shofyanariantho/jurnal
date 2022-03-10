@extends('frontend.layout.home')

@section('header')
    <!-- Header -->
    <header class="ex-header bg-dark-blue">
        <div class="container">
          <div class="row">
            <div class="col-xl-10 offset-xl-1">
              <h1>Daftar Journal</h1>
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
<div class="basic-4 bg-dark-blue">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="resource-container">
            <img class="img-fluid" src="{{asset('landing/images/resources-1.jpg')}}" alt="alternative" />
            <div class="text-container">
              <h4>Judul Journal</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, saepe vero accusantium error totam beatae eum minima, sapiente asperiores consequatur voluptatibus veritatis dignissimos, nostrum vel assumenda?
                Cupiditate omnis necessitatibus repudiandae.
              </p>
              <a class="btn-solid-dtl" href="/detail">Detail Journal</a>
            </div>
            <!-- end of text-container -->
          </div>
          <div class="resource-container">
            <img class="img-fluid" src="{{asset('landing/images/resources-1.jpg')}}" alt="alternative" />
            <div class="text-container">
              <h4>Judul Journal</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, saepe vero accusantium error totam beatae eum minima, sapiente asperiores consequatur voluptatibus veritatis dignissimos, nostrum vel assumenda?
                Cupiditate omnis necessitatibus repudiandae.
              </p>
              <a class="btn-solid-dtl" href="/detail">Detail Journal</a>
            </div>
            <!-- end of text-container -->
          </div>

          <!-- end of resource-container -->
        </div>
        <div class="col-lg-12">
          <div class="resource-container">
            <img class="img-fluid" src="{{asset('landing/images/resources-1.jpg')}}" alt="alternative" />
            <div class="text-container">
              <h4>Judul Journal</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, saepe vero accusantium error totam beatae eum minima, sapiente asperiores consequatur voluptatibus veritatis dignissimos, nostrum vel assumenda?
                Cupiditate omnis necessitatibus repudiandae.
              </p>
              <a class="btn-solid-dtl" href="/detail">Detail Journal</a>
            </div>
            <!-- end of text-container -->
          </div>
          <div class="resource-container">
            <img class="img-fluid" src="{{asset('landing/images/resources-1.jpg')}}" alt="alternative" />
            <div class="text-container">
              <h4>Judul Journal</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, saepe vero accusantium error totam beatae eum minima, sapiente asperiores consequatur voluptatibus veritatis dignissimos, nostrum vel assumenda?
                Cupiditate omnis necessitatibus repudiandae.
              </p>
              <a class="btn-solid-dtl" href="/detail">Detail Journal</a>
            </div>
            <!-- end of text-container -->
          </div>

          <!-- end of resource-container -->
        </div>

        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of basic-4 -->
  <!-- end of resources -->
  @endsection