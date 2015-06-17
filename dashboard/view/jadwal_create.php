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
        <div class="box-body small-5" style="display: block;">
            <form data-abide method="POST" action="" role="form"> 
                <div class="name-field">
                    <label>Hari <small>required</small>
                        <select name="hari" requires>
                            <option>Senin</option>
                            <option>Selasa</option>
                            <option>Rabu</option>
                            <option>Kamis</option>
                            <option>Jumat</option>
                            <option>Sabtu</option>
                        </select>
                    </label>
                    <small class="error">Hari Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Jam <small>required</small>
                        <select name="jam" requires>
                            <?php 
                                $jam      =   mysql_query("SELECT * FROM jam ORDER BY jam_nama ASC");

                                while ($row=mysql_fetch_array($jam)) {
                            ?>
                            <option value="<?php echo $row['jam_id']; ?>"><?php echo $row['jam_nama']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </label>
                    <small class="error">Jam Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Pelajaran <small>required</small>
                        <select name="pelajaran" requires>
                            <?php 
                                $pelajaran      =   mysql_query("SELECT * FROM pelajaran ORDER BY pelajaran_nama ASC");

                                while ($row=mysql_fetch_array($pelajaran)) {
                            ?>
                            <option value="<?php echo $row['pelajaran_id']; ?>"><?php echo $row['pelajaran_nama']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </label>
                    <small class="error">Kelas Harus Di Isi</small>
                </div>                
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
                <button type="submit" class="tiny radius button bg-black-solid" name="jadwal-create"><b><span class="fontello-plus"></span> Create</b></button>
            </form>
        </div>
        <!-- end .timeline -->
    </div>
    <!-- box -->
</div>