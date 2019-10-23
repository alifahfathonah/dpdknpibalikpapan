<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-9">
                    <div class="card shadow mb-4">
                        <div class="card-header bg-info py-3">
                            <h6 class="m-0 font-weight-bold text-white">Ubah Data Berita</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?= site_url('berita/run/update/'.$berita->idbrt) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="txt_nama" class="col-sm-2 col-form-label">Judul</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-sm" id="txt_nama" name="txt_nama" value="<?= $berita->namabrt ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="txt_gmbr" class="col-sm-3 col-form-label">Gambar</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="txt_gmbr" id="txt_gmbr" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for="txt_isi" class="col-sm-1 col-form-label">Isi</label>
                                            <div class="col-sm-11">
                                                <textarea name="txt_isi" id="txt_isi" class="form-control form-control-sm"><?= $berita->isibrt ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-11 offset-1">
                                                <button type="submit" id="btn_save" class="btn btn-sm btn-warning"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                                <a href="<?php echo site_url('admin/view/berita') ?>" class="btn btn-sm btn-danger"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow mb-4">
                        <div class="card-header bg-info py-3">
                            <h6 class="m-0 font-weight-bold text-white text-center">Gambar</h6>
                        </div>
                        <div class="card-body text-center">
                            <img class="img-fluid" src="<?= base_url('asset/berita/'.$berita->gbrbrt) ?>" alt="<?= $berita->gbrbrt ?>" width="180" height="180">
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

        CKEDITOR.replace( 'txt_isi',{
                filebrowserBrowseUrl:roxyFileman+'/index.html',
                filebrowserImageBrowseUrl:roxyFileman+'/index.html?type=image',
                removeDialogTabs: 'link:upload;image:upload'
        }); 

    });
</script>

</body></html>