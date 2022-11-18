<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome | Admin</title>

    <!-- Custom fonts for this template -->
    <link href="{{url('/storage/assets/vendor/font-awesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('/storage/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">    
    <link rel="stylesheet" href="{{url('storage/assets/css/popup.css')}}">	
    <script src="{{url('storage/assets/vendor/jquery/jquery.min.js')}}"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.navbar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pencarian untuk..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Session::get('nama_admin')}} (Panitia)</span>
                                <img class="img-profile rounded-circle"
                                    src="{{url('/storage/assets/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Beasiswa</h1>
                    
                    @include('modal')

                    <!-- DataTales Example -->                    
                    <div class="card shadow mb-2">
                    <div class="px-5 my-5">
                    <form id="contactForm" method="post" action="/h/admin/tambah/beasiswa">
                    {{ csrf_field() }}
                        <div class="form-floating mb-3">                            
                            <label for="namaBeasiswa">Nama Beasiswa</label>
                            <input class="form-control" id="namaBeasiswa" type="text" name="nama_beasiswa"  data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="namaBeasiswa:required">Nama Beasiswa is required.</div>
                        </div>
                        <div class="form-floating mb-3">                            
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" type="text" name="deskripsi" placeholder="Deskripsi" style="height: 10rem;" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="deskripsi:required">Deskripsi is required.</div>
                        </div>
                        <div class="form-floating mb-3">                            
                            <label for="awalDaftar">Tanggal Pembukaan beasiswa</label>
                            <input class="form-control" id="awalDaftar" type="date" name="awal_daftar" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="awalDaftar:required">Awal daftar is required.</div>
                        </div>
                        <div class="form-floating mb-3">                            
                            <label for="akhirDaftar">Tanggal Penutupan beasiswa</label>
                            <input class="form-control" id="akhirDaftar" type="date" name="akhir_daftar" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="akhirDaftar:required">Akhir daftar is required.</div>
                        </div>
                        <div class="form-floating mb-3">                            
                            <label for="pengumuman">Tanggal Pengumuman</label>
                            <input class="form-control" id="pengumuman" type="date" name="pengumuman" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="pengumuman:required">Pengumuman is required.</div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; 2022 | Politeknik Caltex Riau</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/h/admin/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!--Bootstrap form-->    
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{url('/storage/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/storage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('/storage/assets/js/popper.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{url('/storage/assets/js/sb-admin-2.min.js')}}"></script>    
  <script src="{{url('/storage/assets/js/main.js')}}"></script>
    <script type="text/javascript">
    </script>

</body>

</html>