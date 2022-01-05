<div id="intro" class="intro sezione text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2><?= get_field('title_intro') ?></h2>
                <div class="content"><?= get_field('home_intro') ?></div>
            </div>
        </div>
    </div>
</div>

<div id="loghi" class="loghi text-center">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-sm-6 col-lg-3">
                <a class="d-block" href="<?= get_home_url(); ?>">
                    <img src="<?= get_template_directory_uri(); ?>/img/loghi/logo-dettagli.jpeg" alt="logo">
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a class="d-block" href="<?= get_home_url(); ?>">
                    <img src="<?= get_template_directory_uri(); ?>/img/loghi/logo-dettagli.jpeg" alt="logo">
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a class="d-block" href="<?= get_home_url(); ?>">
                    <img src="<?= get_template_directory_uri(); ?>/img/loghi/logo-nicla.jpeg" alt="logo">
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a class="d-block" href="<?= get_home_url(); ?>">
                    <img src="<?= get_template_directory_uri(); ?>/img/loghi/logo-mariah.png" alt="logo">
                </a>
            </div>
        </div>
    </div>
</div>