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
                <span>Data Galeri</span>
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body small-5" style="display: block;">
            <form data-abide method="POST" enctype="multipart/form-data" action="" role="form"> 
                <div class="name-field">
                    <label>Nama <small>required</small>
                        <input type="text" name="nama" required>
                    </label>
                    <small class="error">Nama Harus Di Isi</small>
                </div>
                <div class="name-field">
                    <label>Pilih Foto <small>required</small>
                        <input type="file" name="foto" required>
                    </label>
                    <small class="error">Foto Harus Di Isi</small>
                </div>
                <button type="submit" class="tiny radius button bg-black-solid" name="galeri-create"><b><span class="fontello-minefield"></span> Create</b></button>
            </form>
        </div>
        <!-- end .timeline -->
    </div>
    <!-- box -->
</div>