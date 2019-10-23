<?php $this->load->view('front/layouts/header') ?>

    <main id="main">
        <!--==========================
        Contact Section
        ============================-->
        <section id="contact">
            <div class="container-fluid">
                <div class="section-header">
                    <h3>Kontak Kami</h3>
                </div>
                <div class="row wow fadeInUp">

                    <div class="col-lg-6">
                        <div class="map mb-4 mb-lg-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8814644894696!2d116.88812141427438!3d-1.2416693359281723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df14671a9c18479%3A0x21eb5c3be435130e!2sKNPI+Balikpapan!5e0!3m2!1sid!2sid!4v1562382759237!5m2!1sid!2sid" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-5 info">
                                <i class="ion-ios-location-outline"></i>
                                <p><?= $informasi->almtinf ?></p>
                            </div>
                            <div class="col-md-4 info">
                                <i class="ion-ios-email-outline"></i>
                                <p><?= $informasi->emailinf ?></p>
                            </div>
                            <div class="col-md-3 info">
                                <i class="ion-ios-telephone-outline"></i>
                                <p><?= $informasi->tlpinf ?></p>
                            </div>
                        </div>

                        <div class="form">
                            <form action="<?= site_url('kontak/run/insert') ?>" method="post">
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="txt_nama" class="form-control" id="txt_nama" placeholder="Nama Anda" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" class="form-control" name="txt_email" id="txt_email" placeholder="Email Anda" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="txt_pesan" rows="5" placeholder="Ketikkan Pesan" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" title="Send Message">Kirim Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #contact -->
  </main>

<?php $this->load->view('front/layouts/footer') ?>
</body></html>
