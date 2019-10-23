<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-info">
                    <h6 class="m-0 font-weight-bold text-white">
                        Manajemen Data Pengurus Bidang
                    </h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr align="center">
                                <th width="5">No.</th>
                                <th width="40%">Nama</th>
                                <th width="20%">Jabatan</th>
                                <th width="100">Gambar</th>
                                <th width="50">Aksi</th>
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
            "dom": "Brt",
            "processing": true,
            "serverside": true,
            "ajax": {
                "url": "<?php echo site_url('bidang/data') ?>",
                "type": "GET"
            }
        });
    });
</script>

</body></html>