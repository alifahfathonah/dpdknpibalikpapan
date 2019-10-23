<?php $this->load->view('front/layouts/header') ?>

    <main id="main">
        <!--==========================
            berita
        ============================-->
        <section id="services" class="section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="<?= site_url('welcome/view/berita-cari') ?>" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="txt_cari" placeholder="Silakan Ketik Disini..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <header class="section-header">
                    <h3>Berita Terbaru</h3>
                </header>
                <div class="row">
                    <?php  foreach ($berita as $brt): ?>
                    <div class="col-md-4" data-wow-duration="1.4s">
                        <div class="box">
                            <h5 class="text-left">
                                <a href="<?= site_url('welcome/view/berita-detail/'.$brt->slugbrt) ?>"><?= $brt->namabrt ?></a>
                            </h5>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </section><!-- #berita -->
    </main>

<?php $this->load->view('front/layouts/footer') ?>
</body></html>
