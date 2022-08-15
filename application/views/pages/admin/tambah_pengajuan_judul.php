<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Tambah Pengajuan</h2>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Tambah Judul Pengajuan (Status : <strong>diterima</strong>)</h2>
                    </header>

                    <div class="panel-body">
                        <form action="<?php echo base_url(); ?>proses_tambah_pengajuan_judul" method="post" class="form-horizontal form-bordered">
                            <?php
                            if (isset($sukses)) {
                            ?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Data Pengajuan Telah <strong>Tersimpan</strong>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="nim">NIM</label>

                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }' name="nim" required>
                                        <optgroup label="NIM || Nama">
                                            <?php
                                            $mhs = $this->Mahasiswa_model->cari()->result();

                                            foreach ($mhs as $data) {
                                            ?>
                                                <option value="<?php echo $data->nim; ?>"><?php echo $data->nim; ?> || <?php echo $data->nama; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="judul">Judul</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="judul" placeholder="Masukan Judul" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="kategori1">Kategori 1</label>

                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }' name="kategori1" required>
                                        <optgroup label="Kategori 1">
                                            <option value="Lainnya">Pilih Kategori 1</option>
                                            <?php
                                            $kategori = $this->Admin_model->getkategori()->result();

                                            foreach ($kategori as $tada) {
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
                                <label class="col-md-3 control-label" for="kategori1">Kategori 2</label>

                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }' name="kategori2" required>
                                        <optgroup label="Kategori 2">
                                            <option value="Lainnya">Pilih Kategori 2</option>
                                            <?php
                                            foreach ($kategori as $tada) {
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
                                <label class="col-md-3 control-label" for="kategori1">Kategori 3</label>

                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }' name="kategori3" required>
                                        <optgroup label="Kategori 3">
                                            <option value="Lainnya">Pilih Kategori 3</option>
                                            <?php
                                            foreach ($kategori as $tada) {
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
                                <label class="col-md-3 control-label" for="ta">Tahun Akademik</label>
                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }' name="ta" required>
                                        <optgroup label="Tahun Akademik">
                                            <option value="2010/2011    ">2010/2011</option>
                                            <option value="2011/2012">2011/2012</option>
                                            <option value="2012/2013">2012/2013</option>
                                            <option value="2013/2014">2013/2014</option>
                                            <option value="2014/2015">2014/2015</option>
                                            <option value="2015/2016">2015/2016</option>
                                            <option value="2016/2017">2016/2017</option>
                                            <option value="2017/2018">2017/2018</option>
                                            <option value="2018/2019">2018/2019</option>
                                            <option value="2019/2020">2019/2020</option>
                                            <option value="2020/2021">2020/2021</option>
                                            <option value="2021/2022">2021/2022</option>
                                            <option value="2022/2023">2022/2023</option>
                                            <option value="2023/2024">2023/2024</option>
                                            <option value="2024/2025">2024/2025</option>
                                            <option value="2025/2026">2025/2026</option>
                                            <option value="2026/2027">2026/2027</option>
                                            <option value="2027/2028">2027/2028</option>
                                            <option value="2028/2029">2028/2029</option>
                                            <option value="2029/2030">2029/2030</option>
                                            <option value="2030/2031">2030/2031</option>
                                            <option value="2031/2032">2031/2032</option>
                                            <option value="2032/2033">2032/2033</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="semester">semester</label>
                                <div class="col-md-6">
                                    <select class="form-control" data-plugin-multiselect name="semester" required>
                                        <option value="ganjil">Ganjil</option>
                                        <option value="genap">Genap</option>
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="status" value="diterima" required>

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