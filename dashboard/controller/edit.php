<?php 

	if (isset($_GET['admin-edit'])) {
		$id 		=	$_GET['admin-edit'];

		if (isset($_POST['admin-update'])) {
			$nama 		=	$_POST['nama'];
			$username	=	$_POST['username'];
			$email 		=	$_POST['email'];
			$telp 		=	$_POST['telp'];
			$alamat 	=	$_POST['alamat'];

			$admin 		=	mysql_query("UPDATE users 
										SET `users_nama` = '$nama', `users_username` = '$username', 
										`users_telp` = '$telp', `users_alamat` = '$alamat', `users_email` = '$email'
										WHERE users_id = '$id'");

			if ($admin) {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-green'>
						<div class='box-header bg-light-green'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
								<span class='text-white'>SUCCESS</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?users=admin'>";
			}else {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-yellow'>
						<div class='box-header bg-light-yellow'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  fontello-warning'></i>
								<span class='text-white'>Warning</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?users=admin'>";
			}	
		}
	$dataadmin 		=	mysql_query("SELECT * FROM users WHERE users_id='$id'");
	$row			=	mysql_fetch_array($dataadmin);
	}
?>

<?php 

	if (isset($_GET['guru-edit'])) {
		$id 		=	$_GET['guru-edit'];

		if (isset($_POST['guru-update'])) {
			$noinduk 	=	$_POST['noinduk'];
			$nama 		=	$_POST['nama'];
			$username	=	$_POST['username'];
			$email 		=	$_POST['email'];
			$telp 		=	$_POST['telp'];
			$alamat 	=	$_POST['alamat'];

			$guru 		=	mysql_query("UPDATE users 
										SET `users_noinduk` = '$noinduk', `users_nama` = '$nama', `users_username` = '$username', 
										`users_telp` = '$telp', `users_alamat` = '$alamat', `users_email` = '$email'
										WHERE users_id = '$id'");

			if ($guru) {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-green'>
						<div class='box-header bg-light-green'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
								<span class='text-white'>SUCCESS</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?users=guru'>";
			}else {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-yellow'>
						<div class='box-header bg-light-yellow'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  fontello-warning'></i>
								<span class='text-white'>Warning</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?users=guru'>";
			}	
		}
	$dataguru 		=	mysql_query("SELECT * FROM users WHERE users_id='$id'");
	$row			=	mysql_fetch_array($dataguru);
	}
?>

<?php 

	if (isset($_GET['siswa-edit'])) {
		$id 		=	$_GET['siswa-edit'];

		if (isset($_POST['siswa-update'])) {
			$noinduk 	=	$_POST['noinduk'];
			$nama 		=	$_POST['nama'];
			$username	=	$_POST['username'];
			$email 		=	$_POST['email'];
			$telp 		=	$_POST['telp'];
			$alamat 	=	$_POST['alamat'];
			$kelas 	 	=	$_POST['kelas'];
			$status	 	=	$_POST['status'];

			$siswa 		=	mysql_query("UPDATE users 
										SET `users_noinduk` = '$noinduk', `users_nama` = '$nama', `users_username` = '$username', 
										`users_telp` = '$telp', `users_alamat` = '$alamat', `users_status` = '$status', `users_email` = '$email', `kelas_id` = '$kelas'
										WHERE users_id = '$id'");

			if ($siswa) {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-green'>
						<div class='box-header bg-light-green'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
								<span class='text-white'>SUCCESS</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?users=siswa'>";
			}else {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-yellow'>
						<div class='box-header bg-light-yellow'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  fontello-warning'></i>
								<span class='text-white'>Warning</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?users=siswa'>";
			}	
		}
	$datasiswa 		=	mysql_query("SELECT * FROM users WHERE users_id='$id'");
	$row			=	mysql_fetch_array($datasiswa);
	}
?>

<?php 

	if (isset($_GET['kelas-edit'])) {
		$id 		=	$_GET['kelas-edit'];

		if (isset($_POST['kelas-update'])) {
			$nama 		=	$_POST['nama'];
			$wali 		=	$_POST['wali'];

			$kelas 		=	mysql_query("UPDATE kelas 
										SET `kelas_nama` = '$nama', `users_id` = '$wali'
										WHERE kelas_id = '$id'");

			if ($kelas) {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-green'>
						<div class='box-header bg-light-green'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
								<span class='text-white'>SUCCESS</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=kelas'>";
			}else {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-yellow'>
						<div class='box-header bg-light-yellow'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  fontello-warning'></i>
								<span class='text-white'>Warning</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=kelas'>";
			}	
		}
	$datakelas 		=	mysql_query("SELECT * FROM kelas WHERE kelas_id='$id'");
	$row			=	mysql_fetch_array($datakelas);
	}
?>

<?php 

	if (isset($_GET['jam-edit'])) {
		$id 		=	$_GET['jam-edit'];

		if (isset($_POST['jam-update'])) {
			$nama 		=	$_POST['nama'];

			$jam 		=	mysql_query("UPDATE jam 
										SET `jam_nama` = '$nama'
										WHERE jam_id = '$id'");

			if ($jam) {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-green'>
						<div class='box-header bg-light-green'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
								<span class='text-white'>SUCCESS</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=jam'>";
			}else {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-yellow'>
						<div class='box-header bg-light-yellow'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  fontello-warning'></i>
								<span class='text-white'>Warning</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=jam'>";
			}	
		}
	$datajam 		=	mysql_query("SELECT * FROM jam WHERE jam_id='$id'");
	$row			=	mysql_fetch_array($datajam);
	}
?>

<?php 

	if (isset($_GET['pelajaran-edit'])) {
		$id 		=	$_GET['pelajaran-edit'];

		if (isset($_POST['pelajaran-update'])) {
			$nama 		=	$_POST['nama'];

			$pelajaran 	=	mysql_query("UPDATE pelajaran 
										SET `pelajaran_nama` = '$nama'
										WHERE pelajaran_id = '$id'");

			if ($pelajaran) {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-green'>
						<div class='box-header bg-light-green'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
								<span class='text-white'>SUCCESS</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=pelajaran'>";
			}else {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-yellow'>
						<div class='box-header bg-light-yellow'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  fontello-warning'></i>
								<span class='text-white'>Warning</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=pelajaran'>";
			}	
		}
	$datapelajaran	=	mysql_query("SELECT * FROM pelajaran WHERE pelajaran_id='$id'");
	$row			=	mysql_fetch_array($datapelajaran);
	}
?>

<?php 

	if (isset($_GET['semester-edit'])) {
		$id 		=	$_GET['semester-edit'];

		if (isset($_POST['semester-update'])) {
			$nama 		=	$_POST['nama'];

			$semester 	=	mysql_query("UPDATE semester 
										SET `semester_nama` = '$nama'
										WHERE semester_id = '$id'");

			if ($semester) {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-green'>
						<div class='box-header bg-light-green'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
								<span class='text-white'>SUCCESS</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=semester'>";
			}else {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-yellow'>
						<div class='box-header bg-light-yellow'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  fontello-warning'></i>
								<span class='text-white'>Warning</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=semester'>";
			}	
		}
	$datasemester	=	mysql_query("SELECT * FROM semester WHERE semester_id='$id'");
	$row			=	mysql_fetch_array($datasemester);
	}
?>

<?php 

	if (isset($_GET['tahun-edit'])) {
		$id 		=	$_GET['tahun-edit'];

		if (isset($_POST['tahun-update'])) {
			$nama 		=	$_POST['nama'];

			$tahun 		=	mysql_query("UPDATE tahun 
										SET `tahun_nama` = '$nama'
										WHERE tahun_id = '$id'");

			if ($tahun) {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-green'>
						<div class='box-header bg-light-green'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
								<span class='text-white'>SUCCESS</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=tahun'>";
			}else {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-yellow'>
						<div class='box-header bg-light-yellow'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  fontello-warning'></i>
								<span class='text-white'>Warning</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=tahun'>";
			}	
		}
	$datatahun	=	mysql_query("SELECT * FROM tahun WHERE tahun_id='$id'");
	$row			=	mysql_fetch_array($datatahun);
	}
?>

<?php 

	if (isset($_GET['sekolah-edit'])) {
		$id 		=	$_GET['sekolah-edit'];

		if (isset($_POST['sekolah-update'])) {
			$nama 		=	$_POST['nama'];
			$telp 		=	$_POST['telp'];
			$alamat		=	$_POST['alamat'];
			$akreditasi	=	$_POST['akreditasi'];

			$sekolah 		=	mysql_query("UPDATE sekolah 
										SET `sekolah_nama` = '$nama', `sekolah_telp` = '$telp', `sekolah_alamat` = '$alamat', `sekolah_akreditasi` = '$akreditasi'
										WHERE sekolah_id = '$id'");

			if ($sekolah) {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-green'>
						<div class='box-header bg-light-green'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
								<span class='text-white'>SUCCESS</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=sekolah'>";
			}else {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-yellow'>
						<div class='box-header bg-light-yellow'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  fontello-warning'></i>
								<span class='text-white'>Warning</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?akademik=sekolah'>";
			}	
		}
	$datasekolah 		=	mysql_query("SELECT * FROM sekolah WHERE sekolah_id='$id'");
	$row				=	mysql_fetch_array($datasekolah);
	}
?>

<?php 

	if (isset($_GET['modul-edit'])) {
		$id 		=	$_GET['modul-edit'];

		if (isset($_POST['modul-update'])) {
			$allowed_ext    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
	        $file_name      = $_FILES['file']['name'];
	        $file_ext       = strtolower(end(explode('.', $file_name)));
	        $file_size      = $_FILES['file']['size'];
	        $file_tmp       = $_FILES['file']['tmp_name'];
	        
	        $nama           = $_POST['nama'];
	        $tgl            = date("Y-m-d");

			if(in_array($file_ext, $allowed_ext) === true){
	            if($file_size < 20440700){
	                $lokasi = 'files/'.$nama.'.'.$file_ext;
	                move_uploaded_file($file_tmp, $lokasi);
	                $in = mysql_query("UPDATE modul SET `tanggal_upload` = '$tgl', `nama_file` = '$nama', `tipe_file` = '$file_ext', `ukuran_file` = '$file_size', `file` = '$lokasi' WHERE id = '$id'");
	                if($in){
	                	echo "
							<div class='large-12 columns'>
								<div class='box bg-light-green'>
									<div class='box-header bg-light-green'>
										<div class='pull-right box-tools'>
											<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
										</div>
										<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
											<span class='text-white'>SUCCESS</span>
										</h3>
									</div>
									<div class='box-body ' style='display: block;'>
										<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
									</div>
								</div>
							</div>";
	                    echo "<meta http-equiv='refresh' content='0;URL= ?modul=download '/>";
	                }else{
	                    echo "
							<div class='large-12 columns'>
								<div class='box bg-light-yellow'>
									<div class='box-header bg-light-yellow'>
										<div class='pull-right box-tools'>
											<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
										</div>
										<h3 class='box-title '><i class='text-white  fontello-warning'></i>
											<span class='text-white'>Warning</span>
										</h3>
									</div>
									<div class='box-body ' style='display: block;'>
										<p class='text-white'><strong>Warning!</strong> Data Gagal Di Upload.</p>
									</div>
								</div>
							</div>";
	                }
	            }else{
	                echo "
					<div class='large-12 columns'>
						<div class='box bg-light-yellow'>
							<div class='box-header bg-light-yellow'>
								<div class='pull-right box-tools'>
									<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
								</div>
								<h3 class='box-title '><i class='text-white  fontello-warning'></i>
									<span class='text-white'>Warning</span>
								</h3>
							</div>
							<div class='box-body ' style='display: block;'>
								<p class='text-white'><strong>Warning!</strong> Ukuran File Terlalu Besar !</p>
							</div>
						</div>
					</div>";
	            }
	        }else{
	            echo "
					<div class='large-12 columns'>
						<div class='box bg-light-yellow'>
							<div class='box-header bg-light-yellow'>
								<div class='pull-right box-tools'>
									<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
								</div>
								<h3 class='box-title '><i class='text-white  fontello-warning'></i>
									<span class='text-white'>Warning</span>
								</h3>
							</div>
							<div class='box-body ' style='display: block;'>
								<p class='text-white'><strong>Warning!</strong> Tipe File Tidak Di Izinkan !</p>
							</div>
						</div>
					</div>";
	        }	
		}
	$datamodul	=	mysql_query("SELECT * FROM modul WHERE id='$id'");
	$row			=	mysql_fetch_array($datamodul);
	}
?>

<?php 

	if (isset($_GET['modul-validasi'])) {
		$id 		=	$_GET['modul-validasi'];

		if (isset($_POST['modul-validasi'])) {
			$status 		=	$_POST['status'];

			$modul 		=	mysql_query("UPDATE modul 
										SET `status` = '$status'
										WHERE id = '$id'");

			if ($modul) {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-green'>
						<div class='box-header bg-light-green'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
								<span class='text-white'>SUCCESS</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?modul=download'>";
			}else {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-yellow'>
						<div class='box-header bg-light-yellow'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  fontello-warning'></i>
								<span class='text-white'>Warning</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?modul=download'>";
			}	
		}
	$datamodul	=	mysql_query("SELECT * FROM modul WHERE id='$id'");
	$row			=	mysql_fetch_array($datamodul);
	}
?>

<?php 

	if (isset($_GET['jadwal-edit'])) {
		$id 		=	$_GET['jadwal-edit'];

		if (isset($_POST['jadwal-update'])) {
			$hari 		=	$_POST['hari'];
			$jam 		=	$_POST['jam'];
			$pelajaran  =	$_POST['pelajaran'];
			$kelas 		=	$_POST['kelas'];

			$jadwal 		=	mysql_query("UPDATE jadwal 
										SET `jadwal_hari` = '$hari', `jam_id` = '$jam', `pelajaran_id` = '$pelajaran', `kelas_id` = '$kelas'
										WHERE jadwal_id = '$id'");

			if ($jadwal) {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-green'>
						<div class='box-header bg-light-green'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  icon-thumbs-up'></i>
								<span class='text-white'>SUCCESS</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Well done!</strong> You successfully read this important alert message.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?jadwal=tampil'>";
			}else {
				echo "
				<div class='large-12 columns'>
					<div class='box bg-light-yellow'>
						<div class='box-header bg-light-yellow'>
							<div class='pull-right box-tools'>
								<span class='box-btn' data-widget='remove'><i class='icon-cross'></i></span>
							</div>
							<h3 class='box-title '><i class='text-white  fontello-warning'></i>
								<span class='text-white'>Warning</span>
							</h3>
						</div>
						<div class='box-body ' style='display: block;'>
							<p class='text-white'><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
						</div>
					</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1;URL=?jadwal=tampil'>";
			}	
		}
	$datajadwal	=	mysql_query("SELECT * FROM jadwal WHERE jadwal_id='$id'");
	$row			=	mysql_fetch_array($datajadwal);
	}
?>