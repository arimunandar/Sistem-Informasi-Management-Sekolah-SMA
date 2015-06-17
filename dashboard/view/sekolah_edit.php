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
                <span>Data Sekolah</span>
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body small-5" style="display: block;">
            <form data-abide method="POST" action="" role="form"> 
                <div class="name-field">
                    <label>Nama Sekolah<small>required</small>
                        <input type="text" name="nama" value="<?php echo $row['sekolah_nama']; ?>" required>
                    </label>
                    <small class="error">Nama Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Telepon Sekolah <small>required</small>
                        <input type="text" name="telp" value="<?php echo $row['sekolah_telp']; ?>" required>
                    </label>
                    <small class="error">Telepon Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Alamat Sekolah <small>required</small>
                        <textarea name="alamat"><?php echo $row['sekolah_alamat']; ?></textarea>
                    </label>
                    <small class="error">Alamat Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Akreditasi Sekolah <small>required</small>
                        <input type="text" name="akreditasi" value="<?php echo $row['sekolah_akreditasi']; ?>" required>
                    </label>
                    <small class="error">Akreditasi Harus Di Isi</small>
                </div>
                <button type="submit" class="tiny radius button bg-black-solid" name="sekolah-update"><b><span class="fontello-minefield"></span> Update</b></button>
            </form>
        </div>
        <!-- end .timeline -->
    </div>
    <!-- box -->
</div>