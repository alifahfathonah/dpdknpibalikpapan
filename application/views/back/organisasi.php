<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-info">
                    <h6 class="m-0 font-weight-bold text-white">
                        Manajemen Data Pengurus Kecamatan dan OKP
                        <a href="<?= site_url('admin/view/organisasi-tambah') ?>" class="btn btn-sm btn-warning float-right"><i class="fas fa-plus fa-sm"></i> &nbsp; Tambah</a>
                    </h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr align="center">
                                <th width="5">No.</th>
                                <th width="250">Nama</th>
                                <th width="150">Lembaga</th>
                                <th width="45%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('back/layouts/footer') ?>

<script>
    $(document).ready(function () {
        table = $('#dataTable').DataTable({
            "processing": true,
            "serverside": true,
            "ajax": {
                "url": "<?php echo site_url('organisasi/data') ?>",
                "type": "GET"
            }
        });
    });

    function deleteData(id) {
        if (confirm("Apakah Anda Yakin Ingin Menghapus Data ?")) {
            $.ajax({
                url: "<?php echo site_url('organisasi/run/delete/') ?>"+id,
                type: "POST",
                success: function(data){
                    table.ajax.reload();
                },
                error: function(){
                    alert('data tidak dapat menghapus');
                }
            });
        }
    }
</script>

</body></html>