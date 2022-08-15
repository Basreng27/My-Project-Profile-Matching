<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Pilih Pembimbing</h2>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Pemilihan Pembimbing</h2>
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
                            <th>Aksi</th>
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
                                <td>
                                    <?php
                                    if ($data->status == 'diterima') {
                                    ?>
                                        <a href="<?php echo base_url(); ?>pilih_pembimbing/<?php echo $data->id_pengajuan; ?>/<?php echo $data->kategori1; ?>/<?php echo $data->kategori2; ?>/<?php echo $data->kategori3; ?>" class="btn btn-round btn-warning">
                                            <span class="text">Pilih Pembimbing</span>
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