<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-info py-3">
                    <h6 class="m-0 font-weight-bold text-white">Susunan <?= $organisasi->namaorg ?></h6>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('organisasi/run/update_susun/'.$organisasi->idorg) ?>" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="txt_nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="txt_nama" name="txt_nama" value="<?= $organisasi->namaorg ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="txt_jns" class="col-sm-2 col-form-label">Jenis Lembaga</label>
                                    <div class="col-sm-4">
                                        <select name="txt_jns" id="txt_jns" class="form-control form-control-sm">
                                            <option value="PK" <?= ($organisasi->jnsorg == "PK") ? "selected" : "" ?>>P. Kecamatan</option>
                                            <option value="OKP" <?= ($organisasi->jnsorg == "OKP") ? "selected" : "" ?>>OKP</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_susun" class="col-sm-2 col-form-label">Susunan Struktur</label>
                                    <div class="col-sm-10">
                                        <textarea name="txt_susun" id="txt_susun" class="form-control form-control-sm"><?= $organisasi->susunorg ?></textarea>
                                    </div>
                                </div>
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
<script>
    var roxyFileman = '<?php echo base_url('asset/vendor/fileman/') ?>'; 

    $(document).ready(function () {

        CKEDITOR.replace( 'txt_susun',{
                filebrowserBrowseUrl:roxyFileman+'/index.html',
                filebrowserImageBrowseUrl:roxyFileman+'/index.html?type=image',
                removeDialogTabs: 'link:upload;image:upload'
        }); 

    });
</script>
</body></html>