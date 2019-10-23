<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-info py-3">
                    <h6 class="m-0 font-weight-bold text-white">Tambah Data Galeri</h6>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('galeri/run/insert') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="txt_nama" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-sm" id="txt_nama" name="txt_nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_gmbr" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="txt_gmbr" id="txt_gmbr" class="form-control form-control-sm">
                                        <i>Gambar Harus Beresolusi 1280x720 Pixel</i>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-2">
                                        <button type="submit" id="btn_save" class="btn btn-sm btn-warning"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                        <a href="<?php echo site_url('admin/view/galeri') ?>" class="btn btn-sm btn-danger"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal</a>
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