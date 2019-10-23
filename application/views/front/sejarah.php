<?php $this->load->view('front/layouts/header') ?>

    <main id="main">
        <section id="portfolio">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title">Sejarah KNPI</h3>
                </header>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $informasi->sjrhinf ?>
                    </div>
                </div>
            </div>
        </section><!-- #portfolio -->
    </main>

<?php $this->load->view('front/layouts/footer') ?>
</body></html>
