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
                            Password Telah Berhasil <strong>Diubah</strong>
                        </div>
                    <?php
                    }
                    ?>
                    <table class="text-dark">
                        <?php
                        foreach ($admin as $data) {
                        ?>
                            <tr>
                                <td width="100px">NIP / NIDN </td>
                                <td width="10px"> : </td>
                                <td> <?php echo $data->nip; ?> </td>
                            </tr>
                            <tr>
                                <td width="100px">Nama</td>
                                <td width="10px">:</td>
                                <td><?php echo $data->nama; ?></td>
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
                    <form action="<?php echo base_url(); ?>update_profile_admin" method="post" class="form-horizontal form-bordered">
                        <?php
                        foreach ($admin as $data) {
                        ?>
                            <h4 class="mb-xlg">Informasi Diri</h4>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nip">NIP / NIDN</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="nip" value="<?php echo $data->nip; ?>" required readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nama">Nama</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $data->nama; ?>" required>
                                    </div>
                                </div>
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