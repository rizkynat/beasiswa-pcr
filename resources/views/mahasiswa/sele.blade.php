<form class="form-detail" action="/h/mahasiswa/BeaKIP" method="post" id="myform" enctype="multipart/form-data">
			{{ csrf_field() }}
				<div class="form-left">
					<h2 style="color:#429244;">Data Mahasiswa</h2>
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
					<div class="form-row file">
						<label for="upload">KIP (Kartu Indonesia Pintar) : </label><br><p></p>
						<div class="upload-btn-wrapper">
							<button class="btn">Browse Files</button>
							<input id="kip" type="file" name="kip" accept=".pdf" />
							<b>&emsp;Unggah KIP dalam format pdf</b>
						</div>
					</div>
					<div class="form-row file">
						<label for="upload">Surat Keterangan Tidak Mampu : </label><br><p></p>
						<div class="upload-btn-wrapper">
							<button class="btn">Browse Files</button>
							<input type="file" id="surat_tdk_mampu" name="status_tdk_mampu" accept=".pdf" />
							<b>&emsp;Unggah Berkas dalam format pdf</b>
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
					<div class="form-row fil">
						<label for="upload">Berkas Status Ayah : </label><br><p></p>
						<div class="upload-btn-wrapper2">
							<button class="btn2">Browse Files</button>
							<input id="status_ayah" type="file" name="status_ayah" accept=".pdf" />
							<b>&emsp;Unggah Berkas dalam format pdf</b>
						</div>
					</div>
					<div class="form-row fil">
						<label for="upload">Berkas Status Ibu : </label><br><p></p>
						<div class="upload-btn-wrapper2">
							<button class="btn2">Browse Files</button>
							<input id="status_ibu" type="file" name="status_ibu" accept=".pdf" />
							<b>&emsp;Unggah Berkas dalam format pdf</b>
						</div>
					</div>
					
					<div class="form-row fil">
						<label for="upload">KKS (Kartu Keluarga Sejahtera) : </label><br><p></p>
						<div class="upload-btn-wrapper2">
							<button class="btn2">Browse Files</button>
							<input id="kks" type="file" name="kks" accept=".pdf" />
							<b>&emsp;Unggah Berkas dalam format pdf</b>
						</div>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Daftar Beasiswa">
					</div>
				</div>
			</form>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($BeaKIPs as $BeaKIP)
                                        <tr>
                                            <td>{{$BeaKIP->nama_mhs}}</td>
                                            <td>{{$BeaKIP->nim}}</td>
                                            <td>{{$BeaKIP->jurusan}}</td>
                                            <td>{{$BeaKIP->ukt}}</td>
                                            <td>{{$BeaKIP->nilai_ukt}}</td>
                                            <td>{{$BeaKIP->penghasilan_ayah}}</td>
                                            <td>{{$BeaKIP->penghasilan_ibu}}</td>
                                            <td>{{$BeaKIP->penghasilan_ayah + $BeaKIP->penghasilan_ibu}}</td>
                                            <td>{{$BeaKIP->jml_anggota}}</td>
                                            <td>{{$BeaKIP->total_penghasilan_perjumlahAnggota}}</td>
                                            <td>{{$BeaKIP->filename_status_ayah}}</td>
                                            <td>{{$BeaKIP->nilai_ukt}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

								@foreach($BeaKIPs as $BeaKIP)
                                    <tr class="odd">
                                            <td class="sorting_1">{{$BeaKIP->nama_mhs}}</td>
                                            <td>{{$BeaKIP->nim}}</td>
                                            <td>{{$BeaKIP->jurusan}}</td>
                                            <td>{{$BeaKIP->ukt}}</td>
                                            <td>{{strrev(implode('.',str_split(strrev(strval($BeaKIP->nilai_ukt)),3)))}}</td>
                                            <td>{{strrev(implode('.',str_split(strrev(strval($BeaKIP->penghasilan_ayah)),3)))}}</td>
                                            <td>{{strrev(implode('.',str_split(strrev(strval($BeaKIP->penghasilan_ibu)),3)))}}</td>
                                            <td>{{strrev(implode('.',str_split(strrev(strval($BeaKIP->penghasilan_ayah + $BeaKIP->penghasilan_ibu)),3)))}}</td>
                                            <td>{{$BeaKIP->jml_anggota}}</td>
                                            <td>{{strrev(implode('.',str_split(strrev(strval($BeaKIP->total_penghasilan_perjumlahAnggota)),3)))}}</td>
                                        </tr>
                                    @endforeach


									1
2400000
Asbet simbolon
2400000
Nurani simanjuntak
300000
216666
3

tdk mampu = 0