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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

  <!-- Custom Css -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="{{asset('images/favicon.png')}}">

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#mytextarea'
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
            <form action="/agent/properties/{{$property->id}}" method="POST" class="add-listing-form" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="listing-form-section business-information-container">
                  <h4 class="title">Ubah Properti</h4>
                  <div class="listing-section-body">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="form-group">
                          <label for="title">Judul</label>
                        <input id="title" name="title" type="text" value="{{$property->title}}" class="form-control" @error('title') style="border-color: red" @enderror >
                        @error('title')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>

                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="surface_area">Luas Tanah</label>
                          <input id="surface_area" name="surface_area" type="number" class="form-control" value="{{$property->surface_area}}" placeholder="Dalam satuan meter persegi" " @error('surface_area') style="border-color: red" @enderror>
                          @error('surface_area')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="building_area">Luas Bangunan</label>
                          <input id="building_area" name="building_area" type="number" class="form-control" value="{{$property->building_area}}" placeholder="Dalam satuan meter persegi" @error('building_area') style="border-color: red" @enderror >
                          @error('building_area')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="location">Lokasi</label>
                          <input id="location" name="location" type="text" class="form-control" value="{{$property->location}}" placeholder="" @error('location') style="border-color: red" @enderror >
                          @error('location')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="direction">Arah hadap</label>
                          <input id="direction" name="direction" type="text" class="form-control" value="{{$property->direction}}" placeholder="Barat,timur dll" @error('direction') style="border-color: red" @enderror >
                          @error('direction')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="bathroom">Kamar Mandi</label>
                          <input id="bathroom" name="bathroom" type="number" class="form-control" value="{{$property->bathroom}}" placeholder="" @error('bathroom') style="border-color: red" @enderror >
                           @error('bathroom')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="bedroom">Kamar Tidur</label>
                          <input id="bedroom" name="bedroom" type="number" class="form-control" value="{{$property->bedroom}}" placeholder="" @error('bedroom') style="border-color: red" @enderror  >
                          @error('bedroom')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="price">Harga</label>
                          <input id="price" name="price" type="number" class="form-control" value="{{$property->price}}" placeholder="" @error('price') style="border-color: red" @enderror >
                          @error('price')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
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
                          <input id="electricity" name="electricity" value="{{$property->electricity}}"   type="number" class="form-control" placeholder="Dalam satuan Watt" @error('electricity') style="border-color: red" @enderror >
                          @error('electricity')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="water">Sumber Air</label>
                          <input id="water" name="water" type="text" value="{{$property->water}}"  class="form-control" placeholder="" @error('water') style="border-color: red" @enderror >
                          @error('water')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="legality">Legalitas</label>
                          <input id="legality" name="legality" value="{{$property->legality}}" type="text" class="form-control" placeholder="" @error('legality') style="border-color: red" @enderror >
                          @error('legality')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="garage">Garasi</label>
                          <input id="garage" name="garage" value="{{$property->garage}}"  type="number" class="form-control" placeholder="" @error('garage') style="border-color: red" @enderror >
                          @error('garage')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="name">Nama</label>
                          <input id="name" name="name" type="text" value="{{$property->name}}"  class="form-control" placeholder="" @error('name') style="border-color: red" @enderror  >
                          @error('name')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="phone_number">Nomor Handphone Pemilik</label>
                          <input id="phone_number" name="phone_number" type="text" value="{{$property->phone_number}}"  class="form-control" placeholder=""  @error('phone_number') style="border-color: red" @enderror>
                          @error('phone_number')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>


                      <div class="col-xs-12">
                        <div class="form-group listing-compose-block">
                          <label for="mytextarea">Description</label>
                        <textarea name="description" id="mytextarea" rows="20" class="tinymce-editor" >{{$property->description}}</textarea>
                        @error('description')    
                            <div style="color:red">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Foto 1</label>
                        <input type="file" name="photo[]" data-max-file-size="2M" class="dropify" data-default-file="{{isset($property->images[0]) ? asset($property->images[0]->photo) : ''}}" />
                        <span>*Wajib diisi</span>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Foto 2</label>
                          <input type="file" name="photo[]" data-max-file-size="2M" class="dropify" data-default-file="{{isset($property->images[1]) ? asset($property->images[1]->photo) : ''}}" />
                          <span>*Opsional</span>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="">Foto 3</label>
                          <input type="file" name="photo[]" data-max-file-size="2M" class="dropify" ata-default-file="{{isset($property->images[2]) ? asset($property->images[0]->photo) : ''}}"/>
                          <span>*Opsional</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="button primary-bg">Update</button>
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
  <script src="{{asset('js/dashboard.js')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

  <script>
    $('.dropify').dropify();

    var drEvent = $('.dropify').dropify();

drEvent.on('dropify.afterClear', function(event, element){
    console.log(element)
});
  </script>
</body>

<!-- Mirrored from eorrangeshop.com/html/divinevillas/dashboard-add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Feb 2019 04:12:50 GMT -->

</html>