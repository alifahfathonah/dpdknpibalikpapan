<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-info py-3">
                    <h6 class="m-0 font-weight-bold text-white">Bendahara <?= $organisasi->namaorg ?></h6>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('organisasi/run/update_bendahara/'.$organisasi->idorg) ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="txt_benda" class="col-sm-2 col-form-label">Nama Bendahara</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="txt_benda" id="txt_benda" class="form-control form-control-sm" value="<?= $organisasi->namabenda ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="txt_gbr" class="col-sm-2 col-form-label">Foto Bendahara</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="txt_gbr" id="txt_gbr" class="form-control form-control-sm">
                                        <br>
                                        <img src="<?= base_url('asset/organisasi/'.$organisasi->gbrbenda) ?>" alt="<?= $organisasi->gbrbenda ?>" width="150" height="150">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-2">
                                        <button type="submit" id="btn_save" class="btn btn-sm btn-warning"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                        <a href="<?php echo site_url('admin/view/organisasi') ?>" class="btn btn-sm btn-danger"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('back/layouts/footer') ?>
</body></html>