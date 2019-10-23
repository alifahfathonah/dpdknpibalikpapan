<?php $this->load->view('front/layouts/header') ?>

    <!--==========================
        Intro Section
    ============================-->
    <section id="intro" class="clearfix">
        <div class="container">
            <div class="intro-img">
                <img src="<?= base_url('asset/front/img/logo_knpi.png') ?>" alt="" class="img-fluid float-right" width="280">
            </div>
            <div class="intro-info">
                <h2><br>KNPI<br>Kota Balikpapan</h2>
            </div>
        </div>
    </section><!-- #intro -->

    <main id="main">
        <!--==========================
            pengurus
        ============================-->
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
        </section><!-- #pengurus -->

        <!--==========================
            Kata bijak
        ============================-->
        <section id="testimonials" class="section-bg">
            <div class="container">
                <header class="section-header">
                    <h3>Kata-Kata Bijak</h3>
                </header>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="owl-carousel testimonials-carousel wow fadeInUp">
                            <?php foreach($kata as $kt): ?>
                            <div class="testimonial-item">
                                <img src="<?= base_url('asset/kata/'.$kt->gbrkata) ?>" class="testimonial-img" alt="">
                                <h3><?= $kt->namakata ?></h3>
                                <h4><?= $kt->jbtnkata ?></h4>
                                <p><?= $kt->isikata ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #kata bijak -->


        <!--==========================
            Galeri
        ============================-->
        <section id="portfolio" class="clearfix">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title">Foto Galeri</h3>
                </header>
                <div class="row portfolio-container">
                    <?php foreach($galeri as $glr): ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('asset/galeri/'.$glr->gbrglr) ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p><?= $glr->namaglr ?></p>
                                <div>
                                    <a href="<?= base_url('asset/galeri/'.$glr->gbrglr) ?>" class="link-preview" data-lightbox="portfolio" data-title="<?= $glr->namaglr ?>" title="Preview"><i class="ion ion-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- #portfolio -->
        <!--==========================
            Services Section
        ============================-->
        <section id="services" class="section-bg">
            <div class="container">
                <header class="section-header">
                    <h3>Berita Terbaru</h3>
                </header>
                <div class="row">
                    <?php foreach($berita as $brt): ?>
                    <div class="col-md-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="<?= site_url('welcome/view/berita-detail/'.$brt->slugbrt) ?>"><?= $brt->namabrt ?></a></h4>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- #services -->
    </main>

<?php $this->load->view('front/layouts/footer') ?>
</body></html>
