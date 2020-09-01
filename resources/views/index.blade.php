@extends('layout.main')

@section('title','Index | Wisata Bali')

@section('slider')
<div id="carousel-Id" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-Id" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-Id" data-slide-to="1"></li>
    <li data-target="#carousel-Id" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active carousel-1 ">
      <div class="container">
      	<div class="carousel-content">
		 	<h1 class="text-light text-center luna slider-title">🛕 Bedugul</h1>
		</div>
      </div>
    </div>
    <div class="carousel-item carousel-2 ">
      <div class="container">
      	<div class="carousel-content">
		 	<h1 class="text-light text-center luna slider-title">🌴🌴 Tanah Lot</h1>
		</div>
      </div>
    </div>
    <div class="carousel-item carousel-3 ">
      <div class="container">
      	<div class="carousel-content">
		 	<h1 class="text-light text-center luna slider-title">🌊🌊 Pantai Pandawa</h1>
		</div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel-Id" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-Id" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@section('search')
<div class="container-fluid ">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="form-group bg-light shadow px-3 rounded-pill search-box">
        <div class="input-group ">
          <input type="text" name="key" id="key-search" placeholder="Cari sesuatu" class="form-control input-search-desktop border-0 p-3" placeholder="" aria-describedby="helpId">
          <div class="input-group-append border-0">
            <span class="input-group-text border-0 bg-white icon-search-desktop"><i class="fas fa-search mr-3 text-secondary"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('container')
    <div class="container ">
      <div class="row new-section icon-section">
        <div class="col-md-4 col-12">
            <div class=" text-center">
                <div class="icon">
                    <img src="{{url('img/beach.svg')}}" alt="">
                </div>
                <h3 class="poppins font-weight-bold mt-4">Tourist destination</h3>
                <p class="t-18px montserrats text-secondary">Many tourist spots are frequented by foreigners on holidays</p>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class=" text-center">
                <div class="icon">
                    <img src="{{url('img/hotel.svg')}}" alt="">
                </div>
               <h3 class="poppins font-weight-bold mt-4">Hotels</h3>
                <p class="t-18px montserrats text-secondary">There are hotels that provide a wide range of facilities and comparable rates</p>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class=" text-center">
                <div class="icon">
                    <img src="{{url('img/pagoda.svg')}}" alt="">
                </div>
                <h3 class="poppins font-weight-bold mt-4">Cultural events </h3>
                <p class="t-18px montserrats text-secondary">Various cultural events are held there on certain days and places</p>
            </div>
        </div>
      </div>
      <div class="row new-section">
        <div class="col-md-12">
          <div class="col-6 offset-3 text-center">
            <h1 class="poppins font-weight-bold">Popular Destination</h1>
            <p class="montserrats section-text text-secondary ">most popular places visited by other people from different countries with great tourist places</p>
          </div>
        </div>
        <div class="col-md-12 mt-5 ">
          <div class="row">
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/lot.jpg')}}" alt="" class="img-destination w-100">
                      <span class="price">Rp 20.000</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">Tanah Lot</h3>
                      </a>
                      <p class="montserrats">Tabanan, Bali</p>
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>07:00-19:00 WITA</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/pandawa.png')}}" alt="" class="img-destination w-100">
                      <span class="price">Rp 8.000</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">Pandawa Beach</h3>
                      </a>
                      <p class="montserrats">Badung, Bali</p>
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>08:00-17:00 WITA</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/pantai-uluwatu-bali.jpg')}}" alt="" class="img-destination w-100">
                      <span class="price">30.000</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">Ulu Watu Beach</h3>
                      </a>
                      <p class="montserrats">Badung, Bali</p>
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>08:00-17:00 WITA</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/Air-Terjun-Sekumpul-Sawan-Buleleng-Bali.jpg')}}" alt="" class="img-destination w-100">
                      <span class="price">Rp 15.000</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">Sekumpul Waterfall</h3>
                      </a>
                      <p class="montserrats">Buleleng, Bali</p>
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>08:00-17:00 WITA</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/bukit-campuhan.jpg')}}" alt="" class="img-destination w-100">
                      <span class="price">Free</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">Campuhan Hill</h3>
                      </a>
                      <p class="montserrats">Gianyar, Bali</p>
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>24 hours</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/bedugul.jpg')}}" alt="" class="img-destination w-100">
                      <span class="price">Rp 30.000</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">Bedugul</h3>
                      </a>
                      <p class="montserrats">Tabanan, Bali</p>
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>08:00-18:00 WITA</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
          </div>  
        </div>
      </div>
    </div>
    <div class="newslatter pt-5 container-fluid new-section">
      <div class="container ">
        <div class="row" >
          <div class="col-md-5 col-12 mt-4">
            <h3 class="poppins m3-5 font-weight-bold text-light">Subscribe Our Newsletter</h3>
            <p class="t-18px montserrats text-secondary">Subscribe newsletter to get offers and about new places to discover.</p>
          </div>
          <div class="col-md-6 offset-1 py-5 "> 
            <form>
              <div class="row">
                <div class="col-md-12  d-flex form-group">
                  <input type="email" name="" class="form-control form-control-lg" placeholder="Your Email">
                  <button type="submit" class="ml-3 px-5 btn btn-primary shadow-primary "><i class="fas fa-2x fa-paper-plane"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container new-section">
     <div class="row">
       <div class="col-md-7 mb-4" style="left: -150px;">
          <div id="carousel-img" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-img" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-img" data-slide-to="1"></li>
              <li data-target="#carousel-img" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner rounded" role="listbox">
              <div class="carousel-item active">
                <img src="{{url('img/Four-Seasons-Resort-Bali-p.webp')}}" class="img-hotels w-100">
              </div>
              <div class="carousel-item">
                <img src="{{url('img/katamama-hotel-bali-p.webp')}}" class="img-hotels w-100">
              </div>
              <div class="carousel-item">
                <img src="{{url('img/wapa-di-ume-sidemen-bali-indonesia-p.webp')}}" class="img-hotels w-100">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-img" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-img" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
       </div>
       <div class="col-md-5">
         <h1 class="poppins font-weight-bold">Hotels</h1>
         <div class="row mt-5">
            <div class="col-md-6 mb-5 col-6 "> 
              <div class="card card-hotel w-100">
                <div class="thumb-hotel">
                  <img class="card-img-top hotels-img" src="{{url('img/Four-Seasons-Resort-Bali-p.webp')}}" alt="Card image cap">
                  <span class="hotel-price montserrats">350K</span>
                </div>
                <div class="card-body  ">
                  <h6 class="font-weight-bold poppins t-16px name-hotel">Four seasons resort</h6>
                  <p class="montserrats ">Ubud,Bali</p>
                  <div class="d-inline">
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-dark"></i> 
                     <i class="fa fa-star text-dark"></i>
                  </div>
                </div>
              </div> 
            </div>
            <div class="col-md-6 mb-5 col-6 "> 
              <div class="card card-hotel w-100">
                <div class="thumb-hotel">
                  <img class="card-img-top hotels-img" src="{{url('img/katamama-hotel-bali-p.webp')}}" alt="Card image cap">
                  <span class="hotel-price montserrats">350K</span>
                </div>
                <div class="card-body  ">
                  <h6 class="font-weight-bold poppins t-16px name-hotel">Katanama Hotel Bali </h6>
                  <p class="montserrats ">Seminyak,Bali</p>
                  <div class="d-inline">
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-dark"></i> 
                     <i class="fa fa-star text-dark"></i>
                  </div>
                </div>
              </div> 
            </div>
            <div class="col-md-6 mb-5 col-6 "> 
              <div class="card card-hotel w-100">
                <div class="thumb-hotel">
                  <img class="card-img-top hotels-img" src="{{url('img/the-bulgari-indonesia.webp')}}" alt="Card image cap">
                  <span class="hotel-price montserrats">350K</span>
                </div>
                <div class="card-body  ">
                  <h6 class="font-weight-bold poppins t-16px name-hotel">The Bulgari </h6>
                  <p class="montserrats ">Ulu Watu,Bali</p>
                  <div class="d-inline">
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-dark"></i> 
                     <i class="fa fa-star text-dark"></i>
                  </div>
                </div>
              </div> 
            </div>
            <div class="col-md-6 mb-5 col-6 "> 
              <div class="card card-hotel w-100">
                <div class="thumb-hotel">
                  <img class="card-img-top hotels-img" src="{{url('img/wapa-di-ume-sidemen-bali-indonesia-p.webp')}}" alt="Card image cap">
                  <span class="hotel-price montserrats">350K</span>
                </div>
                <div class="card-body  ">
                  <h6 class="font-weight-bold poppins t-16px name-hotel">Wapa</h6>
                  <p class="montserrats ">Sidemen,Bali</p>
                  <div class="d-inline">
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-dark"></i> 
                     <i class="fa fa-star text-dark"></i>
                  </div>
                </div>
              </div> 
            </div>
          </div>  
       </div>
     </div>
    </div>
<script type="text/javascript">
  $('.home').addClass('nav-active');
  $(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    // console.log(wScroll);
    
    if (wScroll > 200) {
      $('.carousel-content').css({
        'transform' :'translateX(-1000px)'
      })
    }else{
      $('.carousel-content').css({
        'transform' :'translateX(0px)'
      })
    }
    // navbar
    if(wScroll > 10){
      $('nav').css({
        'padding' : '10px',
        'box-shadow': '5px 0px 10px'
      });
      $('nav').addClass('bg-dark d-block');
      $('nav').addClass('nav-show')
    }else{
      $('nav').css({
        'padding':'15px',
        'box-shadow' :'none'
      });
      $('nav').removeClass('bg-dark');
    }
    // card-destination
    if (wScroll > $('.icon-section').offset().top - 150) {
      $('.list-destination').each(function(i){
        setTimeout(function(){
          $('.list-destination').eq(i).addClass('show-destination');
        },300 * (1+i));
      });
    }else{
      $('.list-destination').removeClass('show-destination');
    }

  });

</script>
@endsection

