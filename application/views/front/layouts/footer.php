 <footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Navigasi</h4>
                    <ul>
                        <li><a href="<?= site_url('welcome/view/beranda') ?>">Beranda</a></li>
                        <li><a href="<?= site_url('welcome/view/galeri') ?>">Galeri</a></li>
                        <li><a href="<?= site_url('welcome/view/berita') ?>">Berita</a></li>
                        <li><a href="<?= site_url('welcome/view/kontak') ?>">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>Kontak Kami</h4>
                    <p>
                        <?= $informasi->almtinf ?><br>
                        <strong>Telepon:</strong> <?= $informasi->tlpinf ?><br>
                        <strong>Email:</strong> <?= $informasi->emailinf ?><br>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Info Terbaru</h4>
                    <div class="social-links">
                        <a href="<?= $informasi->fbinf ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="<?= $informasi->twitinf ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="<?= $informasi->iginf ?>" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            <?= date('Y') ?> &copy; Copyright <strong><?= TITLE_BAR ?></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> and General Penta
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="<?= base_url('asset/front/lib/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('asset/front/lib/jquery/jquery-migrate.min.js') ?>"></script>
<script src="<?= base_url('asset/front/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('asset/front/lib/easing/easing.min.js') ?>"></script>
<script src="<?= base_url('asset/front/lib/mobile-nav/mobile-nav.js') ?>"></script>
<script src="<?= base_url('asset/front/lib/wow/wow.min.js') ?>"></script>
<script src="<?= base_url('asset/front/lib/waypoints/waypoints.min.js') ?>"></script>
<script src="<?= base_url('asset/front/lib/counterup/counterup.min.js') ?>"></script>
<script src="<?= base_url('asset/front/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('asset/front/lib/isotope/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('asset/front/lib/lightbox/js/lightbox.min.js') ?>"></script>

<!-- Contact Form JavaScript File -->
<script src="<?= base_url('asset/front/contactform/contactform.js') ?>"></script>

<!-- Template Main Javascript File -->
<script src="<?= base_url('asset/front/js/main.js') ?>"></script>