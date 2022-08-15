<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Pilih Pembimbing</h2>
        </header>

        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Pilih Pembimbing</h2>
            </header>

            <div class="panel-body">
                <form action="<?php echo base_url(); ?>proses_pilih_pembimbing" method="post" class="form-horizontal form-bordered">
                    <?php
                    foreach ($pengajuan as $data) {
                    ?>
                        <input type="hidden" class="form-control" name="id_pengajuan" value="<?php echo $data->id_pengajuan; ?>" required>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="nim">NIM</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nim" value="<?php echo $data->nim; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="judul">Judul</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="judul" value="<?php echo $data->judul; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="kategori1">Kategori 1</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kategori1" value="<?php echo $data->kategori1; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="kategori2">Kategori 2</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kategori2" value="<?php echo $data->kategori2; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="kategori3">Kategori 3</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kategori3" value="<?php echo $data->kategori3; ?>" readonly>
                            </div>
                        </div>

                        <input type="hidden" class="form-control" name="ta" value="<?php echo $data->ta; ?>" required>


                        <input type="hidden" class="form-control" name="semester" value="<?php echo $data->semester; ?>" required>


                        <div class="form-group">
                            <label class="col-md-3 control-label" for="kode">Kode Dosen</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="kode" name="kode" placeholder="Pilih Kode Dosen" requied readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="nama">Nama</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Pilih Nama Dosen" requied readonly>
                            </div>
                        </div>

                        <input type="hidden" class="form-control" id="nidn" name="nidn" required>

                        <input type="hidden" class="form-control" id="kuota" name="kuota" required>

                        <input type="hidden" class="form-control" name="status" value="bimbingan" required>

                        <div class="form-group">
                            <label class="col-md-7 control-label"></label>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-round btn-primary" name="submit" value="submit">Submit</button>
                                <button type="cancel" class="btn btn-round btn-danger" name="cancel" value="cancel">Cancel</button>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </form>
            </div>
        </section>

        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Pemilihan Pembimbing</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="table">
                    <thead>
                        <tr>
                            <th>NIDN</th>
                            <th>Kode Dosen</th>
                            <th>Nama</th>
                            <th>Keahlian</th>
                            <th>Riwayat Membimbing</th>
                            <th>Score</th>
                            <th>Kuota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dosen as $data) {
                        ?>
                            <tr>
                                <td><?php echo $data->nidn; ?></td>
                                <td><?php echo $data->kode; ?></td>
                                <td><?php echo $data->nama; ?></td>
                                <td><?php echo $data->keahlian; ?></td>
                                <td><?php echo $data->riwayat; ?></td>
                                <td><?php echo $data->score; ?></td>
                                <td><?php echo $data->kuota; ?></td>
                                <td>
                                    <?php if ($data->kuota <= 0) {
                                    ?> <a class="collapse-item" data-toggle="modal" href="#" data-target="#mySub">
                                            <button type="button" class="btn btn-primary" name="button">Pilih</button>
                                        </a>
                                    <?php
                                    } else {
                                    ?>
                                        <button type="button" class="btn btn-primary" name="button" onclick="show()">Pilih</button>
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

    </section>
    </div>

    <script>
        function show() {

            var table = document.getElementById("table"),
                rIndex;

            for (var i = 1; i < table.rows.length; i++) {
                table.rows[i].onclick = function() {
                    rIndex = this.rowIndex;
                    console.log(rIndex);

                    document.getElementById("nidn").value = this.cells[0].innerHTML;
                    document.getElementById("kode").value = this.cells[1].innerHTML;
                    document.getElementById("nama").value = this.cells[2].innerHTML;
                    document.getElementById("kuota").value = this.cells[6].innerHTML;

                    $("#mySend").modal('show');
                };
            }

        }
    </script>

    <div class="modal fade" id="mySub" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Kuota Habis</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="modal-wrapper">
                        <div class="modal-icon">
                            <i class="fa fa-exclamation-circle"></i>
                        </div>
                        <p>Kuota Dosen Habis, Silahkan Pilih Dosen Lain</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary modal-confirm" data-dismiss="modal">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mySend" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Dosen Telah di Pilih</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="modal-wrapper">
                        <div class="modal-icon">
                            <i class="fa fa-exclamation-circle"></i>
                        </div>
                        <p>Dosen Telah di Pilih, Silahkan Simpan Data Judul</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary modal-confirm" data-dismiss="modal">Confirm</button>
                </div>
            </div>
        </div>
    </div>