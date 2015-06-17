<?php 
	
	if (isset($_POST['admin-create'])) {
		$nama 		=	$_POST['nama'];
		$username	=	$_POST['username'];
		$password 	=	$_POST['password'];
		$email 		=	$_POST['email'];
		$telp 		=	$_POST['telp'];
		$alamat 	=	$_POST['alamat'];
		$status 	=	$_POST['status'];
		$folder 	= 	'foto';
        $tmp_name 	= 	$_FILES["foto"]["tmp_name"];
        $link 		= 	$folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$admin 		=	mysql_query("INSERT INTO users (`users_id`, `users_noinduk`, `users_nama`, 
									`users_username`, `users_password`, `users_level`, `users_telp`, `users_alamat`, 
									`users_email`, `users_status`, `users_foto`, `kelas_id`) 
									VALUES (NULL, NULL, '$nama', '$username', '$password', 'admin', '$telp', '$alamat', '$email', '$status', '$link', NULL)");

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
?>

<?php 
	
	if (isset($_POST['guru-create'])) {
		$noinduk 	=	$_POST['noinduk'];
		$nama 		=	$_POST['nama'];
		$username	=	$_POST['username'];
		$password 	=	$_POST['password'];
		$email 		=	$_POST['email'];
		$telp 		=	$_POST['telp'];
		$alamat 	=	$_POST['alamat'];
		$status 	=	$_POST['status'];
		$folder 	= 	'foto';
        $tmp_name 	= 	$_FILES["foto"]["tmp_name"];
        $link 		= 	$folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$guru 		=	mysql_query("INSERT INTO users (`users_id`, `users_noinduk`, `users_nama`, 
									`users_username`, `users_password`, `users_level`, `users_telp`, `users_alamat`, 
									`users_email`, `users_status`, `users_foto`, `kelas_id`) 
									VALUES (NULL, '$noinduk', '$nama', '$username', '$password', 'guru', '$telp', '$alamat', '$email', '$status', '$link', NULL)");

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
?>

<?php 
	
	if (isset($_POST['siswa-create'])) {
		$noinduk 	=	$_POST['noinduk'];
		$nama 		=	$_POST['nama'];
		$username	=	$_POST['username'];
		$password 	=	$_POST['password'];
		$email 		=	$_POST['email'];
		$telp 		=	$_POST['telp'];
		$alamat 	=	$_POST['alamat'];
		$status 	=	$_POST['status'];
		$kelas 	 	=	$_POST['kelas'];
		$folder 	= 	'foto';
        $tmp_name 	= 	$_FILES["foto"]["tmp_name"];
        $link 		= 	$folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$siswa 		=	mysql_query("INSERT INTO users (`users_id`, `users_noinduk`, `users_nama`, 
									`users_username`, `users_password`, `users_level`, `users_telp`, `users_alamat`, 
									`users_email`, `users_status`, `users_foto`, `kelas_id`) 
									VALUES (NULL, '$noinduk', '$nama', '$username', '$password', 'siswa', '$telp', '$alamat', '$email', '$status', '$link', '$kelas')");

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
?>

<?php 
	
	if (isset($_POST['kelas-create'])) {
		$nama 		=	$_POST['nama'];
		$wali 		=	$_POST['wali'];

		$kelas 		=	mysql_query("INSERT INTO kelas (`kelas_id`, `kelas_nama`, `users_id`) 
									VALUES (NULL, '$nama', '$wali')");

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
?>

<?php 
	
	if (isset($_POST['jam-create'])) {
		$nama 		=	$_POST['nama'];

		$jam 		=	mysql_query("INSERT INTO jam (`jam_id`, `jam_nama`) 
									VALUES (NULL, '$nama')");

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
?>

<?php 
	
	if (isset($_POST['pelajaran-create'])) {
		$nama 		=	$_POST['nama'];

		$pelajaran 	=	mysql_query("INSERT INTO pelajaran (`pelajaran_id`, `pelajaran_nama`) 
									VALUES (NULL, '$nama')");

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
?>

<?php 
	
	if (isset($_POST['semester-create'])) {
		$nama 		=	$_POST['nama'];

		$semester 	=	mysql_query("INSERT INTO semester (`semester_id`, `semester_nama`) 
									VALUES (NULL, '$nama')");

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
?>

<?php 
	
	if (isset($_POST['tahun-create'])) {
		$nama 		=	$_POST['nama'];

		$tahun 	 	=	mysql_query("INSERT INTO tahun (`tahun_id`, `tahun_nama`) 
									VALUES (NULL, '$nama')");

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
?>

<?php 
	
	if (isset($_POST['sekolah-create'])) {
		$nama 		=	$_POST['nama'];
		$telp 		=	$_POST['telp'];
		$alamat		=	$_POST['alamat'];
		$akreditasi	=	$_POST['akreditasi'];

		$sekolah	=	mysql_query("INSERT INTO sekolah (`sekolah_id`, `sekolah_nama`, `sekolah_telp`, `sekolah_alamat`, `sekolah_akreditasi`) 
									VALUES (NULL, '$nama', '$telp', '$alamat', '$akreditasi')");

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
?>

<?php 
	//Upload Modul
	if(isset($_POST['upload'])){
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
                $in = mysql_query("INSERT INTO modul VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi', 'Belum Valid')");
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
?>

<?php 
	
	if (isset($_POST['jadwal-create'])) {
		$hari 		=	$_POST['hari'];
		$jam 		=	$_POST['jam'];
		$pelajaran  =	$_POST['pelajaran'];
		$kelas 		=	$_POST['kelas'];

		$jadwal 	=	mysql_query("INSERT INTO jadwal (`jadwal_id`, `jadwal_hari`, `jam_id`, `pelajaran_id`, `kelas_id`) 
									VALUES (NULL, '$hari', '$jam', '$pelajaran', '$kelas')");

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
			echo "<meta http-equiv='refresh' content='1;URL=?jadwal=tambah'>";
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
			echo "<meta http-equiv='refresh' content='1;URL=?jadwal=tambah'>";
		}
	}
?>

<?php 
	
	if (isset($_POST['galeri-create'])) {
		$nama 		=	$_POST['nama'];
		$folder 	= 	'galeri';
        $tmp_name 	= 	$_FILES["foto"]["tmp_name"];
        $link 		= 	$folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$galeri 		=	mysql_query("INSERT INTO galeri (`galeri_id`, `galeri_nama`, `galeri_link`) 
									VALUES (NULL, '$nama', '$link')");

		if ($galeri) {
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
			echo "<meta http-equiv='refresh' content='1;URL=?akademik=galeri'>";
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
			echo "<meta http-equiv='refresh' content='1;URL=?akademik=galeri'>";
		}
	}
?>