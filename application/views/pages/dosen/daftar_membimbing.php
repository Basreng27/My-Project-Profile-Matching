<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Data Membimbing</h2>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Daftar Mahasiswa Bimbingan</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Kode Dosen</th>
                            <th>Tahun Akademik</th>
                            <th>Semester</th>
                            <th>Progres</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($judul as $data) {
                        ?>
                            <tr>
                                <td><?php echo $data->nim; ?></td>
                                <td><?php echo $data->judul; ?></td>
                                <td><?php echo $data->kategori1 . ", " . $data->kategori2 . ", " . $data->kategori3 ?></td>
                                <td><?php echo $data->kode; ?></td>
                                <td><?php echo $data->ta; ?></td>
                                <td><?php echo $data->semester; ?></td>
                                <td><?php echo $data->progres; ?></td>
                                <td>
                                    <?php
                                    if ($data->status == 'bimbingan') {
                                    ?>
                                        <a href="<?php echo base_url('proses_lulus/lulus_' . $data->id) ?>/<?php echo $data->kategori1; ?>/<?php echo $data->kategori2; ?>/<?php echo $data->kategori3; ?>">
                                            <button type="button" class="btn btn-success" name="button">Luluskan</button>
                                        </a>
                                        <br>
                                        <a href="<?php echo base_url('edit_progres/' . $data->id) ?>">
                                            <button type="button" class="btn btn-primary" name="button">Edit</button>
                                        </a>
                                    <?php
                                    } else {
                                    ?>
                                        <button type="button" class="btn btn-danger" name="button">Lulus</button>
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