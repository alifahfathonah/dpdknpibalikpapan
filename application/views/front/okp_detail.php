<?php $this->load->view('front/layouts/header') ?>

    <main id="main">
        <section id="team" class="wow fadeIn">
            <div class="container">
                <div class="section-header">
                    <h3><?= $okp->namaorg ?></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="<?= base_url('asset/organisasi/'.$okp->gbrketua) ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?= $okp->namaketua ?></h4>
                                    <span>Ketua</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="<?= base_url('asset/organisasi/'.$okp->gbrsekre) ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?= $okp->namasekre ?></h4>
                                    <span>Sekretaris</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="<?= base_url('asset/organisasi/'.$okp->gbrbenda) ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?= $okp->namabenda ?></h4>
                                    <span>Bendahara</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <?= $okp->susunorg ?>
                    </div>
                </div>
            </div>
        </section><!-- #portfolio -->
    </main>

<?php $this->load->view('front/layouts/footer') ?>
</body></html>
