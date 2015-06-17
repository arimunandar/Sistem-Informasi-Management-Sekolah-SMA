<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi Management Sekolah</title>

    <link rel="stylesheet" href="assets/css/foundation.css" />

    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dripicon.css">
    <link rel="stylesheet" href="assets/css/typicons.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/theme.css">

    <link href="assets/js/validate/validate.css" rel="stylesheet">
    <link href="assets/js/idealform/css/jquery.idealforms.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/js/date-dropdown/jquery.datetimepicker.css" />

    <!-- pace loader -->
    <script src="assets/js/pace/pace.js"></script>
    <link href="assets/js/pace/themes/orange/pace-theme-flash.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/js/slicknav/slicknav.css" />

    <link rel="stylesheet" href="assets/js/dropZone/downloads/css/dropzone.css" />
    <link href="assets/css/table.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/vendor/modernizr.js"></script>

</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- End of preloader -->

    <div class="off-canvas-wrap" data-offcanvas>
        <!-- Right sidemenu -->
            <div id="skin-select">
                <!--      Toggle sidemenu icon button -->
                <a id="toggle">
                    <span class="fa icon-menu"></span>
                </a>
                <!--      End of Toggle sidemenu icon button -->

                <div class="skin-part">
                    <div id="tree-wrap">
                        <!-- Profile -->
                        <div class="profile">
                            <img alt="" class="" src="img/logo.png">
                            <h3><a href="index.php" style="color:#ffffff;"><b>SIMS</b></a></h3>
                        </div>
                        <!-- End of Profile -->

                        <!-- Menu sidebar begin-->
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav slicknav">
                                <li>
                                        <a id="menu-select" class="tooltip-tip" href="../index.php" title="Dashboard">
                                            <i class="icon-home"></i>
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="tooltip-tip" href="#">
                                            <i class="icon-gear"></i>
                                            <span>
                                                <?php 
                                                    if (isset($_SESSION['nama'])) {
                                                        echo $_SESSION['nama'];
                                                     } 
                                                ?>
                                            </span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="../logout.php"><span class="fontello-power-outline"></span> Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php 
                                        if (isset($_SESSION['level'])) {
                                            if ($_SESSION['level'] == 'admin') {
                                    ?>
                                    <li>
                                        <a class="tooltip-tip" href="#">
                                            <i class="fontello-users"></i>
                                            <span>Users</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="?users=admin"><span class="fontello-user"></span> Admin</a>
                                            </li>
                                            <li>
                                                <a href="?users=guru"><span class="fontello-user"></span> Guru / Tata Usaha</a>
                                            </li>
                                            <li>
                                                <a href="?users=siswa"><span class="fontello-user"></span> Siswa</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="tooltip-tip" href="#">
                                            <i class="fontello-college"></i>
                                            <span>Akademik</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="?akademik=jam"><span class="fontello-clock"></span> Jam Pelajaran</a>
                                            </li>
                                            <li>
                                                <a href="?akademik=kelas"><span class="fontello-library"></span> Kelas</a>
                                            </li>
                                            <li>
                                                <a href="?akademik=semester"><span class="fontello-doc-text"></span> Semester</a>
                                            </li>
                                            <li>
                                                <a href="?akademik=tahun"><span class="fontello-globe-alt"></span> Tahun</a>
                                            </li>
                                            <li>
                                                <a href="?akademik=pelajaran"><span class="fontello-star-filled"></span> Mata Pelajaran</a>
                                            </li>
                                            <li>
                                                <a href="?akademik=sekolah"><span class="fontello-warehouse"></span> Sekolah</a>
                                            </li>
                                            <li>
                                                <a href="?akademik=galeri"><span class="fontello-camera"></span> Galeri</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="tooltip-tip" href="#" title="Mail">
                                            <i class="fontello-print"></i>
                                            <span>Modul</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="?modul=upload" title="Black Skin"><span class="fontello-upload"></span> Upload</a>
                                            </li>
                                            <li>
                                                <a href="?modul=download" title="White Skin"><span class="fontello-download"></span> Download</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="tooltip-tip" href="#" title="Mail">
                                            <i class="fontello-calendar"></i>
                                            <span>Jadwal Pelajaran</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="?jadwal=tambah" title="Black Skin"><span class="fontello-plus"></span> Tambah Jadwal</a>
                                            </li>
                                            <li>
                                                <a href="?jadwal=tampil" title="Black Skin"><span class="fontello-search"></span> Tampil Jadwal</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php
                                            }elseif ($_SESSION['level'] == 'guru') {
                                    ?>
                                    <li>
                                        <a class="tooltip-tip" href="#" title="Mail">
                                            <i class="fontello-print"></i>
                                            <span>Modul</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="?modul=upload" title="Black Skin"><span class="fontello-upload"></span> Upload</a>
                                            </li>
                                            <li>
                                                <a href="?modul=download" title="White Skin"><span class="fontello-download"></span> Download</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="tooltip-tip" href="#" title="Mail">
                                            <i class="fontello-calendar"></i>
                                            <span>Jadwal Pelajaran</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="?jadwal=tampil" title="Black Skin"><span class="fontello-upload"></span> Tampil Jadwal</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php
                                            }elseif ($_SESSION['level'] == 'siswa') {
                                    ?>
                                    <li>
                                        <a class="tooltip-tip" href="#" title="Mail">
                                            <i class="fontello-calendar"></i>
                                            <span>Jadwal Pelajaran</span>
                                        </a>
                                        <ul>                                            
                                            <li>
                                                <a href="?jadwal=tampil" title="Black Skin"><span class="fontello-search"></span> Tampil Jadwal</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php
                                            }
                                        }
                                    ?>
                            </ul>
                        </div>
                        <!-- end of Menu sidebar  -->
                        <ul class="bottom-list-menu">
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of Rightsidemenu -->