<?php $this->load->view('front/layouts/header') ?>

    <main id="main">
        <!--==========================
            Galeri
        ============================-->
        <section id="portfolio" class="clearfix">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title">Foto Galeri</h3>
                </header>
                <div class="row portfolio-container">
                    <?php  foreach ($galeri as $glr): ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow bounceInUp" data-wow-delay="0.1s">
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
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </section><!-- #portfolio -->
    </main>

<?php $this->load->view('front/layouts/footer') ?>
</body></html>
