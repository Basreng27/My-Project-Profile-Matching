<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Data Dosen</h2>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Daftar Dosen</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Gelar</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Status</th>
                            <th>Keahlian</th>
                            <th>Kode Dosen</th>
                            <th>No Telpon</th>
                            <th>Riwayat Membimbing</th>
                            <th>Hak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dosen as $data) {
                        ?>
                            <tr>
                                <td><?php echo $data->nidn; ?></td>
                                <td><?php echo $data->nama; ?></td>
                                <td><?php echo $data->gelar; ?></td>
                                <td><?php echo $data->pendidikan_terakhir; ?></td>
                                <td>
                                    <?php
                                    if ($data->status == 'y') {
                                    ?>
                                        <a href="<?php echo base_url('proses_status/n_' . $data->nidn) ?>">
                                            <button type="button" class="btn btn-success" name="button">Aktif</button>
                                        </a>
                                    <?php
                                    } elseif ($data->status == 'n') {
                                    ?>
                                        <a href="<?php echo base_url('proses_status/y_' . $data->nidn) ?>">
                                            <button type="button" class="btn btn-danger" name="button">Tidak Aktif</button>
                                        </a>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td><?php echo $data->keahlian; ?></td>
                                <td><?php echo $data->kode; ?></td>
                                <td><?php echo $data->no_telepon; ?></td>
                                <td><?php echo $data->riwayat; ?></td>
                                <td>
                                    <?php

                                    $hak = $this->Admin_model->hak($data->nidn)->num_rows();

                                    if ($hak == 0) {
                                    ?>
                                        <a href="<?php echo base_url('give_admin/admin_' . $data->nidn . '_' . $data->nama . '_' . $data->password) ?>">
                                            <button type="button" class="btn btn-primary" name="button">User</button>
                                        </a>
                                    <?php
                                    } elseif ($hak > 0) {
                                    ?>
                                        <a href="<?php echo base_url('give_user/user_' . $data->nidn) ?>">
                                            <button type="button" class="btn btn-danger" name="button">Admin</button>
                                        </a>
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <!-- end: page -->
    </section>
    </div>