<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header bg-info py-3">
                            <h6 class="m-0 font-weight-bold text-white">Ubah Data informasi</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?= site_url('informasi/run/update/'.$informasi->idinf) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for="txt_tlp" class="col-sm-2 col-form-label">Telepon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-sm" id="txt_tlp" name="txt_tlp" value="<?= $informasi->tlpinf ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for="txt_email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-sm" id="txt_email" name="txt_email" value="<?= $informasi->emailinf ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for="txt_fb" class="col-sm-2 col-form-label">Facebook</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-sm" id="txt_fb" name="txt_fb" value="<?= $informasi->fbinf ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for="txt_twit" class="col-sm-2 col-form-label">Twitter</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-sm" id="txt_twit" name="txt_twit" value="<?= $informasi->twitinf ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for="txt_ig" class="col-sm-2 col-form-label">Instagram</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-sm" id="txt_ig" name="txt_ig" value="<?= $informasi->iginf ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for="txt_almt" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea name="txt_almt" id="txt_almt" class="form-control form-control-sm"><?= $informasi->almtinf ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for="txt_susun" class="col-sm-2 col-form-label">Susunan</label>
                                            <div class="col-sm-10">
                                                <textarea name="txt_susun" id="txt_susun" class="form-control form-control-sm"><?= $informasi->susuninf ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for="txt_sjrh" class="col-sm-2 col-form-label">Sejarah KNPI</label>
                                            <div class="col-sm-10">
                                                <textarea name="txt_sjrh" id="txt_sjrh" class="form-control form-control-sm"><?= $informasi->sjrhinf ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-10 offset-2">
                                                <button type="submit" id="btn_save" class="btn btn-sm btn-warning"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                                <a href="<?php echo site_url('admin/view/informasi') ?>" class="btn btn-sm btn-danger"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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

        CKEDITOR.replace( 'txt_sjrh',{
                filebrowserBrowseUrl:roxyFileman+'/index.html',
                filebrowserImageBrowseUrl:roxyFileman+'/index.html?type=image',
                removeDialogTabs: 'link:upload;image:upload'
        }); 

    });
</script>

</body></html>