<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">   

   
    <script type="text/javascript" src="{{ asset('fa/js/all.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <img class="navbar-brand" src="{{ url('img/logo.png') }}">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link d-inline-block mx-2 home" href="{{url('/')}}">Home</a>
            <a class="nav-item nav-link d-inline-block mx-2 hotels" href="{{url('/hotels')}}">Hotels</a>
            <a class="nav-item nav-link d-inline-block mx-2 destinations" href="{{url('/destinations')}}">Destination</a>
            <a class="nav-item nav-link d-inline-block ml-2 disabled" href="{{url('/events')}}">Events</a>
            <a class="nav-item nav-link d-inline-block ml-2 " href="{{url('/siswa')}}">siswa</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- slider -->
    @yield('slider')
    <!-- endslider -->
    @yield('search')
    <!-- container -->
    @yield('container')
    <!-- endcontainer -->

    <!-- start footer -->

    <button class="btn btn-primary rounded-circle" type="button" id="btnTop"><i class="fas fa-arrow-up"></i></button>

    <footer class="p-5 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 mb-4">
            <img src="{{url('img/logo.png')}}" class="img-footer">
            <span class="poppins font-weight-bold t-20px text-light">Wisata bali</span>
            <div class="col-12 mt-5 mb-4">
              <h5 class="poppins text-light">Indonesia</h5>
              <p class="montserrats text-light">
                Luas Pulau Bali : 5.780 km² <br>
                Ibu kota: Kota Denpasar <br>
                Zona waktu: UTC+08:00 (WITA) <br>
                Jumlah penduduk: 4,22 juta (2012)
              </p>
            </div>
            <div class="col-12 d-inline ">
              <a href="#" class="box-smd"><i class="fab fa-facebook mr-1 smd t-18px"></i></a>
              <a href="#" class="box-smd"><i class="fab fa-twitter mx-1 smd t-18px"></i></a>
              <a href="#" class="box-smd"><i class="fab fa-instagram mx-1 smd t-18px"></i></a>
              <a href="#" class="box-smd"><i class="fab fa-pinterest mx-1 smd t-18px"></i></a>
            </div>
          </div>
          <div class=" col-md-5  offset-md-1 mb-4 ">
            <div class="row">
              <div class="col-md-4 col-4">
                <h5 class="poppins text-light ">
                  Culture Event
                </h5>
                <ul class="p-0 mt-4" style="list-style: none;">
                  <li class="montserrats t-16px text-light">Tari Barong</li>
                  <li class="montserrats t-16px text-light">Ngaben</li>
                  <li class="montserrats t-16px text-light">Tari Barong</li>
                </ul>
              </div>
              <div class="col-md-4 col-4">
                <h5 class="poppins text-light">
                  Hotel
                </h5>
                <ul class="p-0 mt-4" style="list-style: none;">
                  <li class="montserrats t-16px text-light">katamama</li>
                  <li class="montserrats t-16px text-light">Bulgari</li>
                  <li class="montserrats t-16px text-light">Wapa</li>
                </ul>
              </div>
              <div class="col-md-4 col-4">
                <h5 class="poppins text-light">
                  Destination
                </h5>
                <ul class="p-0 mt-4" style="list-style: none;">
                  <li class="montserrats t-16px text-light">Pantai Pandawa</li>
                  <li class="montserrats t-16px text-light">Tanah Lot</li>
                  <li class="montserrats t-16px text-light">Bedugul</li>
                </ul>
              </div>
            </div> 
          </div>
          <div class="col-md-3">
            <h5 class="poppins text-light text-center">Instagram</h5>
           <div class="row mt-4">
             <div class="col-md-12 text-center">
               <img src="{{ url('img/lot.jpg') }}" class="img-footer-instagram">
               <img src="{{ url('img/bedugul.jpg') }}" class="img-footer-instagram">
               <img src="{{ url('img/pandawa.png') }}" class="img-footer-instagram">
               <img src="{{ url('img/wapa-di-ume-sidemen-bali-indonesia-p.webp') }}" class="img-footer-instagram">
               <img src="{{ url('img/the-bulgari-indonesia.webp') }}" class="img-footer-instagram">
               <img src="{{ url('img/ngaben.jpg') }}" class="img-footer-instagram">
             </div>
           </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
