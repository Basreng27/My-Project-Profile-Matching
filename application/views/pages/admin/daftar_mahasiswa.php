<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Data Mahasiswa</h2>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Daftar Mahasiswa</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>No Telpon</th>
                            <th>Jurusan</th>
                            <th>Jenis Mahasiswa</th>
                            <th>Dosen Wali</th>
                            <th>Angkatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($mahasiswa as $data) {
                        ?>
                            <tr>
                                <td><?php echo $data->nim; ?></td>
                                <td><?php echo $data->nama; ?></td>
                                <td><?php echo $data->no_hp; ?></td>
                                <td><?php echo $data->jurusan; ?></td>
                                <td><?php echo $data->jenis_mahasiswa; ?></td>
                                <td><?php echo $data->dosen_wali; ?></td>
                                <td><?php echo $data->angkatan; ?></td>
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