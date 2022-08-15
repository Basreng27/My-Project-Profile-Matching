<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Data Judul</h2>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Daftar Judul</h2>
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
                            <th>Status</th>
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
                                <td><?php echo $data->status; ?></td>
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