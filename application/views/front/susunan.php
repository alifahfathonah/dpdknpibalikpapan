<?php $this->load->view('front/layouts/header') ?>

    <main id="main">
        <section id="team" class="wow fadeIn">
            <div class="container">
                <div class="section-header">
                    <h3>Pengurus</h3>
                </div>
                <div class="row">
                    <?php foreach($pengurus as $pngrs): ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="<?= base_url('asset/pengurus/'.$pngrs->gbrpngrs) ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?= $pngrs->namapngrs ?></h4>
                                    <span><?= $pngrs->jbtnpngrs ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title">Susunan Pengurus</h3>
                </header>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="15%">Foto</th>
                                    <th width="40">Nama</th>
                                    <th width="35%">Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach($bidang as $bdg): 
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td align="center"><img class="img-fluid" src="<?= base_url('asset/bidang/'.$bdg->gbrbdng) ?>" alt="foto pengurus" width="100" height="125"></td>
                                    <td><?= $bdg->namabdng ?></td>
                                    <td><?= $bdg->jbtnbdng ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section><!-- #portfolio -->
    </main>

<?php $this->load->view('front/layouts/footer') ?>
</body></html>
