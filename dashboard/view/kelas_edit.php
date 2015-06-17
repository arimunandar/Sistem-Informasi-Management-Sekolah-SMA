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
                <span>Data Kelas</span>
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body small-5" style="display: block;">
            <form data-abide method="POST" action="" role="form">                 
                <div class="name-field">
                    <label>Nama Kelas<small>required</small>
                        <input type="text" name="nama" value="<?php echo $row['kelas_nama']; ?>" required>
                    </label>
                    <small class="error">Nama Kelas Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Wali Kelas <small>required</small>
                        <select name="wali" required>
                            <?php 
                                $wali      =   mysql_query("SELECT * FROM users WHERE users_level='guru' ORDER BY users_nama ASC");

                                while ($row=mysql_fetch_array($wali)) {
                            ?>
                            <option value="<?php echo $row['users_id']; ?>"><?php echo $row['users_nama']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </label>
                    <small class="error">Kelas Harus Di Isi</small>
                </div>
                <button type="submit" class="tiny radius button bg-black-solid" name="kelas-update"><b><span class="fontello-minefield"></span> Update</b></button>
            </form>
        </div>
        <!-- end .timeline -->
    </div>
    <!-- box -->
</div>