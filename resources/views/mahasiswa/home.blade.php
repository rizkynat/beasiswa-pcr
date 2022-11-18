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
            <li aria-current="page" class="breadcrumb-item active">Beasiswa</li>
          </ol>
        </nav>
        <h1 class="hero-heading">Beasiswa Tersedia</h1>
      </div>
    </section>
    <!-- FAQ Section-->
    <section class="light">
      <div class="container py-2">
      @php        
      foreach($beasiswas as $beasiswa){
      @endphp
        <article class="postcard light blue">
          <a class="postcard__img_link" href="#">
            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
          </a>
          <div class="postcard__text t-dark">
            <h1 class="postcard__title blue"><a href="/h/mahasiswa/{{$beasiswa->id_beasiswa}}" class="px-2">{{$beasiswa->nama_beasiswa}}</a></h1>
            <div class="postcard__subtitle small">
              <time datetime="2020-05-25 12:00:00">
                @php
                if(isset($beasiswa->awal_daftar) and isset($beasiswa->akhir_daftar)){
                $hasil = $beasiswa->awal_daftar." - ".$beasiswa->akhir_daftar
                @endphp                                             
                Jadwal Daftar: <i class="fas fa-calendar-alt mr-2"></i>{{$hasil}}
                @php
                }else{
                $hasil = 'Segera'
                @endphp
                Jadwal Daftar: <i class="fas fa-calendar-alt mr-2"></i>{{$hasil}}
                @php
                }
                @endphp

              </time>
            </div>
            <div class="postcard__bar"></div>
            <div class="postcard__preview-txt">{{$beasiswa->deskripsi}}</div>
            <ul class="postcard__tagbox">
              @php
                $curdate = date("d");
                $hari_sisa = ((int)$beasiswa->jml_hari)-((int)$curdate);
                $pesan = '';
                if($hari_sisa < 0){
                  $pesan = 'Berlalu';
                }else{
                  $pesan = $hari_sisa." Hari lagi";
                }
              @endphp
              <li class="tag__item"><i class="fas fa-clock mr-2"></i>{{$pesan}}</li>
            </ul>
          </div>
        </article>
      @php        
          }
      @endphp
      </div>
    </section>
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