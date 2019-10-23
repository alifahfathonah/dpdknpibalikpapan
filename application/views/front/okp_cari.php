<?php $this->load->view('front/layouts/header') ?>

    <main id="main">
        <section id="services" class="section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="<?= site_url('welcome/view/okp-cari') ?>" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="txt_cari" placeholder="Silakan Ketik Disini..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <header class="section-header">
                    <h3>Daftar OKP</h3>
                </header>
                <div class="row">
                    <?php foreach($okp as $org): ?>
                    <div class="col-md-4" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-paper-outline" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="<?= site_url('welcome/view/okp-detail/'.$org->idorg) ?>"><?= $org->namaorg ?></a></h4>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- #services -->
    </main>

<?php $this->load->view('front/layouts/footer') ?>
</body></html>