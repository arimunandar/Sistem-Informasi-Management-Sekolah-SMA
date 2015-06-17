<?php 
	if (isset($_GET['users'])) {
		if ($_GET['users'] == 'admin') {
			include 'model/admin.php';
		}elseif ($_GET['users'] == 'admin-create') {
			include 'controller/create.php';
			include 'view/admin_create.php';
		}elseif ($_GET['users'] == 'guru') {
			include 'model/guru.php';
		}elseif ($_GET['users'] == 'guru-create') {	
			include 'controller/create.php';
			include 'view/guru_create.php';
		}elseif ($_GET['users'] == 'siswa') {
			include 'model/siswa.php';
		}elseif ($_GET['users'] == 'siswa-create') {
			include 'controller/create.php';
			include 'view/siswa_create.php';
		}
	}elseif (isset($_GET['admin-edit'])) {		
		include 'controller/edit.php';
		include 'view/admin_edit.php';
	}elseif (isset($_GET['admin-delete'])) {
		include 'controller/delete.php';
	}elseif (isset($_GET['guru-edit'])) {
		include 'controller/edit.php';
		include 'view/guru_edit.php';
	}elseif (isset($_GET['guru-delete'])) {
		include 'controller/delete.php';
	}elseif (isset($_GET['siswa-edit'])) {
		include 'controller/edit.php';
		include 'view/siswa_edit.php';
	}elseif (isset($_GET['siswa-delete'])) {
		include 'controller/delete.php';
	}elseif (isset($_GET['akademik'])) {
		if ($_GET['akademik'] == 'kelas') {
			include 'model/kelas.php';
		}elseif ($_GET['akademik'] == 'kelas-create') {
			include 'controller/create.php';
			include 'view/kelas_create.php';
		}elseif ($_GET['akademik'] == 'semester') {
			include 'model/semester.php';
		}elseif ($_GET['akademik'] == 'semester-create') {
			include 'controller/create.php';
			include 'view/semester_create.php';
		}elseif ($_GET['akademik'] == 'tahun') {
			include 'model/tahun.php';
		}elseif ($_GET['akademik'] == 'tahun-create') {
			include 'controller/create.php';
			include 'view/tahun_create.php';
		}elseif ($_GET['akademik'] == 'pelajaran') {
			include 'model/pelajaran.php';
		}elseif ($_GET['akademik'] == 'pelajaran-create') {
			include 'controller/create.php';
			include 'view/pelajaran_create.php';
		}elseif ($_GET['akademik'] == 'sekolah') {
			include 'model/sekolah.php';
		}elseif ($_GET['akademik'] == 'sekolah-create') {
			include 'controller/create.php';
			include 'view/sekolah_create.php';
		}elseif ($_GET['akademik'] == 'galeri') {
			include 'model/galeri.php';
		}elseif ($_GET['akademik'] == 'galeri-create') {
			include 'controller/create.php';
			include 'view/galeri_create.php';
		}elseif ($_GET['akademik'] == 'jam') {
			include 'model/jam.php';
		}elseif ($_GET['akademik'] == 'jam-create') {
			include 'controller/create.php';
			include 'view/jam_create.php';
		}
	}elseif (isset($_GET['jam-edit'])) {
		include 'controller/edit.php';
		include 'view/jam_edit.php';
	}elseif (isset($_GET['jam-delete'])) {
		include 'controller/delete.php';
	}elseif (isset($_GET['kelas-edit'])) {
		include 'controller/edit.php';
		include 'view/kelas_edit.php';
	}elseif (isset($_GET['kelas-delete'])) {
		include 'controller/delete.php';
	}elseif (isset($_GET['semester-edit'])) {
		include 'controller/edit.php';
		include 'view/semester_edit.php';
	}elseif (isset($_GET['semester-delete'])) {
		include 'controller/delete.php';
	}elseif (isset($_GET['tahun-edit'])) {
		include 'controller/edit.php';
		include 'view/tahun_edit.php';
	}elseif (isset($_GET['tahun-delete'])) {
		include 'controller/delete.php';
	}elseif (isset($_GET['pelajaran-edit'])) {
		include 'controller/edit.php';
		include 'view/pelajaran_edit.php';
	}elseif (isset($_GET['pelajaran-delete'])) {
		include 'controller/delete.php';
	}elseif (isset($_GET['sekolah-edit'])) {
		include 'controller/edit.php';
		include 'view/sekolah_edit.php';
	}elseif (isset($_GET['sekolah-delete'])) {
		include 'controller/delete.php';
	}elseif (isset($_GET['galeri-delete'])) {
		include 'controller/delete.php';
	}elseif (isset($_GET['modul'])) {
		if ($_GET['modul'] == 'download') {
			include 'model/download.php';
		}elseif ($_GET['modul'] == 'upload') {
			include 'controller/create.php';
			include 'view/upload.php';
		}
	}elseif (isset($_GET['modul-edit'])) {
		include 'controller/edit.php';
		include 'view/modul_edit.php';
	}elseif (isset($_GET['modul-validasi'])) {
		include 'controller/edit.php';
		include 'view/modul_validasi.php';
	}elseif (isset($_GET['modul-delete'])) {
		include 'controller/delete.php';
	}elseif (isset($_GET['jadwal'])) {
		if ($_GET['jadwal'] == 'tampil') {
			include('view/jadwal_search.php');
		}elseif ($_GET['jadwal'] == 'tambah') {
			include 'controller/create.php';
			include('view/jadwal_create.php');
		}
	}elseif (isset($_GET['jadwal-edit'])) {
		include 'controller/edit.php';
		include 'view/jadwal_edit.php';
	}elseif (isset($_GET['jadwal-delete'])) {
		include 'controller/delete.php';
	}
?>