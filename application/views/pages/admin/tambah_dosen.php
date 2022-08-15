<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Tambah Dosen</h2>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Tambah Dosen</h2>
                    </header>

                    <div class="panel-body">
                        <form action="<?php echo base_url(); ?>proses_tambah_dosen" method="post" class="form-horizontal form-bordered">
                            <?php
                            if (isset($ceknidn)) {
                            ?>
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    NIDN <strong><?php echo $nidn; ?></strong> telah terdaftar
                                </div>
                            <?php
                            } elseif (isset($cekkode)) {
                            ?>
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Kode Dosen <strong><?php echo $kode; ?></strong> telah terdaftar
                                </div>
                            <?php
                            } elseif (isset($sukses)) {
                            ?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Data Dosen Telah <strong>Tersimpan</strong>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="nidn">NIDN</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nidn" placeholder="Masukan NIDN" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="nama">Nama</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="gelar">Gelar</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="gelar" placeholder="Ex. S.Kom,. MT" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="status">Status</label>
                                <div class="col-md-6">
                                    <select class="form-control" data-plugin-multiselect name="status" required>
                                        <option value="y">Aktif</option>
                                        <option value="n">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="keahlian1">Keahlian 1</label>

                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }' name="keahlian1" required>
                                        <optgroup label="Keahlian 1">
                                            <option></option>
                                            <?php
                                            $keahlian = $this->Admin_model->getkategori()->result();

                                            foreach ($keahlian as $tada) {
                                            ?>
                                                <option value="<?php echo $tada->kategori; ?>"><?php echo $tada->kategori; ?></option>
                                            <?php
                                            }
                                            ?>
                                            <option value="Lainnya">Lainnya</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="keahlian2">Keahlian 2</label>

                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }' name="keahlian2" required>
                                        <optgroup label="Keahlian 2">
                                            <option></option>
                                            <?php
                                            foreach ($keahlian as $tada) {
                                            ?>
                                                <option value="<?php echo $tada->kategori; ?>"><?php echo $tada->kategori; ?></option>
                                            <?php
                                            }
                                            ?>
                                            <option value="Lainnya">Lainnya</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="keahlian3">Keahlian 3</label>

                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }' name="keahlian3" required>
                                        <optgroup label="Keahlian 3">
                                            <option></option>
                                            <?php
                                            foreach ($keahlian as $tada) {
                                            ?>
                                                <option value="<?php echo $tada->kategori; ?>"><?php echo $tada->kategori; ?></option>
                                            <?php
                                            }
                                            ?>
                                            <option value="Lainnya">Lainnya</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="keahlian4">Keahlian 4</label>

                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }' name="keahlian4" required>
                                        <optgroup label="Keahlian 4">
                                            <option></option>
                                            <?php
                                            foreach ($keahlian as $tada) {
                                            ?>
                                                <option value="<?php echo $tada->kategori; ?>"><?php echo $tada->kategori; ?></option>
                                            <?php
                                            }
                                            ?>
                                            <option value="Lainnya">Lainnya</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="keahlian5">Keahlian 5</label>

                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }' name="keahlian5" required>
                                        <optgroup label="Keahlian 5">
                                            <option></option>
                                            <?php
                                            foreach ($keahlian as $tada) {
                                            ?>
                                                <option value="<?php echo $tada->kategori; ?>"><?php echo $tada->kategori; ?></option>
                                            <?php
                                            }
                                            ?>
                                            <option value="Lainnya">Lainnya</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="kode">Kode Dosen</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="kode" placeholder="Masukan Kode Dosen" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="no_telepon">No. Telpon</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="no_telepon" placeholder="Masukan No Telpon" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-7 control-label"></label>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-round btn-primary" name="submit" value="submit">Submit</button>
                                    <button type="reset" class="btn btn-round btn-danger">Reset</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
    </div>