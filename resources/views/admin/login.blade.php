<html lang="en"><head>
  	<title>Login | Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{url('/storage/assets/css/style-admin.css')}}">
    <link rel="stylesheet" href="{{url('storage/assets/css/popup.css')}}">	
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('storage/assets/img/pcr.png')}}">
    <script src="{{url('storage/assets/vendor/jquery/jquery.min.js')}}"></script>

	</head>
	<body>
	<section class="ftco-section">
		<center><img src="{{url('/storage/assets/img/pcr.png')}}"></center>
		<div class="container">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
						<div class="login-wrap p-4 p-lg-5">
							<div class="d-flex">
			      				<div class="w-100">
									<h3 class="mb-4">Login Admin</h3>
			      				</div>
			      			</div>
							@include('modal')
							<form action="/admin/login" method="post" class="signin-form">
							{{ csrf_field() }}
								<div class="form-group mb-3">
									<label class="label" for="name">Email</label>
									<input type="email" name="email_admin" class="form-control" placeholder="Email" required="">
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" name="password_admin" class="form-control" placeholder="Password" required="">
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary submit px-3">Masuk</button>
								</div>
		          			</form>
		        		</div>
		      		</div>
				</div>
	</section>

  <script src="{{url('/storage/assets/js/popper.js')}}"></script>
  <script src="{{url('/storage/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{url('/storage/assets/js/main.js')}}"></script>

	


</body></html>