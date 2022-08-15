<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Profile</h2>
        </header>

        <div class="tabs">
            <ul class="nav nav-tabs tabs-primary">
                <li class="active">
                    <a href="#overview" data-toggle="tab">Profile</a>
                </li>
                <li>
                    <a href="#edit" data-toggle="tab">Edit</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="overview" class="tab-pane active">
                    <h4 class="mb-md">Profile</h4>
                    <?php if (isset($berhasil)) {
                    ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Profile Telah Berhasil <strong>Diubah</strong>
                        </div>
                    <?php
                    }
                    ?>
                    <table class="text-dark">
                        <?php
                        foreach ($dosen as $data) {
                        ?>
                            <tr>
                                <td width="100px">NIP / NIDN </td>
                                <td width="10px"> : </td>
                                <td> <?php echo $data->nidn; ?> </td>
                            </tr>
                            <tr>
                                <td width="100px">Nama</td>
                                <td width="10px">:</td>
                                <td><?php echo $data->nama; ?></td>
                            </tr>
                            <tr>
                                <td width="100px">Gelar</td>
                                <td width="10px">:</td>
                                <td><?php echo $data->gelar; ?></td>
                            </tr>
                            <tr>
                                <td width="100px">Pendidikan Terakhir</td>
                                <td width="10px">:</td>
                                <td><?php echo $data->pendidikan_terakhir; ?></td>
                            </tr>
                            <tr>
                                <td width="100px">Keahlian</td>
                                <td width="0px">:</td>
                                <td><?php echo $data->keahlian; ?></td>
                            </tr>
                            <tr>
                                <td width="100px">Kode Dosen</td>
                                <td width="10px">:</td>
                                <td><?php echo $data->kode; ?></td>
                            </tr>
                            <tr>
                                <td width="100px">No. Telpon</td>
                                <td width="10px">:</td>
                                <td><?php echo $data->no_telepon; ?></td>
                            </tr>
                            <tr>
                                <td width="100px">Riwayat</td>
                                <td width="10px">:</td>
                                <td><?php echo $data->riwayat; ?></td>
                            </tr>
                            <tr>
                                <td width="100px">Password</td>
                                <td width="10px">:</td>
                                <td><?php echo $data->password; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>

                <div id="edit" class="tab-pane">
                    <form action="<?php echo base_url(); ?>update_profile_dosen" method="post" class="form-horizontal form-bordered">
                        <?php
                        foreach ($dosen as $data) {
                        ?>
                            <h4 class="mb-xlg">Informasi Diri</h4>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nip">NIP / NIDN</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="nidn" value="<?php echo $data->nidn; ?>" required readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nama">Nama</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $data->nama; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="gelar">Gelar</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="gelar" value="<?php echo $data->gelar; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="pendidikan_terakhir" value="<?php echo $data->pendidikan_terakhir; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="keahlian">Keahlian</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="keahlian" value="<?php echo $data->keahlian; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="kode">Kode Dosen</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="kode" value="<?php echo $data->kode; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="no_telepon">No. Telpon</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="no_telepon" value="<?php echo $data->no_telepon; ?>" required>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <label class="col-md-3 control-label" for="riwayat">Riwayat</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="riwayat" value="<?php echo $data->riwayat; ?>" required>
                                    </div>
                                </div> -->
                            </fieldset>

                            <hr class="dotted tall">
                            <h4 class="mb-xlg">Ganti Password</h4>
                            <fieldset class="mb-xl">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="pb">Password Baru</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="pb" placeholder="Masukan Password Baru" required>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>