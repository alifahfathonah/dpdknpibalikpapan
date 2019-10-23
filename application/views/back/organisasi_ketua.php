<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-info py-3">
                    <h6 class="m-0 font-weight-bold text-white">Ketua <?= $organisasi->namaorg ?></h6>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('organisasi/run/update_ketua/'.$organisasi->idorg) ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="txt_ketua" class="col-sm-2 col-form-label">Nama Ketua</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="txt_ketua" id="txt_ketua" class="form-control form-control-sm" value="<?= $organisasi->namaketua ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="txt_gbr" class="col-sm-2 col-form-label">Foto Ketua</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="txt_gbr" id="txt_gbr" class="form-control form-control-sm">
                                        <br>
                                        <img src="<?= base_url('asset/organisasi/'.$organisasi->gbrketua) ?>" alt="<?= $organisasi->gbrketua ?>" width="150" height="150">
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