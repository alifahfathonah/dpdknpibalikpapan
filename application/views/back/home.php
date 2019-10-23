<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            
            <!-- Content Row -->
            <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Pengurus Kecamatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pk ?></div>
                            </div>
                            <div class="col-auto">
                            <i class="fas fa-map fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">O K P</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_okp ?></div>
                            </div>
                            <div class="col-auto">
                            <i class="fas fa-map fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Berita</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_berita ?></div>
                                </div>
                                <div class="col-auto">
                                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Galeri</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_galeri ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file-image fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Row -->

            <div class="row">
                <div class="col-6 ">
                    <div class="card mb-3">
                        <div class="card-header bg-info text-white text-center">
                            <strong>Data User Login</strong>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Nama Lengkap &nbsp; &nbsp; &nbsp;:
                                    <div class="float-right"><?= $this->session->userdata('namausr') ?></div>
                                </li>
                                <li class="list-group-item">
                                    Username &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
                                    <div class="float-right"><?= $this->session->userdata('userusr') ?></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3">
                        <div class="card-header bg-info text-white text-center">
                            <strong>Data Server Website</strong>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Web Server Address &nbsp; &nbsp; &nbsp;:
                                    <div class="float-right"><?= $_SERVER['SERVER_NAME'] ?></div>
                                </li>
                                <li class="list-group-item">
                                    Web IP Address&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
                                    <div class="float-right"><?= $_SERVER['SERVER_ADDR'] ?></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
     <!-- End of Main Content -->

<?php $this->load->view('back/layouts/footer') ?>

</body></html>