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

    <!-- Banner -->
    <div class="banner">
      <div class="cp-slider" id="cp-slider">

        @foreach ($properties as $property)
        <div class="cp-slider-item slider-item" style="background: url({{asset($property->images[0]->photo)}}) no-repeat; background-size: cover; background-position:center">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="slider-wrapper">
                  <div class="slider-content">
                    <div class="panel panel-default">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="rate">
                          <span>RP. {{(int)$property->price}} {{$property->value}}</span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-10">
                          <div class="panel-body">
                            <h5>{{$property->title}}</h5>
                            <h6>{{$property->location}}</h6>
                          <a href="/properties/{{$property->id}}">Selengkapnya</a>
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
        @endforeach


      </div>
    </div>
    <!-- Banner End -->
    
    <!-- Search Field -->
    <div class="search-field">
      <form action="/search" method="GET" class="form-inline margin-balance">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Type" list="city">
          <datalist id="city">
            <option value="New Work">
            <option value="Las Vegas">
            <option value="Calefornia">
            <option value="Miami">
            <option value="Nevada">
          </datalist>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Kota" list="city">
          <datalist id="city">
            <option value="New Work">
            <option value="Las Vegas">
            <option value="Calefornia">
            <option value="Miami">
            <option value="Nevada">
          </datalist>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Status">
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">Min</div>
            <input type="text" class="form-control" id="exampleInputAmount1" placeholder="RP.">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">Max</div>
            <input type="text" class="form-control" id="exampleInputAmount" placeholder="RP.">
          </div>
        </div>
        <button class="button btn btn-default">Cari!</button>
      </form>
    </div>
    <!-- Search Field End -->

    <!-- about -->
    <section class="about" id="about">
      <div class="cpdv-container section-padding-with-heading grey-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="section-heading text-center">
                <h3>Tentang Kami</h3>
              </div>
            </div>
          </div>
          <div class="row margin-balance">
            <div class="col-md-6 col-sm-6 text-center">
              <img src="{{asset('assets/img/properti.png')}}" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-6">
              <h5>Apa itu Prima Properti?</h5>
              <p>Prima Properti merupakan broker properti yang menyediakan jasa layanan pemasaran properti dengan menggunakan akad-akad syar'i sesuai syariat Islam.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about end -->

    <!-- visi misi -->
    <section class="visi" id="visi">
      <div class="cpdv-container section-padding-with-heading">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="section-heading text-center">
                <h3>Visi & Misi</h3>
              </div>
            </div>
          </div>
          <div class="row margin-balance">
            <div class="col-md-6 col-sm-6">
              <h4>Visi</h4>
              <p>Menjadi perusahaan broker properti terbaik dan terdepan yang konsisten menggunakan akad-akad bisnis sesuai syariat Islam dalam setiap aktivitas pemasaran properti.</p>
            </div>
            <div class="col-md-6 col-sm-6">
              <h4>Misi</h4>
              <ul>
                <li>Memberikan solusi pemasaran properti sesuai syariah kepada masyarakat.</li>
                <li>Menjunjung tinggi ketaatan terhadap syariah dalam setiap transaksi bisnis yang dilakukan.</li>
                <li>Mengutamakan profesionalitas, amanah, dan berkomitmen tinggi dalam berbisnis.</li>
                <li>Menyediakan produk-produk properti berkualitas untuk dipasarkan.</li>
                <li>Menerapkan ide-ide inovatif sesuai dengan perkembangan teknologi untuk memasarkan produk properti.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- visi misi end -->

    <!-- Featured Box -->
    <div class="cpdv-container section-padding-with-heading grey-bg" id="value">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-heading text-center">
              <h3>Value Prima Properti</h3>
            </div>
          </div>
        </div>
        <div class="row margin-balance">
          <div class="col-md-4 col-sm-6">
            <div class="featured-box text-center">
              <div class="icon">
                <span class="icon-map"></span>
              </div>
              <h5>First Class Service</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="featured-box text-center">
              <div class="icon">
                <span class="icon-tools"></span>
              </div>
              <h5>Easy to find out</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="featured-box text-center">
              <div class="icon">
                <span class="icon-wallet"></span>
              </div>
              <h5>Flexible Price</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Featured Box End -->

    <!-- Agents -->
    <div class="section-padding-with-heading" id="agent">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-heading text-center">
              <h3>Agent Prima Properti</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
            </div>
          </div>
        </div>
        <div class="row margin-balance">

          @foreach ($agents as $agent)
               <div class="col-md-3 col-sm-6">
            <div class="agent">
              <div class="agent-thumb" style="height: 262.5px; width: 100%">
                <img src="{{!empty($agent->photo) ? asset($agent->photo) : asset('images/dashboard/user/demo-user.png')}}" class="img-responsive" style="width: 100%; height:100%; object-fit:cover" alt="">
                <div class="overlay"></div>
                <div class="social-icon">
                  <ul>
                  <li><a href="{{$agent->facebook_link}}"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{$agent->twitter_link}}"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="{{$agent->instagram_link}}"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="{{$agent->youtube_link}}"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="info">
              <h5><a href="/agents/{{$agent->id}}">{{$agent->name}}</a></h5>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
    <!-- Agents End -->

    <!-- Recent Listing -->
    <div class="cpdv-container section-padding-with-heading grey-bg" id="properti">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-heading text-center">
              <h3>Daftar Properti</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
            </div>
          </div>
        </div>
        <div class="row margin-balance">

          @foreach ($properties as $property)
          <div class="col-md-4 col-sm-6">
            <div class="listing">
              <div class="listing-thumb">
                <div class="listing-slider">
                  @foreach ($property->images as $image)
                  <div class="slide" style="height: 350px">
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
    <!-- Recent Listing End -->

    <!-- Blog -->
    <div class="cpdv-container section-padding-with-heading" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-heading text-center">
              <h3>Blog</h3>
            </div>
          </div> 
        </div>
        <div class="row margin-balance">
          <div class="col-md-4 col-sm-6">
            <article class="post-grid">
              <div class="post-thumb">
                <a href="#">
                  <img src="{{asset('images/blog/post-thumb-1.jpg')}}" class="img-responsive" alt="">
                </a>
              </div>
              <div class="body">
                <h5><a href="#">The Luxurious Places in New York 2018</a></h5>
                <p class="meta"><span class="author"><a href="#">Oliver Liam</a></span> <span class="date"><a href="#">20 December 2018</a></span></p>
              </div>
            </article>
          </div>
          <div class="col-md-4 col-sm-6">
            <article class="post-grid">
              <div class="post-thumb">
                <a href="#">
                  <img src="{{asset('images/blog/post-thumb-2.jpg')}}" class="img-responsive" alt="">
                </a>
              </div>
              <div class="body">
                <h5><a href="#">The Luxurious Places in New York 2018</a></h5>
                <p class="meta"><span class="author"><a href="#">Oliver Liam</a></span> <span class="date"><a href="#">20 December 2018</a></span></p>
              </div>
            </article>
          </div>
          <div class="col-md-4 col-sm-6">
            <article class="post-grid">
              <div class="post-thumb">
                <a href="#">
                  <img src="{{asset('images/blog/post-thumb-3.jpg')}}" class="img-responsive" alt="">
                </a>
              </div>
              <div class="body">
                <h5><a href="#">The Luxurious Places in New York 2018</a></h5>
                <p class="meta"><span class="author"><a href="#">Oliver Liam</a></span> <span class="date"><a href="#">20 December 2018</a></span></p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>

    <!-- Get In Touch -->
    <div class="section-padding-with-heading grey-bg" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h3>Kontak Kami</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="contact-form">
                        <form id="contactForm" action="#" method="post">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="input-success">Successfully sent. Thanks for contacting us</p>
                                    <p class="input-error">Sending failed. Check everything and try again.</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="name" type="text" class="form-control" placeholder="Nama*" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control" placeholder="Email*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="phone" type="text" class="form-control" placeholder="Telepon">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="subject" type="text" class="form-control" placeholder="Subjek*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" placeholder="Pesan"></textarea>
                            </div>
                            <button class="button primary-bg">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch End -->

    <!-- Clients -->
    <div class="cpdv-container section-padding-50">
      <div class="container">
        <div class="row margin-balance">
          <div class="col-md-12">
            <ul class="clients">
              <li class="client-logo">
                <img src="{{asset('images/client/client-1.png')}}" class="img-responsive" alt="Client Logo">
              </li>
              <li class="client-logo">
                <img src="{{asset('images/client/client-2.png')}}" class="img-responsive" alt="Client Logo">
              </li>
              <li class="client-logo">
                <img src="{{asset('images/client/client-3.png')}}" class="img-responsive" alt="Client Logo">
              </li>
              <li class="client-logo">
                <img src="{{asset('images/client/client-4.png')}}" class="img-responsive" alt="Client Logo">
              </li>
              <li class="client-logo">
                <img src="{{asset('images/client/client-5.png')}}" class="img-responsive" alt="Client Logo">
              </li>
              <li class="client-logo">
                <img src="{{asset('images/client/client-6.png')}}" class="img-responsive" alt="Client Logo">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Clients End -->

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
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
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
  </body>
</html>
