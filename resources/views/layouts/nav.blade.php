   <div class="primary-bg top-nav">
       <div class="container">
           <div class="row">
               <div class="col-md-8">
                   <div class="header-top-content">
                       <ul>
                           <li><i class="fas fa-phone"></i> 0823-3512-7064</li>
                           <li><i class="far fa-envelope"></i> support@primaproperti.com</li>
                           <li><i class="fas fa-map-marker-alt"></i> Jln. Letnan Sudiono Bondowoso</li>
                       </ul>
                   </div>
               </div>
               @guest
               <div class="col-md-4">
                   <div class="header-top-nav">
                       @if (Request::is('login'))
                   <a href="/register" class="header-top-button white-bg">Daftar</a>
                       @elseif(Request::is('register'))
                       <a href="/login" class="header-top-button">Masuk</a>
                       @else
                       <a href="/register" class="header-top-button white-bg">Daftar</a>
                       <a href="/login" class="header-top-button">Masuk</a>
                       @endif
                   </div>
               </div>
               @endguest
               @auth
               <div class="col-md-4">
                   <div class="header-top-nav">
                    <a href="/agent" class="header-top-button white-bg">Profil</a>
                       <form id="logout" hidden action="/logout" method="post">
                           @csrf
                        </form>
                        <button id="btn_logout" class="header-top-button">Logout</button>
                   </div>
               </div>
               @endauth
           </div>
       </div>
   </div>

   <script>
       @auth
       var logout = document.getElementById('logout')
        document.getElementById('btn_logout').addEventListener('click',function (e) {
            e.preventDefault();
            logout.submit()
        })
        @endauth
   </script>
   <!-- Top Nav End -->

   <!-- Header -->
   <header>
       <nav class="navbar navbar-default cp-navigation navbar-fixed-top">
           <div class="container">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
                   <a class="navbar-brand page-scroll" href="/">
                       <img src="{{asset('assets/img/properti.png')}}" alt="Brand Logo">
                   </a>
               </div>
               <div class="collapse navbar-collapse" id="navbar-collapse">
                   <ul class="nav navbar-nav navbar-right">
                       <li><a class="page-scroll" href="/#home">Beranda</a></li>
                       <li><a class="page-scroll" href="/#about">Tentang Kami</a></li>
                       <li><a class="page-scroll" href="/#visi">Visi Misi</a></li>
                       <li><a class="page-scroll" href="/#value">Value Prima Properti</a></li>
                       <li><a class="page-scroll" href="/#agent">Agent</a></li>
                       <li><a class="page-scroll" href="/#properti">Properti</a></li>
                       <li><a class="page-scroll" href="/#blog">Blog</a></li>
                       <li><a class="page-scroll" href="/#contact">Kontak</a></li>
                   </ul>
               </div>
           </div>
       </nav>
   </header>