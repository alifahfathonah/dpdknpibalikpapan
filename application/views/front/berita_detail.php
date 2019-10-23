<?php $this->load->view('front/layouts/header') ?>

    <main id="main">
        <section id="portfolio" class="clearfix">
            <div class="container">
                <header class="section-header">
                    <h4 class="section-title text-left"><?= $berita->namabrt ?></h4>
                </header>
                <div class="row portfolio-container">
                    <div class="col-lg-12 col-md-12 portfolio-item filter-web" data-wow-delay="0.1s">
                        <img src="<?= base_url('asset/berita/'.$berita->gbrbrt) ?>" class="img-fluid" alt=""><br> 
                        <p class="text-justify"><?= $berita->isibrt ?></p>
                    </div>
                </div>
            </div>
        </section><!-- #portfolio -->
    </main>

<?php $this->load->view('front/layouts/footer') ?>
</body></html>
