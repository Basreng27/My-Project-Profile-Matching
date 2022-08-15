<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Data Proposal</h2>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Daftar Proposal</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Judul</th>
                            <th>Kategori 1</th>
                            <th>Kategori 2</th>
                            <th>Kategori 3</th>
                            <th>Tahun Akademik</th>
                            <th>Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($pengajuan as $data) {
                        ?>
                            <tr>
                                <td><?php echo $data->nim; ?></td>
                                <td><?php echo $data->judul; ?></td>
                                <td><?php echo $data->kategori1; ?></td>
                                <td><?php echo $data->kategori2; ?></td>
                                <td><?php echo $data->kategori3; ?></td>
                                <td><?php echo $data->ta; ?></td>
                                <td><?php echo $data->semester; ?></td>
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