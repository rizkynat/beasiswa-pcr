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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('/storage/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{url('/storage/assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <style>
        th, td { white-space: nowrap; }
        div.dataTables_wrapper {
            margin: 0 auto;
        }
 
        div.container {
            width: 80%;
        }
    </style>

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
                    <p class="mb-4">Berikut data mahasiswa yang telah melakukan pendaftaran beasiswa</a>.</p>
                    <div class="row col-12">
                        <a href="/h/admin/prediksi_all" class="btn btn-icon-split mb-4" type="button" style="--bs-btn-padding-y: .25rem;background-color:#00465e;color:white;--bs-btn-padding-x: .25rem;">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Prediksi Semua</span>
                                        </a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!--<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>-->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                            <th>Nama Mahasiswa</th>
                                            <th>Nim</th>
                                            <th>Jurusan</th>
                                            <th>UKT</th>
                                            <th>Nilai UKT</th>
                                            <th>Penghasilan Ayah</th>
                                            <th>Penghasilan Ibu</th>
                                            <th>Total Penghasilan</th>
                                            <th>Jumlah Anggota</th>
                                            <th>Total Penghasilan / Jumlah Anggota</th>
                                            <th>Status Ayah</th>
                                            <th>Status Ibu</th>
                                            <th>Status KIP</th>
                                            <th>Status Tidak Mampu</th>
                                            <th>Status KKS</th>
                                            <th>Aksi</th>
                                            <th>Hasil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($BeaKIPs as $BeaKIP)
                                        <tr>
                                            <td>{{$BeaKIP->nama_mhs}}</td>
                                            <td>{{$BeaKIP->nim}}</td>
                                            <td>{{$BeaKIP->jurusan}}</td>
                                            <td>{{$BeaKIP->ukt}}</td>
                                            <td>Rp. {{strrev(implode('.',str_split(strrev(strval($BeaKIP->nilai_ukt)),3)))}}</td>
                                            <td>Rp. {{strrev(implode('.',str_split(strrev(strval($BeaKIP->penghasilan_ayah)),3)))}}</td>
                                            <td>Rp. {{strrev(implode('.',str_split(strrev(strval($BeaKIP->penghasilan_ibu)),3)))}}</td>
                                            <td>Rp. {{strrev(implode('.',str_split(strrev(strval($BeaKIP->penghasilan_ayah + $BeaKIP->penghasilan_ibu)),3)))}}</td>
                                            <td>{{$BeaKIP->jml_anggota}}</td>
                                            <td>Rp. {{strrev(implode('.',str_split(strrev(strval($BeaKIP->total_penghasilan_perjumlahAnggota)),3)))}}</td>
                                            <td><a target="_blank" href="{{url('/storage/berkas/'.$BeaKIP->filename_status_ayah)}}" type="button" style="--bs-btn-padding-y: .25rem;background-color:#00465e;--bs-btn-padding-x: .25rem;" class="btn"><img src="{{url('/storage/assets/img/pdf.png')}}" width="20px" height="20px"></a>
                                                <div class="form-check">
                                                    <input class="form-check-input toggle-class-ayah" type="checkbox" {{$BeaKIP->status_ayah==true ? 'checked' : ''}} data-id_berkas_lanjutan="{{$BeaKIP->id_berkas_lanjutan}}" id="{{$BeaKIP->id_berkas_lanjutan}}">
                                                    <label class="form-check-label" for="{{$BeaKIP->id_berkas_lanjutan}}">
                                                        Valid
                                                    </label>
                                                </div>
                                            </td>
                                            <td><a target="_blank" href="{{url('/storage/berkas/'.$BeaKIP->filename_status_ibu)}}" type="button" style="--bs-btn-padding-y: .25rem;background-color:#00465e;--bs-btn-padding-x: .25rem;" class="btn"><img src="{{url('/storage/assets/img/pdf.png')}}" width="20px" height="20px"></a>
                                                <div class="form-check">
                                                <input class="form-check-input toggle-class-ibu" type="checkbox" {{$BeaKIP->status_ibu==true ? 'checked' : ''}} data-id_berkas_lanjutan="{{$BeaKIP->id_berkas_lanjutan}}" id="{{$BeaKIP->id_berkas_lanjutan}}">
                                                <label class="form-check-label" for="{{$BeaKIP->id_berkas_lanjutan}}">
                                                        Valid
                                                    </label>
                                                    </div>
                                            </td>
                                            <td><a target="_blank" href="{{url('/storage/berkas/'.$BeaKIP->filename_status_kip)}}" type="button" style="--bs-btn-padding-y: .25rem;background-color:#00465e;--bs-btn-padding-x: .25rem;" class="btn"><img src="{{url('/storage/assets/img/pdf.png')}}" width="20px" height="20px"></a>
                                                <div class="form-check">
                                                <input class="form-check-input toggle-class-kip" type="checkbox" {{$BeaKIP->status_kip==true ? 'checked' : ''}} data-id_berkas_lanjutan="{{$BeaKIP->id_berkas_lanjutan}}" id="{{$BeaKIP->id_berkas_lanjutan}}">
                                                <label class="form-check-label" for="{{$BeaKIP->id_berkas_lanjutan}}">
                                                        Valid
                                                    </label>
                                                    </div>
                                            </td>
                                            <td><a target="_blank" href="{{url('/storage/berkas/'.$BeaKIP->filename_status_tdk_mampu)}}" type="button" style="--bs-btn-padding-y: .25rem;background-color:#00465e;--bs-btn-padding-x: .25rem;" class="btn"><img src="{{url('/storage/assets/img/pdf.png')}}" width="20px" height="20px"></a>
                                                <div class="form-check">
                                                <input class="form-check-input toggle-class-tdk-mampu" type="checkbox" {{$BeaKIP->status_tdk_mampu==true ? 'checked' : ''}} data-id_berkas_lanjutan="{{$BeaKIP->id_berkas_lanjutan}}" id="{{$BeaKIP->id_berkas_lanjutan}}">
                                                <label class="form-check-label" for="{{$BeaKIP->id_berkas_lanjutan}}">
                                                        Valid
                                                    </label>
                                                    </div>
                                            </td>
                                            <td><a target="_blank" href="{{url('/storage/berkas/'.$BeaKIP->filename_status_kks)}}" type="button" style="--bs-btn-padding-y: .25rem;background-color:#00465e;--bs-btn-padding-x: .25rem;" class="btn"><img src="{{url('/storage/assets/img/pdf.png')}}" width="20px" height="20px"></a>
                                                <div class="form-check">
                                                <input class="form-check-input toggle-class-kks" type="checkbox" {{$BeaKIP->status_kks==true ? 'checked' : ''}} data-id_berkas_lanjutan="{{$BeaKIP->id_berkas_lanjutan}}" id="{{$BeaKIP->id_berkas_lanjutan}}">
                                                    <label class="form-check-label" for="{{$BeaKIP->id_berkas_lanjutan}}">
                                                            Valid
                                                        </label>
                                                    </div>
                                            </td>
                                            <td><a href="/h/admin/prediksi/{{$BeaKIP->id_berkas_lanjutan}}" type="button" style="--bs-btn-padding-y: .25rem;background-color:#00465e;color:white;--bs-btn-padding-x: .25rem;" class="btn">Prediksi</a>
                                            </td>
                                            <td>
                                                @if($BeaKIP->hasil==2)
                                                    Belum Prediksi
                                                @elseif($BeaKIP->hasil==0)
                                                    Tidak Lulus
                                                @elseif($BeaKIP->hasil==1)
                                                    Lulus
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('/storage/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/storage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('/storage/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('/storage/assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{url('/storage/assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('/storage/assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{url('/storage/assets/vendor/datatables/datatables-demo.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable({
                scrollX: true,
            });
        });

        $(function(){
            function postStatus(className, role){
                $(className).change(function(){
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id_berkas_lanjutan = $(this).data('id_berkas_lanjutan');
                    $.ajax({
                    type: 'get',
                    dataType: 'json',
                    url: '{{ route('ubah-status-berkas')}}',
                    data: {'status': status, 'id_berkas_lanjutan': id_berkas_lanjutan, 'role':role},
                    success: function(data){
                        console.log('Success')
                    }
                    });
               // window.setTimeout( function() {window.location.reload();}, 50);
            });
            }
            postStatus('.toggle-class-ayah', 'ayah');
            postStatus('.toggle-class-ibu', 'ibu');
            postStatus('.toggle-class-kip', 'kip');
            postStatus('.toggle-class-tdk-mampu', 'tdk_mampu');
            postStatus('.toggle-class-kks', 'kks');

            });
    </script>

</body>

</html>