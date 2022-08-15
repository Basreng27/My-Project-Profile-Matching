<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Tambah Kategori/Keahlian</h2>
        </header>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Tambah Kategori/Keahlian</h2>
                    </header>

                    <div class="panel-body">
                        <form action="<?php echo base_url(); ?>proses_tambah_kategori" method="post" class="form-horizontal form-bordered">
                            <?php
                            if (isset($cekkategori)) {
                            ?>
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Kategori <strong><?php echo $kategori; ?></strong> telah terdaftar
                                </div>
                            <?php
                            } elseif (isset($cekkategorisukses)) {
                            ?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Kategori <strong><?php echo $kategori; ?></strong> telah berhasil terdaftar
                                </div>
                            <?php
                            }
                            ?>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="Kategori">Kategori</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori" required>
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

        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Daftar Kategori/Keahlian</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="table">
                    <thead>
                        <tr>
                            <th>ID Kategori</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kategorii as $data) {
                        ?>
                            <tr>
                                <td><?php echo $data->id; ?></td>
                                <td><?php echo $data->kategori; ?></td>
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