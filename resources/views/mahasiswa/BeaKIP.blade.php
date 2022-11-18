<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beasiswa Politeknik Caltex Riau</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{url('/storage/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{url('/storage/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{url('/storage/assets/vendor/lightbox2/css/lightbox.css')}}">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="{{url('/storage/assets/css/fontastic.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{url('storage/assets/css/style.blue.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{url('/storage/assets/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('/storage/assets/img/pcr.png')}}">
    
    <!--1.form-pendaftaran/-->
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('/storage/assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <!-- Main Style Css -->
      <link rel="stylesheet" href="{{url('/storage/assets/css/style.css')}}">


    <!-- Required meta tags-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Colorlib Templates">
      <meta name="author" content="Colorlib">
      <meta name="keywords" content="Colorlib Templates">

      <!-- Icons font CSS-->
      <link href="{{url('/storage/assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
      <link href="{{url('/storage/assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">

      <!-- Vendor CSS-->
      <link href="{{url('/storage/assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
      <link href="{{url('/storage/assets/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">
	  <style>
		* {
			margin: 0;
			padding: 0;
		}

		html {
			height: 100%;
			background: #ffffff; /* fallback for old browsers */
			background: -webkit-linear-gradient(to left, #ffffff, #ffffff); /* Chrome 10-25, Safari 5.1-6 */
		}

		body {
			font-family: 'Baloo 2', cursive;
			background: transparent;
		}

	  </style>
    <!--1.form-pendaftaran/-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="/" class="navbar-brand"><img src="{{url('/storage/assets/img/pcr.png')}}" alt="" class="img-fluid"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                  <!-- Link-->
                  <li class="nav-item"> <a href="/h/mahasiswa" class="nav-link">Beasiswa</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="/h/mahasiswa/hasil" class="nav-link">Hasil</a></li>
                  
            </ul><a href="/h/mahasiswa/logout" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Logout</a>
          </div>
        </div>
      </nav>
    </header>
    <section class="hero">
      <div class="container text-center">
        <!-- breadcrumb-->
        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="animsition-link">Politeknik Caltex Riau</a></li>
            <li aria-current="page" class="breadcrumb-item active">Detail Beasiswa</li>
          </ol>
        </nav>
        <h1 class="hero-heading" style="color: black;">Form Pendaftaran Beasiswa</h1>
        <div class="row">
         
        </div>
      </div>
    </section>
    
    <!--1.form-pendaftaran/-->
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="/h/mahasiswa/1" method="post" id="myform" enctype="multipart/form-data">
				{{ csrf_field() }}
					<div class="form-left">
						<h2>Data Mahasiswa</h2>
						<div class="form-row">
							<input type="text" readonly value="{{Session::get('nama_mhs')}}" name="nama_mhs" class="nama_mhs" id="nama_mhs" placeholder="Nama Lengkap" required>
						</div>
						<div class="form-row">
							<input type="number" readonly value="{{Session::get('nim')}}" name="nim" class="nim" id="nim" placeholder="NIM" required>
						</div>
						<div class="form-row">
							<input class="input--style-1 js-datepicker" type="text" placeholder="Tanggal Lahir" name="tgl_lahir" required>                        
						</div>
						<div class="form-row">
						<select name="fakultas" id="fakultas">
								<option selected>Fakultas</option>
							@foreach($fakultass as $fakultas)
								<option value="{{$fakultas->nama_fakultas}}">{{$fakultas->nama_fakultas}}</option>
							@endforeach
							</select>
							<span class="select-btn">
								<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
						<div class="form-row">
							<select name="jurusan" id="jurusan">
								<option selected>Jurusan</option>
								@foreach($jurusans as $jurusan)
								<option value="{{$jurusan->nama_jurusan}}">{{$jurusan->nama_jurusan}}</option>
								@endforeach
							</select>
							<span class="select-btn">
								<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
						<div class="form-row">
							<select name="k_ukt" id="k_ukt">
								<option selected>Kelompok UKT</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							<span class="select-btn">
								<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
						<div class="form-row">
							<select name="n_ukt" id="nilai_ukt">
							<option selected>Nilai UKT</option>
								@foreach($ukts as $ukt)
								<option value="{{$ukt->nilai_ukt}}">Rp. {{strrev(implode('.',str_split(strrev(strval($ukt->nilai_ukt)),3)))}}</option>
								@endforeach
							</select>
							<span class="select-btn">
								<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
						<div class="form-row file-left">
							<label>KIP (Kartu Indonesia Pintar) : </label><br><p></p>
							<div class="upload-btn-wrapper-left">
								<button class="btn-left">Browse Files</button>
								<input id="kip" type="file" name="kip" accept=".pdf" />
								<p class="kip">&emsp;Unggah KIP dalam format pdf</p>
							</div>
						</div>
						<div class="form-row file-left">
							<label for="upload">Surat Keterangan Tidak Mampu : </label><br><p></p>
							<div class="upload-btn-wrapper-left">
								<button class="btn-left">Browse Files</button>
								<input type="file" id="surat_tdk_mampu" name="status_tdk_mampu" accept=".pdf" />
								<p class="surat_tdk_mampu">&emsp;Unggah Berkas dalam format pdf</p>
							</div>
						</div>
					</div>
					<div class="form-right">
						<h2>Data Keluarga</h2>
						<div class="form-row">
							<input type="text" name="nama_ayah" class="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" required>
						</div>
						<div class="form-row">
							<input type="number" name="penghasilan_ayah" class="penghasilan_ayah" id="penghasilan_ayah" placeholder="Jumlah Penghasilan Ayah per Bulan" required>
							<div class="ket">
								<p><b>Isi jumlah penghasilan ayah dengan angka. Contoh: 3500000</b></p>
							</div>
						</div>
						<div class="form-row">
							<input type="text" name="nama_ibu" class="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" required>
						</div>
						<div class="form-row">
							<input type="number" name="penghasilan_ibu" class="penghasilan_ibu" id="penghasilan_ibu" placeholder="Jumlah Penghasilan Ibu per Bulan" required>
							<div class="ket">
								<p><b>Isi jumlah penghasilan ibu dengan angka. Contoh: 3500000</b></p>
							</div>
						</div>
						<div class="form-row">
							<input type="number" name="total_anggota" class="total_anggota" id="total_anggota" placeholder="Banyak Anggota Keluarga" required>
							<div class="ket">
								<p><b>Isi banyak anggota keluarga sesuai KK (Kartu Keluarga). Contoh: 4</b></p>
							</div>
						</div>
						<div class="form-row file-right">
							<label for="upload">Berkas Status Ayah : </label><br><p></p>
							<div class="upload-btn-wrapper-right">
								<button class="btn-right">Browse Files</button>
								<input id="status_ayah" type="file" name="status_ayah" accept=".pdf" />
								<p class="status_ayah">&emsp;Unggah Berkas dalam format pdf</p>
							</div>
						</div>
						<div class="form-row file-right">
							<label for="upload">Berkas Status Ibu : </label><br><p></p>
							<div class="upload-btn-wrapper-right">
								<button class="btn-right">Browse Files</button>
								<input id="status_ibu" type="file" name="status_ibu" accept=".pdf" />
								<p class="status_ibu">&emsp;Unggah Berkas dalam format pdf</p>
							</div>
						</div>
						
						<div class="form-row file-right">
							<label for="upload">KKS (Kartu Keluarga Sejahtera) : </label><br><p></p>
							<div class="upload-btn-wrapper-right">
								<button class="btn-right">Browse Files</button>
								<input id="kks" type="file" name="kks" accept=".pdf" />
								<p class="kks">&emsp;Unggah Berkas dalam format pdf</p>
							</div>
						</div>
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Daftar Beasiswa">
						</div>
					</div>
				</form>
		</div>
	</div>
      <!-- Jquery JS-->
        <script src="{{url('/storage/assets/vendor/jquery/jquery.min.js')}}"></script>
        <!-- Vendor JS-->
        <script src="{{url('/storage/assets/vendor/select2/select2.min.js')}}"></script>
        <script src="{{url('/storage/assets/vendor/datepicker/moment.min.js')}}"></script>
        <script src="{{url('/storage/assets/vendor/datepicker/daterangepicker.js')}}"></script>
    
        <!-- Main JS-->
        <script src="{{url('/storage/assets/js/global.js')}}"></script>
    </div><div class="daterangepicker dropdown-menu ltr single opensright"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" disabled="disabled" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>
    <!--1.form-pendaftaran/-->

    <footer>      
      <div class="text-center p-4">
        © 2022 | POLITEKNIK CALTEX RIAU
      </div>
    </footer>
    
    <!-- JavaScript files-->
    <script src="{{url('/storage/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/storage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('/storage/assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{url('/storage/assets/vendor/lightbox2/js/lightbox.js')}}"></script>
    <script src="{{url('/storage/assets/js/front.js')}}"></script>
	<script type="text/javascript">
        function fileName(idInput, idBold){
			$(idInput).change(function() {
			var file = $(idInput)[0].files[0].name;
			console.log(file);
			$(idBold).text(file);
			});
		}
		fileName('input#kip', 'p.kip');
		fileName('input#surat_tdk_mampu', 'p.surat_tdk_mampu');
		fileName('input#status_ayah', 'p.status_ayah');
		fileName('input#status_ibu', 'p.status_ibu');
		fileName('input#kks', 'p.kks');
	</script>
<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div></body></html>