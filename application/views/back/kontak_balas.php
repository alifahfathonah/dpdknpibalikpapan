<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-info py-3">
                    <h6 class="m-0 font-weight-bold text-white">Lihat Pesan Kontak Masuk</h6>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('kontak/run/update/'.$kontak->idkntk) ?>" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="txt_nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="txt_nama" name="txt_nama" value="<?= $kontak->namakntk ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="txt_email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="txt_email" id="txt_email" class="form-control form-control-sm" value="<?= $kontak->emailkntk ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="txt_pesan" class="col-sm-1 col-form-label">Pesan</label>
                                    <div class="col-sm-11">
                                        <textarea name="txt_pesan" id="txt_pesan" class="form-control form-control-sm" readonly><?= $kontak->pesankntk ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_balas" class="col-sm-1 col-form-label">Balasan Pesan</label>
                                    <div class="col-sm-11">
                                        <textarea name="txt_balas" id="txt_balas" class="form-control form-control-sm"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-11 offset-1">
                                        <button type="submit" id="btn_save" class="btn btn-sm btn-warning"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                        <a href="<?php echo site_url('admin/view/kontak') ?>" class="btn btn-sm btn-danger"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal</a>
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
<script>
    var roxyFileman = '<?php echo base_url('asset/vendor/fileman/') ?>'; 

    $(document).ready(function () {

        CKEDITOR.replace( 'txt_balas',{
                filebrowserBrowseUrl:roxyFileman+'/index.html',
                filebrowserImageBrowseUrl:roxyFileman+'/index.html?type=image',
                removeDialogTabs: 'link:upload;image:upload'
        }); 

    });
</script>

</body></html>