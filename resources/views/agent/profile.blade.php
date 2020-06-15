<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from eorrangeshop.com/html/divinevillas/dashboard-my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Feb 2019 04:12:53 GMT -->
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
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/et-line.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/jquery.nstSlider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plyr.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/js-flickr-gallery.css')}}" />

    <!-- leaflet -->
    <link rel="stylesheet" href="{{asset('assets/leaflet/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/leaflet/css/MarkerCluster.css')}}">
    <link rel="stylesheet" href="{{asset('assets/leaflet/css/MarkerCluster.Default.css')}}">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

    <!-- Favicon -->
    <link rel="icon" href="{{('images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{('images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{('images/icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{('images/icon-114x114.png')}}">

    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->

  </head>
  <body>
    
    @include('layouts.nav')
    
    <!-- Dashboard -->
    <div class="cp-container section-padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            @include('layouts.sidebar')

          </div>
          <div class="col-md-8">
            <div class="dashboard-body-block">
              <div class="dashboard-section-container profile-details-container">
                <h5 class="title">Profile Details</h5>
                <div class="section-body">
                  <form class="user-profile-form" action="/agent" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="">Foto</label>
                      <input type="file" name="photo" data-max-file-size="2M" class="dropify" data-default-file="{{auth()->user()->photo ? asset(auth()->user()->photo) : asset('images/dashboard/user/demo-user.png')}}" />
                    </div>
                    <div class="form-group">
                      <label for="">Nama</label>
                    <input type="text" class="form-control" value="{{auth()->user()->name}}" name="name">
                    </div>
                    <div class="form-group">
                      <label for="">NIK</label>
                    <input type="text" class="form-control" value="{{auth()->user()->id_number}}" name="id_number">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" value="{{auth()->user()->email}}" name="email">
                    </div>
                    <div class="form-group">
                      <label for="">Nomor HP</label>
                      <input type="text" class="form-control" value="{{auth()->user()->phone_number}}" name="phone_number">
                    </div>
                    <div class="form-group">
                      <label for="">Alamat</label>
                      <input type="text" class="form-control" value="{{auth()->user()->address}}" name="address">
                    </div>

                    <div class="form-group">
                        <label for="">Nomor Whatsapp</label>
                      <input id="listing" type="text" class="form-control" name="whatsapp_number">
                    </div>
                    <div class="form-group">
                        <label for="">Instagram</label>
                      <input id="" type="text" class="form-control" name="instagram_link">
                    </div>
                    <div class="form-group">
                        <label for="">Facebook</label>
                      <input id="" type="text" class="form-control" name="facebook_link">
                    </div>
                    <div class="form-group">
                        <label for="">Youtube</label>
                      <input id="" type="text" class="form-control" name="youtube_link">
                    </div>
                    <div class="form-group">
                        <label for="">Twitter</label>
                      <input id="" type="text" class="form-control" name="twitter_link">
                    </div>
                    <button type="submit" class="button primary-bg">Simpan</button>
                  </form>
                </div>
              </div>
              <div class="dashboard-section-container change-password-section">
                <h4 class="title">Change Password</h4>
                <div class="section-body">
                  <form action="#">
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Current Password">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="New Password">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                    <button class="button primary-bg">Update Password</button>
                  </form>
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
                        <img src="{{('images/listing/footer-listing-1.jpg')}}" class="img-responsive" alt="">
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
                        <img src="{{('images/listing/footer-listing-1.jpg')}}" class="img-responsive" alt="">
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
                    <img src="{{('images/footer-logo.svg')}}" class="img-responsive" alt="Footer Logo">
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
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

    <script>
      $('.dropify').dropify();
    </script>

<!-- Mirrored from eorrangeshop.com/html/divinevillas/dashboard-my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Feb 2019 04:12:57 GMT -->
</html>