<div class="large-12 columns">
    <div class="box">
        <div class="box-header bg-transparent">
            <!-- tools box -->
            <div class="pull-right box-tools">

                <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                </span>
                <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                </span>
            </div>
            <h3 class="box-title"><i class="fontello-th-large-outline"></i>
                <span>Data Jadwal Pelajaran</span>
            </h3>
        </div>

        <!-- /.box-header -->

        <?php 
            if (isset($_POST['cari-kelas'])) {                
                $kelas      =   $_POST['kelas'];
        ?>
        <div class="box-body " style="display: block;">
            <table id="example1" class="display" style="width:100%">
                <thead>
                    <tr>
                        <td colspan="4"><center>SENIN</center></td>
                    </tr>   
                    <tr>
                        <th width="3%">No</th>
                        <th>Jam</th>
                        <th>Mata Pelajaran</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>

                <tbody>
        <?php
                $no1        =   1;
                $jadwal     =   mysql_query("SELECT jadwal.jadwal_id, jadwal.jadwal_hari, jam.jam_nama, pelajaran.pelajaran_nama, kelas.kelas_nama
                                                FROM jadwal
                                                INNER JOIN jam ON jadwal.jam_id=jam.jam_id
                                                INNER JOIN pelajaran ON jadwal.pelajaran_id=pelajaran.pelajaran_id
                                                INNER JOIN kelas ON jadwal.kelas_id=kelas.kelas_id
                                                WHERE kelas.kelas_id='$kelas' AND jadwal_hari='Senin'
                                                ORDER BY jam.jam_nama ASC");
                while ($row=mysql_fetch_array($jadwal)) {
        ?>
                    <tr>
                        <td><?php echo $no1; ?></td>
                        <td><?php echo $row['jam_nama']; ?></td>
                        <td><?php echo $row['pelajaran_nama']; ?></td>
                        <td>
                            <a href="?jadwal-edit=<?php echo $row['jadwal_id']; ?>"><span class="fontello-edit"></span> Edit</a>
                            <a href="?jadwal-delete=<?php echo $row['jadwal_id']; ?>"><span class="fontello-trash"></span> Delete</a>
                        </td>
                    </tr>                    
        <?php
                $no1++;
                }
        ?>                    
                </tbody>
            </table>
        </div>
        <div class="box-body " style="display: block;">
            <table id="example2" class="display" style="width:100%">
                <thead>
                    <tr>
                        <td colspan="4"><center>SELASA</center></td>
                    </tr>
                    <tr>
                        <th width="3%">No</th>
                        <th>Jam</th>
                        <th>Mata Pelajaran</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>

                <tbody>
        <?php
                $no2        =   1;
                $jadwal     =   mysql_query("SELECT jadwal.jadwal_id, jadwal.jadwal_hari, jam.jam_nama, pelajaran.pelajaran_nama, kelas.kelas_nama
                                                FROM jadwal
                                                INNER JOIN jam ON jadwal.jam_id=jam.jam_id
                                                INNER JOIN pelajaran ON jadwal.pelajaran_id=pelajaran.pelajaran_id
                                                INNER JOIN kelas ON jadwal.kelas_id=kelas.kelas_id
                                                WHERE kelas.kelas_id='$kelas' AND jadwal_hari='Selasa'
                                                ORDER BY jam.jam_nama ASC");
                while ($row=mysql_fetch_array($jadwal)) {
        ?>
                    <tr>
                        <td><?php echo $no2; ?></td>
                        <td><?php echo $row['jam_nama']; ?></td>
                        <td><?php echo $row['pelajaran_nama']; ?></td>
                        <td>
                            <a href="?jadwal-edit=<?php echo $row['jadwal_id']; ?>"><span class="fontello-edit"></span> Edit</a>
                            <a href="?jadwal-delete=<?php echo $row['jadwal_id']; ?>"><span class="fontello-trash"></span> Delete</a>
                        </td>
                    </tr>                    
        <?php
                $no2++;
                }
        ?>                    
                </tbody>
            </table>
        </div>
        <div class="box-body " style="display: block;">
            <table id="example3" class="display" style="width:100%">
                <thead>
                    <tr>
                        <td colspan="4"><center>RABU</center></td>
                    </tr>
                    <tr>
                        <th width="3%">No</th>
                        <th>Jam</th>
                        <th>Mata Pelajaran</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>

                <tbody>
        <?php
                $no3        =   1;
                $jadwal     =   mysql_query("SELECT jadwal.jadwal_id, jadwal.jadwal_hari, jam.jam_nama, pelajaran.pelajaran_nama, kelas.kelas_nama
                                                FROM jadwal
                                                INNER JOIN jam ON jadwal.jam_id=jam.jam_id
                                                INNER JOIN pelajaran ON jadwal.pelajaran_id=pelajaran.pelajaran_id
                                                INNER JOIN kelas ON jadwal.kelas_id=kelas.kelas_id
                                                WHERE kelas.kelas_id='$kelas' AND jadwal_hari='Rabu'
                                                ORDER BY jam.jam_nama ASC");
                while ($row=mysql_fetch_array($jadwal)) {
        ?>
                    <tr>
                        <td><?php echo $no2; ?></td>
                        <td><?php echo $row['jam_nama']; ?></td>
                        <td><?php echo $row['pelajaran_nama']; ?></td>
                        <td>
                            <a href="?jadwal-edit=<?php echo $row['jadwal_id']; ?>"><span class="fontello-edit"></span> Edit</a>
                            <a href="?jadwal-delete=<?php echo $row['jadwal_id']; ?>"><span class="fontello-trash"></span> Delete</a>
                        </td>
                    </tr>                    
        <?php
                $no3++;
                }
        ?>                    
                </tbody>
            </table>
        </div>
        <div class="box-body " style="display: block;">
            <table id="example4" class="display" style="width:100%">
                <thead>
                    <tr>
                        <td colspan="4"><center>Kamis</center></td>
                    </tr>
                    <tr>
                        <th width="3%">No</th>
                        <th>Jam</th>
                        <th>Mata Pelajaran</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>

                <tbody>
        <?php
                $no4        =   1;
                $jadwal     =   mysql_query("SELECT jadwal.jadwal_id, jadwal.jadwal_hari, jam.jam_nama, pelajaran.pelajaran_nama, kelas.kelas_nama
                                                FROM jadwal
                                                INNER JOIN jam ON jadwal.jam_id=jam.jam_id
                                                INNER JOIN pelajaran ON jadwal.pelajaran_id=pelajaran.pelajaran_id
                                                INNER JOIN kelas ON jadwal.kelas_id=kelas.kelas_id
                                                WHERE kelas.kelas_id='$kelas' AND jadwal_hari='Kamis'
                                                ORDER BY jam.jam_nama ASC");
                while ($row=mysql_fetch_array($jadwal)) {
        ?>
                    <tr>
                        <td><?php echo $no2; ?></td>
                        <td><?php echo $row['jam_nama']; ?></td>
                        <td><?php echo $row['pelajaran_nama']; ?></td>
                        <td>
                            <a href="?jadwal-edit=<?php echo $row['jadwal_id']; ?>"><span class="fontello-edit"></span> Edit</a>
                            <a href="?jadwal-delete=<?php echo $row['jadwal_id']; ?>"><span class="fontello-trash"></span> Delete</a>
                        </td>
                    </tr>                    
        <?php
                $no4++;
                }
        ?>                    
                </tbody>
            </table>
        </div>
        <div class="box-body " style="display: block;">
            <table id="example5" class="display" style="width:100%">
                <thead>
                    <tr>
                        <td colspan="4"><center>JUMAT</center></td>
                    </tr>
                    <tr>
                        <th width="3%">No</th>
                        <th>Jam</th>
                        <th>Mata Pelajaran</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>

                <tbody>
        <?php
                $no5        =   1;
                $jadwal     =   mysql_query("SELECT jadwal.jadwal_id, jadwal.jadwal_hari, jam.jam_nama, pelajaran.pelajaran_nama, kelas.kelas_nama
                                                FROM jadwal
                                                INNER JOIN jam ON jadwal.jam_id=jam.jam_id
                                                INNER JOIN pelajaran ON jadwal.pelajaran_id=pelajaran.pelajaran_id
                                                INNER JOIN kelas ON jadwal.kelas_id=kelas.kelas_id
                                                WHERE kelas.kelas_id='$kelas' AND jadwal_hari='Jumat'
                                                ORDER BY jam.jam_nama ASC");
                while ($row=mysql_fetch_array($jadwal)) {
        ?>
                    <tr>
                        <td><?php echo $no2; ?></td>
                        <td><?php echo $row['jam_nama']; ?></td>
                        <td><?php echo $row['pelajaran_nama']; ?></td>
                        <td>
                            <a href="?jadwal-edit=<?php echo $row['jadwal_id']; ?>"><span class="fontello-edit"></span> Edit</a>
                            <a href="?jadwal-delete=<?php echo $row['jadwal_id']; ?>"><span class="fontello-trash"></span> Delete</a>
                        </td>
                    </tr>                    
        <?php
                $no5++;
                }
        ?>                    
                </tbody>
            </table>
        </div>
        <div class="box-body " style="display: block;">
            <table id="example6" class="display" style="width:100%">
                <thead>
                    <tr>
                        <td colspan="4"><center>SABTU</center></td>
                    </tr>
                    <tr>
                        <th width="3%">No</th>
                        <th>Jam</th>
                        <th>Mata Pelajaran</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>

                <tbody>
        <?php
                $no6        =   1;
                $jadwal     =   mysql_query("SELECT jadwal.jadwal_id, jadwal.jadwal_hari, jam.jam_nama, pelajaran.pelajaran_nama, kelas.kelas_nama
                                                FROM jadwal
                                                INNER JOIN jam ON jadwal.jam_id=jam.jam_id
                                                INNER JOIN pelajaran ON jadwal.pelajaran_id=pelajaran.pelajaran_id
                                                INNER JOIN kelas ON jadwal.kelas_id=kelas.kelas_id
                                                WHERE kelas.kelas_id='$kelas' AND jadwal_hari='Sabtu'
                                                ORDER BY jam.jam_nama ASC");
                while ($row=mysql_fetch_array($jadwal)) {
        ?>
                    <tr>
                        <td><?php echo $no2; ?></td>
                        <td><?php echo $row['jam_nama']; ?></td>
                        <td><?php echo $row['pelajaran_nama']; ?></td>
                        <td>
                            <a href="?jadwal-edit=<?php echo $row['jadwal_id']; ?>"><span class="fontello-edit"></span> Edit</a>
                            <a href="?jadwal-delete=<?php echo $row['jadwal_id']; ?>"><span class="fontello-trash"></span> Delete</a>
                        </td>
                    </tr>                    
        <?php
                $no6++;
                }
        ?>                    
                </tbody>
            </table>
        </div>
        <?php }else { ?>
        <!-- end .timeline -->

        <!-- /.box-header -->
        <div class="box-body small-5" style="display: block;">
            <form data-abide method="POST" action="" role="form">                 
                <div class="name-field">
                    <label>Kelas <small>required</small>
                        <select name="kelas" requires>
                            <?php 
                                $kelas      =   mysql_query("SELECT * FROM kelas ORDER BY kelas_nama ASC");

                                while ($row=mysql_fetch_array($kelas)) {
                            ?>
                            <option value="<?php echo $row['kelas_id']; ?>"><?php echo $row['kelas_nama']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </label>
                    <small class="error">Kelas Harus Di Isi</small>
                </div>
                <button type="submit" class="tiny radius button bg-black-solid" name="cari-kelas"><b><span class="fontello-search"></span> Search</b></button>
            </form>
        </div>
        <?php } ?>
        <!-- end .timeline -->

    </div>
    <!-- box -->
</div>