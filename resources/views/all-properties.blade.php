<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from eorrangeshop.com/html/divinevillas/dashboard-all-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Feb 2019 04:12:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Divine Villas - Real Estate HTML Template</title>

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
    <link rel="icon" href="{{asset('images/favicon.png')}}">

  </head>
  <body>
    
    @include('layouts.nav')
    
    <!-- Dashboard -->
    <div class="cp-container section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 margin-balance">
            <div class="dashboard-body-block">
              <div class="all-listing">
                <div class="row">

                  @foreach ($properties as $property)
                  <div class="col-lg-4 col-md-12 col-sm-6">
                    <div class="listing">
                      <div class="listing-thumb">
                        <div class="listing-slider">

                          @foreach ($property->images as $image)    
                          <div class="slide" style="height: 300px; overflow:hidden">
                            <img src="{{asset($image->photo)}}" class="img-responsive" style="width: 100%; height: 100%; object-fit:cover" alt="">
                          </div>
                          @endforeach

                        </div>
                        <div class="overlay"></div>
                        <div class="rate">
                        <span>{{$property->price}} {{$property->value}}</span>
                        </div>
                      </div>
                      <div class="content-block">
                        <div class="listing-body">
                        <h5><a href="/agent/properties/{{$property->id}}">{{$property->title}}</a> <span class="badge sale">{{$property->status->name}}</span></h5>
                          <div class="meta">
                            <span class="listing-type">{{$property->type->name}}</span>
                          <span class="listing-status open">{{$property->user->name}}</span>
                          </div>
                        <span class="address"><i class="fas fa-map-marker-alt"></i>{{$property->location}}</span>
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
                      </div>
                    </div>
                  </div>

                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Dashboard End -->

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
            <div class="col-md-3 col-sm-6">
              <aside class="widget footer-get-in-touch-widget">
                <h6 class="widget-title">Get in Touch</h6>
                <p><span class="title">Address</span><span class="contact-info">180 Madison Squre <br> New York, NY123545</span></p>
                <p><span class="title">Phone</span><span class="contact-info">+1-254-2564-235</span></p>
                <p><span class="title">Email</span><span class="contact-info">mail@example.com</span></p>
              </aside>
            </div>
            <div class="col-md-3 col-sm-6">
              <aside class="widget footer-listing-widget">
                <h6 class="widget-title">Latest Listings</h6>
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
                <h6 class="widget-title">Useful Links</h6>
                <ul class="links">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Recent Listings</a></li>
                  <li><a href="#">Featured Listings</a></li>
                  <li><a href="#">Our Service</a></li>
                </ul>
              </aside>
            </div>
            <div class="col-md-2 col-sm-4">
              <aside class="widget widget-useful-link">
                <h6 class="widget-title">Buy Information</h6>
                <ul class="links">
                  <li><a href="#">How to Purchase</a></li>
                  <li><a href="#">Tips &amp; Tricks</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Legal / Law</a></li>
                </ul>
              </aside>
            </div>
            <div class="col-md-2 col-sm-4">
              <aside class="widget widget-useful-link">
                <h6 class="widget-title">Sell Information</h6>
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
                    <img src="{{asset('images/footer-logo.svg')}}" class="img-responsive" alt="Footer Logo">
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
              <p class="copyright-text">Copyright 2018, <a href="#">Real Estate</a>. All Rights Reserved</p>
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


</html>