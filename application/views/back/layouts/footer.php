
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?= TITLE_BAR; echo ' '.date('Y') ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah Anda Yakin Ingin Keluar ?</div>
        <div class="modal-footer">
          <button class="btn btn-dark" type="button" data-dismiss="modal"><i class="fas fa-undo"></i> &nbsp;Batal</button>
          <a class="btn btn-info" href="<?= site_url('auth/logout') ?>"><i class="fas fa-check"></i> &nbsp; Setuju</a>
        </div>
      </div>
    </div>
  </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('asset/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('asset/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('asset/js/sb-admin-2.js') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('asset/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/ckeditor/ckeditor.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/chart.js/Chart.min.js') ?>"></script>