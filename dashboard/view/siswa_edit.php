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
                <span>Data Siswa</span>
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body small-5" style="display: block;">
            <form data-abide method="POST" action="" role="form"> 
                <div class="name-field">
                    <label>No Induk <small>required</small>
                        <input type="text" name="noinduk" value="<?php echo $row['users_noinduk']; ?>" required>
                    </label>
                    <small class="error">No Induk Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Nama <small>required</small>
                        <input type="text" name="nama" value="<?php echo $row['users_nama']; ?>" required>
                    </label>
                    <small class="error">Nama Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Username <small>required</small>
                        <input type="text" name="username" value="<?php echo $row['users_username']; ?>" required>
                    </label>
                    <small class="error">Username Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>E-mail <small>required</small>
                        <input type="email" name="email" value="<?php echo $row['users_email']; ?>" required>
                    </label>
                    <small class="error">E-mail Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Telepon <small>required</small>
                        <input type="text" name="telp" value="<?php echo $row['users_telp']; ?>" required>
                    </label>
                    <small class="error">Telepon Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Alamat <small>required</small>
                        <textarea name="alamat" required><?php echo $row['users_alamat']; ?></textarea>
                    </label>
                    <small class="error">Alamat Harus Di Isi</small>
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
                <div class="name-field">
                    <label>Status <small>required</small>
                        <select name="status" required>
                            <option>Aktif</option>
                            <option>Non Aktif</option>
                        </select>
                    </label>
                    <small class="error">Status Harus Di Isi</small>
                </div>
                <button type="submit" class="tiny radius button bg-black-solid" name="siswa-update"><b><span class="fontello-minefield"></span> Update</b></button>
            </form>
        </div>
        <!-- end .timeline -->
    </div>
    <!-- box -->
</div>