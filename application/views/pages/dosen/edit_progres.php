<body>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Edit</h2>
        </header>

        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Edit</h2>
            </header>

            <div class="panel-body">
                <form action="<?php echo base_url(); ?>proses_edit_progres" method="post" class="form-horizontal form-bordered">
                    <?php
                    foreach ($judul as $data) {
                    ?>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $data->id; ?>" readonly>

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
                            <label class="col-md-3 control-label" for="kode">Kode Dosen</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="kode" value="<?php echo $data->kode; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="ta">Tahun Akademik</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ta" value="<?php echo $data->ta; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="semester">Semester</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="semester" value="<?php echo $data->semester; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="progres">Progres</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="progres" value="<?php echo $data->progres; ?>">
                            </div>
                        </div>

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
    </section>
    </div>