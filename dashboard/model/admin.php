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
                <span>Data Admin</span>
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body " style="display: block;">
            <a href="?users=admin-create" class="tiny radius button bg-black-solid"><b><span class="fontello-minefield"></span> Create</b></a>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th width="3%">No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Telepon</th>
                        <th>E-mail</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php 
                    if (isset($_GET['users'])) {
                        if ($_GET['users'] == 'admin') {
                            
                            $no         =   1;
                            $admin      =   mysql_query("SELECT * FROM users WHERE users_level='admin' ORDER BY users_id DESC");

                            while ($row=mysql_fetch_array($admin)) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
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
                                if ($row['users_username'] == NULL) {
                                    echo "Data Kosong";
                                }

                                echo $row['users_username'];
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
                            <a href="?admin-edit=<?php echo $row['users_id']; ?>"><span class="fontello-edit"></span> Edit</a>
                            <a href="?admin-delete=<?php echo $row['users_id']; ?>"><span class="fontello-trash"></span> Delete</a>
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