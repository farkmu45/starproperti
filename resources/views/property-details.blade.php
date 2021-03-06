<!DOCTYPE html>
<html lang="en" id="home">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prima Properti</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
     
    <!-- External Css -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/icon.png')}}')}}">
  </head>
  <body>

    @include('layouts.nav')

    <!-- Subheader -->
    <div class="cpdv-subheader-bg" style="background: url({{asset($property->images[0]->photo)}}); background-repeat: no-repeat; background-size:cover; background-position:center; !important">
      <div class="subheader">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="property-details-subheader-content">
                <ul class="breadcrumb">
                  <li><a href="/">Beranda</a></li>
                  <li class="active">{{$property->title}}</li>
                </ul>
                <div class="property-details">
                  <div class="row">
                    <div class="col-md-4 col-sm-6">
                      <div class="info">
                        <h3>{{$property->title}} <span class="badge">{{$property->status->name}}</span></h3>
                        <p class="room-type">{{$property->type->name}}</p>
                      <p class="address"><i class="fas fa-map-marker-alt"></i>{{$property->location}}</p>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="details">
                        <div class="details-listing">
                          <p>Kamar Tidur</p>
                          <h5>{{$property->bedroom}}</h5>
                        </div>
                        <div class="details-listing">
                          <p>Kamar Mandi</p>
                          <h5>{{$property->bathroom}}</h5>
                        </div>
                        <div class="details-listing">
                          <p>Luas</p>
                        <h5>{{$property->building_area}}m<sup>2</sup> </h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <div class="others">
                        <ul>
                        <li><span>RP. {{(int)$property->price.' '.$property->value}}</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subheader End -->

    <!-- Property Details -->
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="property-block-container">
              <div class="property-block property-thumb">
                <div class="property-slider" id="property-slider">

                  @foreach ($property->images as $image)    
                  <div class="slider-thumb" style="height: 500px">
                    <img src="{{asset($image->photo)}}" style="width: 100%; height:100%; object-fit:cover" class="img-responsive" alt="">
                  </div>
                  @endforeach

                </div>
              </div>
              <div class="property-block property-content">
                <h4>Deskripsi</h4>
                {!!$property->description!!}
              </div>
              <div class="property-block property-details">
                <h4>Detail Properti</h4>
                <ul class="detail-list">
                  <li>Luas Tanah      : {{$property->surface_area}}m<sup>2</sup></li>
                  <li>Luas Bangunan   : {{$property->building_area}}m<sup>2</sup></li>
                  <li>Arah Hadap      : {{$property->direction}}</li>
                  <li>Garasi          : {{$property->garage}}</li>
                  <li>Listrik         : {{$property->electricity}} Watt</li>
                  <li>Air             : {{$property->water}}</li>
                  <li>Legalitas       : {{$property->legality}}</li>
                  <li>Kode            : {{$property->code}}</li>
                </ul>
              </div>
              <div class="property-block property-locaton">
                <h4>Map Location</h4>
                <!-- Maps -->
                <div id="map-area" class="section">
                  <div class="property-map" id="property-map" data-lat="40.713355" data-lng="-74.005535" data-zoom="14"></div>
                </div>
                <!-- Maps End -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="sidebar">
              <aside class="widget widget-author-contact">
                <div class="author-thumb">
                <a href="/agents/{{$property->user->id}}">
                    <img src="{{!empty($property->user->photo) ? asset($property->user->photo) : asset('images/dashboard/user/demo-user.png')}}" class="img-responsive" alt="">
                  </a>
                </div>
                <div class="info">
                <h5><a href="#">{{$property->user->name}}</a></h5>
                  <p>{{$property->user->role->definition}}</p>
                <h6><i class="fas fa-phone"></i>{{$property->user->phone_number}}</h6>
                </div>
                <div class="author-contact">
                  <form action="#">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                      <textarea name="author-contact" class="form-control" placeholder="Message" id="message"></textarea>
                    </div>
                    <button class="button primary-bg btn-block">Contact With Me</button>
                  </form>
                </div>
              </aside>
              <aside class="widget widget-video">
                <h6>Video Description</h6>
                <div class="widget-video-area">
                  <div data-type="vimeo" data-video-id="54275813"></div>
                </div>
              </aside>
              <aside class="widget widget-accordion">
                <h6>General FAQs</h6>
                <div class="accordion-default">
                  <div class="panel-group" id="accordion-box-success" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading block-style" role="tab" id="heading1">
                        <p class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion-box-success" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                          How to Purchase this Property?
                        </a>
                        </p>
                      </div>
                      <div id="collapse11" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                        <div class="panel-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> 
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading style-none" role="tab" id="heading2">
                        <p class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-box-success" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                          How to Purchase this Property?
                        </a>
                        </p>
                      </div>
                      <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                        <div class="panel-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> 
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading style-none" role="tab" id="heading3">
                        <p class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-box-success" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                          How to Purchase this Property?
                        </a>
                        </p>
                      </div>
                      <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                        <div class="panel-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Property Details End -->

    <!-- Similar Listing -->
    <div class="cpdv-container section-padding grey-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-heading text-center">
              <h3>Similar Properties</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
            </div>
          </div> 
        </div>
        <div class="row margin-balance">
          @foreach ($randomProperty as $property)
          <div class="col-md-4 col-sm-6">
            <div class="listing">
              <div class="listing-thumb">
                <div class="listing-slider">
                  @foreach ($property->images as $image)
                  <div class="slide" style="height: 240px">
                    <img src="{{asset($image->photo)}}" class="img-responsive" style="width: 100%; height:100%; object-fit:cover" alt="">
                  </div>
                  @endforeach
                </div>
                <div class="overlay"></div>
                <div class="rate">
                <span>{{(int)$property->price}} {{$property->value}}</span>
                </div>
              </div>
              <div class="content-block">
                <div class="listing-body">
                <h5><a href="/properties/{{$property->id}}">{{$property->title}}</a></h5>
                  <div class="meta">
                    <span class="listing-type">{{$property->type->name}}</span>
                  <span class="listing-status open">{{$property->status->name}}</span>
                  </div>
                <span class="address"><i class="fas fa-map-marker-alt"></i> {{$property->location}}</span>
                  <div class="info">
                    <div class="listing-info bedroom">
                      <span class="title">Kamar Tidur</span>
                      <span class="number">{{$property->bedroom}}</span>
                    </div>
                    <div class="listing-info bath">
                      <span class="title">Kamar Mandi</span>
                      <span class="number">{{$property->bathroom}}</span>
                    </div>
                    <div class="listing-info size">
                      <span class="title">Luas (m<sup>2</sup>)</span>
                      <span class="number">{{$property->building_area}}</span>
                    </div>
                  </div>
                </div>
                <div class="author">
                  <div class="author-thumb">
                    <a href="#" style="height: 100%"><img src="{{$property->user->photo ? asset($property->user->photo) : asset('images/dashboard/user/demo-user.png')}}" class="img-responsive" style="width: 100%; height:100%; object-fit:cover"alt=""></a>
                  </div>
                  <div class="author-info">
                  <h6><a href="/agents/{{$property->user->id}}">{{$property->user->name}}</a></h6>
                    <span class="listing-date"><i class="far fa-clock"></i>12 December 2018</span>
                    <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- Similar Listing End -->

    <!-- Call to Action -->
    <div class="cpdv-container primary-bg section-padding-50">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-6">
            <div class="left-content">
              <div class="call-to-action-content">
                <h3>Subscribe Today!</h3>
                <p>Don’t miss our future updates. Get Subscribe today to getting Updates!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="right-content-sm">
              <div class="call-to-action-form">
                <form class="subscription-form" action="#" method="post">
                  <input type="text" placeholder="Enter your mail here">
                  <button class="button white-bg">Subscribe</button>
				  <p class="newsletter-success"></p>
				  <p class="newsletter-error"></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Call to Action End -->

    <!-- Footer -->
    <footer>
      <div class="footer-widget-area section-padding">
        <div class="container">
          <div class="row margin-balance">
            <div class="col-md-4 col-md-offset-1 col-sm-6">
              <aside class="widget footer-get-in-touch-widget">
                <h6 class="widget-title">Prima Properti</h6>
                <p><span class="title">Alamat</span><span class="contact-info">Jln. Letnan Sudiono Bondowoso</p>
                <p><span class="title">Telepon</span><span class="contact-info">0823-3512-7064</span></p>
                <p><span class="title">Email</span><span class="contact-info">support@primaproperti.com</span></p>
              </aside>
            </div>
            <div class="col-md-4 col-sm-6">
              <aside class="widget footer-listing-widget">
                <h6 class="widget-title">Properti Terbaru</h6>
                <div class="footer-listings">
                  <div class="footer-listing">
                    <div class="listing-thumb">
                      <a href="#">
                        <img src="{{asset('images/listing/footer-listing-1.jpg')}}" class="img-responsive" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <p class="title"><a href="#">Hotel in Madison Square</a></p>
                      <p class="cost">$1255.00 / Months</p>
                    </div>
                  </div>
                  <div class="footer-listing">
                    <div class="listing-thumb">
                      <a href="#">
                        <img src="{{asset('images/listing/footer-listing-1.jpg')}}" class="img-responsive" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <p class="title"><a href="#">Hotel in Madison Square</a></p>
                      <p class="cost">$1255.00 / Months</p>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
            <div class="col-md-2 col-sm-4">
              <aside class="widget widget-useful-link">
                <h6 class="widget-title">Informasi</h6>
                <ul class="links">
                  <li><a href="#">How to Purchase</a></li>
                  <li><a href="#">Tips &amp; Tricks</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Legal / Law</a></li>
                </ul>
              </aside>
            </div>
          </div>
        </div>
      </div>
      <div class="grey-bg section-padding-50">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="footer-social-link">
                <div class="footer-logo">
                  <a href="#">
                    <img src="{{asset('assets/img/properti.png')}}" class="img-responsive" alt="Footer Logo" style="width: 100px; height: auto;">
                  </a>
                </div>
                <div class="social-link">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright primary-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-push-6">
              <div class="footer-nav" id="footer-nav">
                <ul>
                  <li class="submenu">
                    <a href="#">Legal</a>
                    <ul class="submenu-item">
                      <li><a href="#">Dropdown 1</a></li>
                      <li><a href="#">Dropdown 2</a></li>
                      <li><a href="#">Dropdown 3</a></li>
                      <li class="submenu">
                        <a href="#">Dropdown 4</a>
                        <ul class="submenu-item">
                          <li><a href="#">Dropdown 1</a></li>
                          <li><a href="#">Dropdown 2</a></li>
                          <li><a href="#">Dropdown 3</a></li>
                          <li class="submenu">
                            <a href="#">Dropdown 4</a>
                            <ul class="submenu-item">
                              <li><a href="#">Dropdown 1</a></li>
                              <li><a href="#">Dropdown 2</a></li>
                              <li><a href="#">Dropdown 3</a></li>
                              <li class="submenu">
                                <a href="#">Dropdown 4</a>
                                <ul class="submenu-item">
                                  <li><a href="#">Dropdown 1</a></li>
                                  <li><a href="#">Dropdown 2</a></li>
                                  <li><a href="#">Dropdown 3</a></li>
                                  <li class="submenu">
                                    <a href="#">Dropdown 4</a>
                                    <ul class="submenu-item">
                                      <li><a href="#">Dropdown 1</a></li>
                                      <li><a href="#">Dropdown 2</a></li>
                                      <li><a href="#">Dropdown 3</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Terms &amp; Conditions </a></li>
                  <li><a href="#">Legal</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-md-pull-6">
              <p class="copyright-text">Copyright 2019, <a href="#">Prima Properti. </a> All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="{{asset('js/searchMap.js')}}"></script>

        <script>
      if ($('.cp-slider').length > 0) {
        $('.cp-slider').each(function () {
            $(this).owlCarousel({
                singleItem: true,
                slideSpeed: 200,
                autoPlay: 3000,
                stopOnHover: true,
                mouseDrag : false,
                touchDrag : false,
                navigation: true,
                navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                pagination: false
            });
        });
    };

    if ($('.listing-slider').length > 0) {
        $('.listing-slider').each(function () {
            $(this).owlCarousel({
                singleItem: true,
                slideSpeed: 200,
                autoPlay: 3000,
                stopOnHover: true,
                navigation: true,
                navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                pagination: false
            });
        });
    };

    if ($('.post-slider').length > 0) {
        $('.post-slider').each(function () {
            $(this).owlCarousel({
                singleItem: true,
                slideSpeed: 200,
                autoPlay: 3000,
                stopOnHover: true,
                navigation: true,
                navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                pagination: false
            });
        });
    };

    if ($('#property-slider').length > 0) {
        $('#property-slider').owlCarousel({
            singleItem: true,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    };


    $('.testimonial').each(function () {
        $(this).owlCarousel({
            singleItem: true,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    });


    </script>

<!-- Mirrored from eorrangeshop.com/html/divinevillas/property-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Feb 2019 04:12:46 GMT -->
</html>
