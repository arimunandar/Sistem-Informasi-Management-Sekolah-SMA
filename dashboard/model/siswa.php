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
        <div class="box-body " style="display: block;">
            <a href="?users=siswa-create" class="tiny radius button bg-black-solid"><b><span class="fontello-minefield"></span> Create</b></a>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th width="3%">No</th>
                        <th>No Induk</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>E-mail</th>
                        <th>Status</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php 
                    if (isset($_GET['users'])) {
                        if ($_GET['users'] == 'siswa') {
                            
                            $no         =   1;
                            $siswa      =   mysql_query("SELECT *, kelas.kelas_id, kelas.kelas_nama FROM users
                                                        INNER JOIN kelas ON users.kelas_id=kelas.kelas_id
                                                        WHERE users.users_level='siswa'");

                            while ($row=mysql_fetch_array($siswa)) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td>
                            <?php
                                if ($row['users_noinduk'] == NULL) {
                                    echo "Data Kosong";
                                }

                                echo $row['users_noinduk'];
                            ?>
                        </td>
                        <td>
                            <?php
                                if ($row['users_nama'] == NULL) {
                                    echo "Data Kosong";
                                }

                                echo $row['users_nama'];
                            ?>
                        </td>                        
                        <td>
                            <?php
                                if ($row['users_telp'] == NULL) {
                                    echo "Data Kosong";
                                }

                                echo $row['users_telp'];
                            ?>
                        </td>
                        <td>
                            <?php
                                if ($row['users_email'] == NULL) {
                                    echo "Data Kosong";
                                }

                                echo $row['users_email'];
                            ?>
                        </td>
                        <td>
                            <?php
                                if ($row['users_status'] == NULL) {
                                    echo "Data Kosong";
                                }

                                echo $row['users_status'];
                            ?>
                        </td>
                        <td>
                            <?php
                                if ($row['kelas_id'] == NULL) {
                                    echo "Data Kosong";
                                }

                                echo $row['kelas_nama'];
                            ?>
                        </td>
                        <td>
                            <a href="?siswa-edit=<?php echo $row['users_id']; ?>"><span class="fontello-edit"></span> Edit</a>
                            <a href="?siswa-delete=<?php echo $row['users_id']; ?>"><span class="fontello-trash"></span> Delete</a>
                        </td>
                    </tr>
                <?php
                            $no++;
                            }
                        }
                    }
                ?>                    
                </tbody>
            </table>
        </div>
        <!-- end .timeline -->
    </div>
    <!-- box -->
</div>