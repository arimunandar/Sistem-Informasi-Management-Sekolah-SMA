<?php 

	session_start();
	require_once 'config/db.php';
	require_once 'layout/header.php'; 

?>
<!-- begin intro section -->
<section class="intro" id="intro">

	<!-- begin intro-slider -->
	<div class="intro-slider">

		<!-- begin single slide -->
		<div class="item one">

			<div class="container">

				<div class="row">

					<div class="col-md-12">												
						
						<?php 
							if (!isset($_SESSION['username'])) {
						?>
						<!-- begin logo=
						<img src="assets/images/lamap_logo.png" class="logo" alt="logo">
						end logo  -->
						<h2>Sistem Informasi Management Sekolah</h2><br>
						<h3>SMA N 1 Solok Selatan</h3>
						<ul class="list-inline" style="padding-top:30px;">
							<li>
								<a href="#download" class="btn btn-custom">
									<i class="fa fa-user"></i>
									Please Sign In !
								</a>
							</li>
						</ul>
						<?php
							}else {
						?>
						<h1>
							<?php echo "I'm {$_SESSION['nama']}"; ?> | <a href="logout.php"><i class="fa fa-power-off"></i></a>
						</h1>
						<ul class="list-inline">
							<li>
								<h3>
									<a href="dashboard/" class="btn btn-send">
										<i class="fa fa-window"></i>
										Go To Dashboard !
									</a>									
								</h3>
							</li>
						</ul>
						<?php
							}
						?>

					</div>
				</div>
			</div>
		</div>
		<!-- end single slide -->
	</div>
	<!-- end intro slider -->
	
</section>
<!-- end intro section -->

<!-- begin reviews section -->
<section class="reviews" id="reviews">
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				<div class="section-head wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
					<h1>List Of Teachers</h1>
					<p>We Are a Good Teacher Ever</p>
					<span class="underline"></span>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="testemonials wow fadeInUp animated" data-wow-offset="10" data-wow-duration="1s">

				<?php 
					$foto 		=	mysql_query("SELECT * FROM users WHERE users_level='guru'");

					while ($data=mysql_fetch_array($foto)) {
				?>
				<!-- begin single testomial item -->
				<div class="testemonial">
					<div class="col-md-5 client-data">
						<div class="client-image">
							<img src="dashboard/<?php echo $data['users_foto']; ?>" alt="client" width="150px" height="150px">
						</div>
						<div class="client-name">
							<h4><?php echo $data['users_nama']; ?></h4>
							<p><?php echo $data['users_noinduk']; ?></p>
						</div>
					</div>
					<div class="col-md-7 col-sm-12">
						<div class="client-quote">
							<p>
								<table>
									<tr style="color:#ffffff;">
										<td width="100px">Address</td>
										<td width="30px">:</td>
										<td><?php echo $data['users_alamat']; ?></td>
									</tr>
								</table>
							</p>
							<p>
								<table>
									<tr style="color:#ffffff;">
										<td width="100px">Phone</td>
										<td width="30px">:</td>
										<td><?php echo $data['users_telp']; ?></td>
									</tr>
								</table>
							</p>
						</div>
					</div>
				</div>
				<!-- end single testomial item -->
				<?php
					}
				?>

			</div>
		</div>

	</div>	
</section>
<!-- end reviews section -->

<!-- begin screenshots section -->
<section class="screenshots" id="screenshots">
	
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				<div class="section-head wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
					<h1>Gallery Of School</h1>
					<p>Best Moment Of school</p>
					<span class="underline"></span>
				</div>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-12">
				
				<div class="screens wow bounceIn animated" data-wow-offset="10" data-wow-duration="1.5s">
					<?php 
						$galeri 	=	mysql_query("SELECT * FROM galeri");

						while ($data=mysql_fetch_array($galeri)) {
					?>
					<!-- begin single screenshot -->
					<div class="screen">
						<a href="dashboard/<?php echo $data['galeri_link']; ?>" data-lightbox-gallery="screens">
							<img src="dashboard/<?php echo $data['galeri_link']; ?>" alt="screenshot" width="270px" height="400px">
							<span class="hover-screen">
								<i class="fa fa-search"></i>
							</span>
						</a>
					</div>
					<!-- end single screenshot -->
					<?php
						}
					?>					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end screenshots section -->

<!-- begin extra section -->
<section class="extra" id="extra">
	<div class="container">

		<div class="row">
			<div class="col-md-12 tabs">
				
				<!-- begin tab pane nav tabs -->
				<ul class="nav nav-tabs wow fadeInUp animated" role="tablist">
					<li class="active">
						<a href="#first-tab" role="tab" data-toggle="tab">
							<i class="fa fa-cog"></i>
							History
						</a>
					</li>
					<li>
						<a href="#second-tab" role="tab" data-toggle="tab">
							<i class="fa fa-cloud"></i>
							Vision
						</a>
					</li>
					<li>
						<a href="#third-tab" role="tab" data-toggle="tab">
							<i class="fa fa-refresh"></i>
							Mision
						</a>
					</li>
				</ul>
				<!-- end tab pane nav tabs -->

			</div>
		</div>
		
		<div class="row">
			
			<div class="tab-content">
				
				<!-- begin first tab content -->
				<div class="tab-pane fade in active" id="first-tab">
					
					<div class="col-md-12">
						<div class="wow fadeInRight animated" data-wow-offset="12" data-wow-duration="1.5s">

							<p>

								&emsp;&emsp;&emsp;&emsp;&emsp; SMA Negeri 1 Solok Selatan berdiri di tanah seluas 9520 m2 dengan jumlah siswa terbanyak hingga pernah mencapai 1060 orang serta mempunyai sarana terlengkap di seluruh sekolah yang ada di Kabupaten Solok Selatan ini.
								SMA Negeri 1 Solok Selatan ini merupakan sekolah tertua di Kabupaten Solok sebelum pemekaran Kabupaten Solok Selatan .Pada tahun 1977 masih bernama SMA Filial Tanah Garam di Muaro Labuah .SMA Tanah Garam ini kita kenal sekarang dengan sebutan SMA 1 Kodya Solok.Perkembangan SMA Negeri 1 Solok Selatan dimulai dengan dibukanya sekolah filial yang bertempat di gedung SMP Negeri 1 Solok Selatan sekarang.
								Pada awalnya siswa diterima dengan jumlah 148 orang yang menempati 4 lokal belajar dimana kegiatan belajarnya dilaksanakan pada sing hari yakni dimulai pukul 13.00 WIB sampai pukul 17.00 WIB.Kepala Sekolah dirangkap oleh Kepala SMP Negeri 1 Solok Selatan saat itu yakni Bapak Firdaus ,B.A dengan guru Pegawai Negeri pertama nya adalah Ibu Nurhaida ,B.A yang mengajar Bahasa Indonesia ,sementara pegawai Tata Usaha pertamanya adalah Bapak Tabrani Sutan Pamenan
								. <br><br>&emsp;&emsp;&emsp;&emsp;&emsp; Kekurangan guru pada waktu itu dibantu oleh guru SMP Negeri 1,SMP Negeri 2 Solok Selatan ,PGA ( Pendidikan Guru agama) ,Guru ST (Sekolah Teknik) di Solok Selatan karena pada waktu itu hanya sekolah yang kita sebutkan tadilah yang ada di Muaro Labuah sebagai sekolah yang tingkatannya tertinggi.
								Melalui perjuangan panjang tokoh masyarakat Muaro Labuah akhirnya pada tahun 1978 berdiri SMA Muaro Labuah yang berlokasi disekolah sekarang ini dengan jumlah bangunan 4 ruang local ,1 ruang majelis guru ,1 ruang tatausaha, dan 1 runag Kepala Sekolah dengan fasilitas yang jauh dari memadai.
								<br><br>&emsp;&emsp;&emsp;&emsp;&emsp;Melalui surat keputusan Kantor Wilayah Departemen Pendidikan Dan Kebudayaan No.8433/08.1.1/R-1978 tanggal 11 September 1978 diresmikanlah SMA Muaro labuah menjadi Sekolah Menengah Atas Negeri Muaro Labuah oleh Bapak Kanwil Dinas Pendidikan Dan Kebudayaan bersama Bupati Solok waktu itu yakni Bapak Mayor TNI Zahlul Datuak Sutan Kebesaran dengan Kepala sekolahnya Bapak Ibnu Abbas,H.S.
								Masa keemasan SMA Negeri Muaro Labuah ini mencapai puncaknya pada tahun 1986 dengan jumlah siswa seribu lebih yang berasal dari berbagai daerah yang ada di kabupaten Solok saat itu antara lain dari daerah:
								<br><br>
								&emsp;&emsp;&emsp;&emsp;&emsp;1. Sumani<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;2. Selayo<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;3. Alahan Panjang<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;4. Surian<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;5. Muara Labuh<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;6. Sangir ( Lubuk Gadang, Lubuk Malako,Bidar Alam,Abai Lubuk 
								Ulang Aliang) <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Pada masa ini SMA 1 Muaro Labuah dipimpin oleh Bapak Lukman Rasul S.H.
								<br><br>
								&emsp;&emsp;&emsp;&emsp;&emsp;Siswa lulusan pertama SMA Negeri Muaro Labuah pada tahun 1980 dengan jumlah lulusan sebanyak 138 orang yang berasal dari dua jurusan yaitu jurusan IPA dan jurusan IPS .Pada saat ini belum ada tamatan SMA Negeri Muaro Labuah yang menembus jalur PMDK di Perguruan Tinggi Negeri yang ada di Sumatera Barat,namun menurut catatan terakhir yang kami himpun hamper 40 orang tamatan melanjutkan ke Perguruan Tinggi yang umumnya adalah Perguruan Tinggi Pendidikan Guru.
								Jalur PMDK dapat ditembus oleh siswa Sma Negeri Muaro labuah pada tahun 1982 atas n nama Lailan Mardiah (IPB), Syafriadi (ITB), 3 (tiga ) orang untuk UNAND , 5 orang untuk IKIP.
								Berikut adalah urutan Kepala Sekolah SMA Negeri 1 Solok Selatan dari tahun 1978 sampai sekarang :
								<br><br>
								&emsp;&emsp;&emsp;&emsp;&emsp;1.Ibnu Abbas,HS. ( 1977-1980)<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;2.Lukman Rasul,SH. (1980-1993)<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;3.Drs.Syahrijal (1993-1995)<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;4.Drs.Darianto (1995-2000)<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;5.Drs.Adsyamhardi ( 2000- 2003)<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;6.Siswanweri ( Agustus 2002- Februari 2003)<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;7.Drs.Erwin Maxtono (2003-2006)<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;8.Budiman,S.Pd ,MM ( 9 Agustus 2006- 16 Agustus 2008)<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;9.Ridwan,S.Pd,MM (16 Agustus 2008- 2012)<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;11.RIFDANIL SPD, MM (2013-SAMPAI SEKARANG)<br>

							</p>
							<p></p>	
						</div>
					</div>
				</div>
				<!-- end first tab content -->
				<!-- begin third tab content -->
				<div class="tab-pane fade in" id="second-tab">
					<div class="col-md-12">
						<div class="fadeInRight animated" data-wow-duration="1.5s">
							<p align="center">
								<h4 align="center">Lulusan yang Beriman dan Berakhlakqul karimah memiliki Prestasi Akademik dan Keterampilan</h4>
							</p>
						</div>
					</div>
				</div>
				<!-- end third tab content -->
				<!-- begin third tab content -->
				<div class="tab-pane fade in" id="third-tab">
					<div class="col-md-12">
						<div class="fadeInRight animated" data-wow-duration="1.5s">
							<p>
								1. Meningkatkan sikap Mental Spiritual yang Beriman dan Bertakwa. <br> 
								2. Menumbuhkan suasana dan kondisi Sekolah yang Kondusif.<br> 
								3. Melaksanakan Pembelajaran dan Bimbingan secara efektif dan Efisien sehingga setiap Siswa berkembang secara Optimal sesuai dengan potensi yang dimiliki.<br>
								4. Menyajikan Pendidikan yang Berkualitas,Kreatif,Inovatif,Berorientasi pada Iptek. <br>
								5. Melaksanakan Kegiatan Ekstra Kurikuler dan pengembangan diri sesuai dengan Potensi yang dimiliki. <br>
								6. Membudayakan sikap disiplin,melalui kebiasaan-kebiasaan hidup disekolah. <br>
								7. Menjalin Komunikasi yang baik dengan Lingkungan Sekolah,Orang Tua dan Komite Sekolah.<br>
							</p>
						</div>
					</div>
				</div>
				<!-- end third tab content -->

			</div>
		</div>
		
	</div>
</section>
<!-- end extra section -->

<?php 
	if (!isset($_SESSION['username'])) {
?>
<!-- begin download section -->
<section class="download" id="download">
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				<div class="section-head wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
					<h1>Please Sign In !</h1>
					<span class="underline"></span>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<form method="post" action="login.php" role="form">
						<div class="form-group">
							<input type="text" name="username" style="height:60px;width:100%;font-size:20px;color:#ffffff;" class="video form-control" placeholder="Please Enter Username" required>
						</div>
						<div class="form-group">
							<input type="password" name="password" style="height:60px;width:100%;font-size:20px;color:#ffffff;" class="video form-control" placeholder="Please Enter Username" required>
						</div>
						<div class="form-group">
							<button type="submit" name="signin" style="width:100%;font-size:20px;" class="btn btn-custume">Sign In</button>
						</div>
					</form>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
		
	</div>
</section>
<!-- end download section -->
<?php
	}
?>

<?php require_once'layout/footer.php'; ?>