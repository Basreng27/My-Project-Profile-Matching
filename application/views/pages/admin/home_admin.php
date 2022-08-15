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
                                                <i class="fa fa-book"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Judul Skripsi (Diterima)</h4>
                                                <div class="info center">
                                                    <strong class="amount">
                                                        <?php
                                                        $diterima = $this->Pengajuan_model->status('diterima')->num_rows();
                                                        echo $diterima;
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
                                                <h4 class="title">Dosen</h4>
                                                <div class="info center">
                                                    <strong class="amount">
                                                        <?php
                                                        $all_dosen = $this->Dosen_model->getalldosen()->num_rows();
                                                        echo $all_dosen;
                                                        ?>
                                                    </strong>
                                                    <span class="text-primary">

                                                    </span>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <?php
                                                $dosen_aktif = $this->Dosen_model->getalldosenaktif('y')->num_rows();
                                                ?>( <?php echo $dosen_aktif; ?> Dosen Aktif )

                                                <?php
                                                $dosen_tidak_aktif = $this->Dosen_model->getalldosentidakaktif('n')->num_rows();
                                                ?>( <?php echo $dosen_tidak_aktif; ?> Dosen Tidak Aktif )
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="col-md-12 col-lg-6 col-xl-6 center">
                            <section class="panel panel-featured-left panel-featured-secondary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Bagi Kuota Dosen</h4>
                                                <br>
                                                <div class="info">
                                                    <a class="collapse-item" data-toggle="modal" href="#" data-target="#myBagi">
                                                        <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" name="button">Bagi</button>
                                                    </a>

                                                    <a class="collapse-item" data-toggle="modal" href="#" data-target="#myReset">
                                                        <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger" name="button">Reset</button>
                                                    </a>
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
                    <h2 class="panel-title">Dosen Aktif</h2>
                </header>
                <div class="panel-body">
                    <table class="table table-bordered table-striped mb-none" id="datatable-default">
                        <thead>
                            <tr>
                                <th>NIDN</th>
                                <th>Kode Dosen</th>
                                <th>Kuota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $list_dosen_aktif = $this->Dosen_model->getalldosenaktif('y')->result();

                            foreach ($list_dosen_aktif as $data) {
                            ?>
                                <tr>
                                    <td><?php echo $data->nidn; ?></td>
                                    <td><?php echo $data->kode; ?></td>
                                    <td><?php echo $data->kuota; ?></td>
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

    <div class="modal fade" id="myBagi" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pembagian Kuota</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="modal-wrapper">
                        <div class="modal-icon">
                            <i class="fa fa-question-circle"></i>
                        </div>
                        <p>Apakah Anda Akan Membagi Kuota Dosen?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary modal-confirm" href=<?php echo base_url('bagi') ?>>Confirm</a>
                    <button class="btn btn-default modal-dismiss" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myReset" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reset Kuota</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="modal-wrapper">
                        <div class="modal-icon">
                            <i class="fa fa-question-circle"></i>
                        </div>
                        <p>Apakah Anda Yakin Akan Mereset Kuota Dosen?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary modal-confirm" href=<?php echo base_url('reset') ?>>Confirm</a>
                    <button class="btn btn-default modal-dismiss" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>