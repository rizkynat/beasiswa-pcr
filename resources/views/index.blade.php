<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beasiswa Politeknik Caltex Riau</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{url('storage/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{url('storage/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{url('storage/assets/vendor/lightbox2/css/lightbox.css')}}">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="{{url('storage/assets/css/fontastic.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{url('storage/assets/css/style.blue.css')}}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{url('storage/assets/css/popup.css')}}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{url('storage/assets/css/index.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('storage/assets/img/pcr.png')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{url('storage/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('storage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="/" class="navbar-brand"><img src="{{url('storage/assets/img/pcr.png')}}" alt="" class="img-fluid"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#" data-toggle="modal" data-target="#register" class="btn btn-outline-primary navbar-btn ml-0 ml-lg-3" style="float: right;">Register</a></li>
            </ul>
            <br>
            <a href="#" data-toggle="modal" data-target="#login" class="btn btn-primary navbar-btn ml-0 ml-lg-3" style="float: right;">Login</a>
          </div>
        </div>
      </nav>
    </header>
    @include('modal')
    <!-- Login Modal-->
    <div id="login" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body p-4 p-lg-5">
            <form action="/login" method="post" class="login-form text-left">
              {{ csrf_field() }}
              <h3 style="font-weight: bold; color: #00465E;">Silahkan login menggunakan akun iRaise anda.</h3><p><br>
              <div class="form-group mb-4">
                <label>Email</label>
                <input type="text" name="email" placeholder="Email Anda" class="form-control" required>
              </div>
              <div class="form-group mb-4">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password Anda" class="form-control" id="password" required>
                <!--<i class="bi bi-eye-slash" id="hide"></i>
                <i class="bi bi-eye" id="show"></i> //-->
              </div></p>
              <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Register Modal-->
    <div id="register" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body p-4 p-lg-5">
            <form action="/daftar" method="post" class="login-form text-left">
              {{ csrf_field() }}
              <h3 style="font-weight: bold; color: #00465E; float: center;">Registarasi Akun</h3><p><br>
              <div class="form-group mb-4">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_mhs" placeholder="Nama Lengkap Anda" class="form-control" required>
              </div>
              <div class="form-group mb-4">
                <label>NIM</label>
                <input type="number" name="nim" placeholder="NIM Anda" class="form-control" required>
              </div>
              <div class="form-group mb-4">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email Anda" class="form-control" required>
              </div>
              <div class="form-group mb-4">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password Anda" class="form-control" id="password" required>
                <!--<i class="bi bi-eye-slash" id="hide"></i>
                <i class="bi bi-eye" id="show"></i> //-->
              </div>
              <div class="form-group mb-4">
                <label>Konfirmasi Password</label>
                <input type="password" name="repassword" placeholder="Konfirmasi Password Anda" class="form-control" id="repassword" required>
              </div></p>
              <div class="form-group">
                <input type="submit" value="Register" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Hero Section-->
    <section class="hero">
      <div class="container mb-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1 class="hero-heading mb-0"><br>Pendaftaran <br> Beasiswa <br> Politeknik Caltex Riau</h1>
            <div class="row">
              <div class="col-lg-10"><br><br>
              </div>
            </div>
            <form action="#" class="subscription-form">
              <a href="#" data-toggle="modal" data-target="#login">
              <button type="submit" style="border-radius: 0rem;" class="btn btn-primary">Masuk Sekarang!</button></a>
              <div class="form-group">
                
              </div>
            </form>
          </div>
          <div class="col-lg-6"><img src="{{url('storage/assets/img/b-gra.svg')}}" alt="..." class="hero-image img-fluid d-none d-lg-block"></div>
        </div>
      </div>
    </section>
    <section>
        <div class="text-center">
          <h2><b>Beasiswa Tersedia</b></h2>
        </div>
        <!--card beasiswa-->
        <section class="wrapper">
          <div class="container">
            <div class="row">        
              @foreach($beasiswas as $beasiswa)
              <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                  <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                      <div class="card-body">
                        <h4 class="card-title mt-0 "><a class="text-white" herf="#">{{$beasiswa->nama_beasiswa}}</a></h4>
                        @php
                        if(isset($beasiswa->awal_daftar) and isset($beasiswa->akhir_daftar)){
                        $hasil = $beasiswa->awal_daftar." - ".$beasiswa->akhir_daftar
                        @endphp                                             
                        Jadwal Daftar: <small class="card-meta mb-2">{{$hasil}}</small><br>
                        @php
                        }else{
                        $hasil = 'Segera'
                        @endphp
                        Jadwal Daftar: <small class="card-meta mb-2">{{$hasil}}</small><br>
                        @php
                        }
                        @endphp
                        @php
                        if(isset($beasiswa->pengumuman)){
                        $hasil = $beasiswa->pengumuman;
                        @endphp

                        Pengumuman: <small class="card-meta mb-2">{{$hasil}}</small>
                        @php
                        }else{
                          $hasil = 'Segera'
                        @endphp
                        Pengumuman: <small class="card-meta mb-2">{{$hasil}}</small>
                        @php
                        }
                        @endphp
                      </div>
                    </div>
                </div>
              </div>    
              @endforeach           
            </div>          
          </div>
        </section>
    </section>
    <footer>      
      <div class="text-center p-4" style="background-color: #00465E; color: white;">
        © 2022 | POLITEKNIK CALTEX RIAU
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="{{url('storage/assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{url('storage/assets/vendor/lightbox2/js/lightbox.js')}}"></script>
    <script src="{{url('storage/assets/js/front.js')}}"></script>
  </body>
</html>