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
                <span>Data modul Pembelajaran</span>
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body " style="display: block;">
            <a href="?modul=upload" class="tiny radius button bg-black-solid"><b><span class="fontello-minefield"></span> Upload</b></a>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th width="3%">No</th>
                        <th>Judul</th>
                        <th>Tipe File</th>
                        <th>Ukuran File</th>
                        <th>Status</th>
                        <th width="30%">Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php 
                    if (isset($_GET['modul'])) {
                        if ($_GET['modul'] == 'download') {
                            
                            $no         =   1;
                            $modul      =   mysql_query("SELECT * FROM modul ORDER BY nama_file ASC");

                            while ($row=mysql_fetch_array($modul)) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td>
                            <?php
                                if ($row['nama_file'] == NULL) {
                                    echo "Data Kosong";
                                }

                                echo $row['nama_file'];
                            ?>
                        </td>
                        <td>
                            <?php
                                if ($row['tipe_file'] == NULL) {
                                    echo "Data Kosong";
                                }

                                echo $row['tipe_file'];
                            ?>
                        </td>
                        <td>
                            <?php
                                if ($row['ukuran_file'] == NULL) {
                                    echo "Data Kosong";
                                }

                                echo $row['ukuran_file'];
                            ?>
                        </td>
                        <td>
                            <?php
                                if ($row['status'] == NULL) {
                                    echo "Data Kosong";
                                }
                                $level  =   $_SESSION['level'];
                                if ($level == 'admin') {
                                        echo "<a href='?modul-validasi=$row[id]'>" .$row['status']. "</a>";
                                }elseif ($level = 'guru' AND $level = 'siswa') {
                                    echo $row['status'];
                                }

                                
                            ?>
                        </td>
                        <td>
                            <a href="<?php echo $row['file']; ?>"><span class="fontello-download"></span> Download</a>
                            <a href="?modul-edit=<?php echo $row['id']; ?>"><span class="fontello-edit"></span> Edit</a>
                            <a href="?modul-delete=<?php echo $row['id']; ?>"><span class="fontello-trash"></span> Delete</a>
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