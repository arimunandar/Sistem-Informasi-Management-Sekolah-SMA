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
                <span>Data Upload</span>
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body small-5" style="display: block;">
            <form data-abide method="POST" action="" role="form" enctype="multipart/form-data">                 
                <div class="name-field">
                    <label>Nama Modul<small>required</small>
                        <input type="text" name="nama" value="<?php echo $row['nama_file']; ?>" required>
                    </label>
                    <small class="error">Nama Modul Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Pilih file<small>required</small>
                        <input type="file" name="file" required>
                    </label>
                    <small class="error">File Harus Di Isi</small>
                </div>
                <button type="submit" class="tiny radius button bg-black-solid" name="modul-update"><b><span class="fontello-minefield"></span> Update</b></button>
            </form>
        </div>
        <!-- end .timeline -->
    </div>
    <!-- box -->
</div>