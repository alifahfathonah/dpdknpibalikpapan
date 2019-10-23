<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-info py-3">
                    <h6 class="m-0 font-weight-bold text-white">Ubah Data Kata</h6>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('kata/run/update/'.$kata->idkata) ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="txt_nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="txt_nama" name="txt_nama" value="<?= $kata->namakata ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_gmbr" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control form-control-sm" id="txt_gmbr" name="txt_gmbr">
                                        <br>
                                        <img src="<?= base_url('asset/kata/'.$kata->gbrkata) ?>" alt="<?= $kata->gbrkata ?>" width="200" height="200">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-2">
                                        <button type="submit" id="btn_save" class="btn btn-sm btn-warning"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                        <a href="<?php echo site_url('admin/view/kata') ?>" class="btn btn-sm btn-danger"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="txt_jbtn" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="txt_jbtn" name="txt_jbtn" value="<?= $kata->jbtnkata ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_isi" class="col-sm-2 col-form-label">Quote</label>
                                    <div class="col-sm-10">
                                        <textarea name="txt_isi" id="txt_isi" class="form-control form-control-sm"><?= $kata->isikata ?></textarea>
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