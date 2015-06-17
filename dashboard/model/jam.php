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
                <span>Data Jam Pelajaran</span>
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body " style="display: block;">
            <a href="?akademik=jam-create" class="tiny radius button bg-black-solid"><b><span class="fontello-minefield"></span> Create</b></a>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th width="3%">No</th>
                        <th>Jam Pelajaran</th>
                        <th></th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php 
                    if (isset($_GET['akademik'])) {
                        if ($_GET['akademik'] == 'jam') {
                            
                            $no         =   1;
                            $jam      =   mysql_query("SELECT * FROM jam ORDER BY jam_nama ASC");

                            while ($row=mysql_fetch_array($jam)) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td>
                            <?php
                                if ($row['jam_nama'] == NULL) {
                                    echo "Data Kosong";
                                }

                                echo $row['jam_nama'];
                            ?>
                        </td>
                        <td></td>
                        <td>
                            <a href="?jam-edit=<?php echo $row['jam_id']; ?>"><span class="fontello-edit"></span> Edit</a>
                            <a href="?jam-delete=<?php echo $row['jam_id']; ?>"><span class="fontello-trash"></span> Delete</a>
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