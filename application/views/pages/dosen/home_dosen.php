<body>
    <section class="body">

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Dashboard</h2>
            </header>

            <!-- start: page -->
            <div class="row">
                <div class="col-md-6 col-lg-12 col-xl-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <section class="panel panel-featured-left panel-featured-primary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-primary">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Mahasiswa Dalam Bimbingan</h4>
                                                <div class="info center">
                                                    <strong class="amount">
                                                        <?php
                                                        foreach ($dosen as $data) {
                                                            $kode = $this->Judul_model->membimbing($data->nidn)->row();
                                                        }

                                                        $statusjudul = $this->Judul_model->statusjudul($kode->kode, 'bimbingan')->num_rows();

                                                        echo $statusjudul;
                                                        ?>
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <section class="panel panel-featured-left panel-featured-quartenary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-quartenary">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Mahasiswa Telah di Luluskan</h4>
                                                <div class="info center">
                                                    <strong class="amount">
                                                        <?php
                                                        foreach ($dosen as $data) {
                                                            $kode1 = $this->Judul_model->membimbing($data->nidn)->row();
                                                        }

                                                        $statusjudul1 = $this->Judul_model->statusjudul($kode1->kode, 'lulus')->num_rows();

                                                        echo $statusjudul1;
                                                        ?>
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <section class="panel panel-featured-left panel-featured-tertiary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-tertiary">
                                                <i class="fa fa-users"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Total Mahasiswa Yang di Bimbing</h4>
                                                <br>
                                                <div class="info center">
                                                    <strong class="amount">
                                                        <?php
                                                        foreach ($dosen as $data) {
                                                            $kode2 = $this->Judul_model->membimbing($data->nidn)->row();
                                                        }

                                                        $totalstatusjudul = $this->Judul_model->allstatusjudul($kode2->kode)->num_rows();

                                                        echo $totalstatusjudul;
                                                        ?>
                                                    </strong>
                                                </div>
                                                <div class="summary-footer">
                                                    ( <?php echo $statusjudul; ?> Mahasiswa Bimbingan )
                                                    ( <?php echo $statusjudul1; ?> Mahasiswa Telah Lulus )
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Mahasiswa Bimbingan</h2>
                </header>
                <div class="panel-body">
                    <table class="table table-bordered table-striped mb-none" id="datatable-default">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Kode</th>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Progres</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $mahasiswajudul = $this->Judul_model->statusjudul($kode2->kode, 'bimbingan')->result();

                            foreach ($mahasiswajudul as $data) {
                            ?>
                                <tr>
                                    <td><?php echo $data->nim; ?></td>
                                    <td><?php echo $data->judul; ?></td>
                                    <td><?php echo $data->kategori1 . ", " . $data->kategori2 . ", " . $data->kategori3 ?></td>
                                    <td><?php echo $data->kode; ?></td>
                                    <td><?php echo $data->ta; ?></td>
                                    <td><?php echo $data->semester; ?></td>
                                    <td><?php echo $data->progres; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <!-- end: page -->
        </section>
        </div>
    </section>