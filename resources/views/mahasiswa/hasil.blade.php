<html><head>
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
    <link rel="stylesheet" href="{{url('storage/assets/css/style.blue.css')}}" id="theme-stylesheet"><link id="new-stylesheet" rel="stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{url('storage/assets/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('storage/assets/img/pcr.png')}}">
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="/" class="navbar-brand"><img src="{{url('storage/assets/img/pcr.png')}}" alt="" class="img-fluid"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                  <!-- Link-->
                  <li class="nav-item"> <a href=" /h/mahasiswa" class="nav-link">Beasiswa</a></li>
                  <li class="nav-item"> <a href=" /h/mahasiswa/hasil" class="nav-link">Hasil</a></li>
                  <!-- Link-->
                  <!--<li class="nav-item"> <a href="contact.html" class="nav-link">Contact</a></li>-->
                  <!-- Link-->
                  <!--<li class="nav-item"> <a href="text.html" class="nav-link">Text Page</a></li>
              <li class="nav-item dropdown"><a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                <div class="dropdown-menu"><a href="faq.html" class="dropdown-item">FAQ</a><a href="contact.html" class="dropdown-item">Contact</a><a href="text.html" class="dropdown-item">Text Page</a></div>
              </li>-->
            </ul><a href="/h/mahasiswa/logout" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Logout</a>
          </div>
        </div>
      </nav>
    </header>
    @include('modal')
    <!-- Hero Section-->
    <section class="hero">
      <div class="container text-center">
        <!-- breadcrumb-->
        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="animsition-link">Politeknik Caltex Riau</a></li>
            <li aria-current="page" class="breadcrumb-item active">Hasil</li>
          </ol>
        </nav>
        <h1 class="hero-heading">Beasiswa Tersedia</h1>
        <div class="row">
          <!--<div class="col-lg-7 mx-auto">
            <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          </div>-->
        </div>
      </div>
    </section>
    <!-- FAQ Section-->
    <section>
      <div class="container">        
      @php
        $nama_mhs=Session::get('nama_mhs'); 
        $hasil=2;

        foreach($mahasiswas as $mahasiswa){
            if($mahasiswa->nama_mhs==$nama_mhs and $mahasiswa->hasil==0){
                $hasil = $mahasiswa->hasil;
            }elseif($mahasiswa->nama_mhs==$nama_mhs and $mahasiswa->hasil==1){
                $hasil = 1;
            }elseif($mahasiswa->nama_mhs==$nama_mhs and $mahasiswa->hasil==2){
              $hasil=2;
            }
        }
        
        @endphp
        
        @if($hasil==0)
        <div class="row">
          <div class="col-lg-7 mx-auto" style="margin-top: -10rem;"><img src="{{url('storage/assets/img/fail.svg')}}" alt="..." class="intro-image img-fluid"></div>
        </div>
        <div class="text-center mt-0" style="margin-top: -10rem;">
          <h2>Maaf <span style="color:#00465e;">{{$nama_mhs}}</span>, Anda Tidak Lulus!</h2>
          <p class="lead text-muted mt-2" style="margin-top: -10rem;">Anda tidak lulus mendaftar beasiswa di POLITEKNIK CALTEX RIAU.</p>
          <!--<a href="#" class="btn btn-primary">Learn More</a>-->
        </div>        
        @elseif($hasil==1)
        <div class="row">
          <div class="col-lg-7 mx-auto" style="margin-top: -10rem;"><img src="{{url('storage/assets/img/happy.svg')}}" alt="..." class="intro-image img-fluid"></div>
        </div>
        <div class="text-center mt-0" style="margin-top: -10rem;">
          <h2>Selalamat <span style="color:#00465e;">{{$nama_mhs}}</span>, Anda Lulus!</h2>
          <p class="lead text-muted mt-2" style="margin-top: -10rem;">Anda lulus mendaftar beasiswa di POLITEKNIK CALTEX RIAU.</p>
        @elseif($hasil==2)
        <div class="row">
          <div class="col-lg-7 mx-auto" style="margin-top: -10rem;"><img src="{{url('storage/assets/img/process.svg')}}" alt="..." class="intro-image img-fluid"></div>
        </div>
        <div class="text-center mt-0" style="margin-top: -10rem;">
          <h2>Perhatikan perkembangan lebih lanjut..</h2>
          <p class="lead text-muted mt-2" style="margin-top: -10rem;">Panitita POLITEKNIK CALTEX RIAU akan memproses data anda.</p>
        @endif    
      </div>
    </section>s
    <footer>      
      <div class="text-center p-4">
        © 2022 | POLITEKNIK CALTEX RIAU
      </div>
    </footer>
    <!-- JavaScript files-->
    
    <script src="{{url('storage/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('storage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('storage/assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{url('storage/assets/vendor/lightbox2/js/lightbox.js')}}"></script>
    <script src="{{url('storage/assets/js/front.js')}}"></script>
  
<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div></body></html>