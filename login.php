<!-- Begin Login Proses -->
<?php
	require_once 'config/db.php';
	//Login Proses
	if(isset($_POST['signin'])){
		$user 		= 	$_POST['username'];
		$pass 		= 	$_POST['password'];
		$hasil 		= 	mysql_query("SELECT * FROM users WHERE users_username='$user' AND users_password='$pass'");
		$data 		= 	mysql_fetch_array($hasil);
		$id 		= 	$data['users_id'];
		$username 	= 	$data['users_username'];
		$password 	= 	$data['users_password'];
		$nama 		= 	$data['users_nama'];
		$level 		= 	$data['users_level'];
		$kelas 		=	$data['kelas_id'];
		if($user==$username && $pass=$password){
			session_start();
			$_SESSION['id']			=	$id;
			$_SESSION['username']	=	$username;
			$_SESSION['nama']		=	$nama;
			$_SESSION['level']		=	$level;
			$_SESSION['kelas']		=	$kelas;

			header('Location: dashboard/');
		}else {
			header('Location: index.php');
		}
	}
?>
