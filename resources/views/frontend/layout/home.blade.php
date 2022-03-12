<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="Description" />
    <meta name="author" content="Author" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" />
    <!-- to have large image post format in Twitter -->
    @include('sweetalert::alert')
    <!-- Webpage Title -->
    <title>Journal Edu</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
    <link href="{{asset('landing/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('landing/css/fontawesome-all.css')}}" rel="stylesheet" />
    <link href="{{asset('landing/css/swiper.css')}}" rel="stylesheet" />
    <link href="{{asset('landing/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('landing/css/styles.css')}}" rel="stylesheet" />

    {{-- navbar --}}
    @include('frontend.partial.nav')
    {{-- end navbar --}}

   {{-- Header --}}
   @include('frontend.partial.header')
   {{-- End Header --}}
    
   {{-- Modal Register --}}
 
   {{-- End Modal Register --}}

   {{-- Modal Login --}}
   @include('frontend.partial.modal.login')
   {{-- End Modal Login --}}

    {{-- Content --}}
    @include('frontend.partial.content')
    {{-- End Content --}}

    {{-- Footer --}}
    @include('frontend.partial.footer')
    {{-- End Footer --}}
    
    <!-- Scripts -->
    <script src="{{asset('landing/js/jquery.min.js')}}"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
    <!-- Bootstrap framework -->
    <script src="{{asset('landing/js/jquery.easing.min.js')}}"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('landing/js/swiper.min.js')}}"></script>
    <!-- Swiper for image and text sliders -->
    <script src="{{asset('landing/js/jquery.magnific-popup.js')}}"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('landing/js/scripts.js')}}"></script>
    <!-- Custom scripts -->
  </body>
</html>
