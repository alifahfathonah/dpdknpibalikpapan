<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-info py-3">
                    <h6 class="m-0 font-weight-bold text-white">Ubah Data Profil User</h6>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('auth/profil/'.$this->session->userdata('idusr')) ?>" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="txt_nama" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control form-control-sm" id="txt_nama" name="txt_nama" value="<?php echo $this->session->userdata('namausr') ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_pass" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control form-control-sm" id="txt_user" name="txt_user" value="<?php echo $this->session->userdata('userusr') ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_pass" class="col-sm-3 col-form-label">Password Baru</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control form-control-sm" id="txt_pass" name="txt_pass">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9 offset-3">
                                        <button type="submit" id="btn_save" class="btn btn-sm btn-warning"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                        <a href="<?php echo site_url('admin/view/home') ?>" class="btn btn-sm btn-danger"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal</a>
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
<script src="<?= base_url('asset/script/validasi_profil.js') ?>"></script>

</body></html>