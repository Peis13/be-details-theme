<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="google-site-verification" content="_fiXYvlBMip06AVhtBamhiLQfxz53AuLVUwDY1SuTe0"/>
    <title></title>

    <?php wp_head(); ?>
</head>
<body>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= get_home_url(); ?>">
                <img src="<?= get_template_directory_uri(); ?>/img/loghi/logo.png" alt="logo">
            </a>
            <div class="social-menu">
                <a class="social-link" href="#">
                    <img src="<?= get_template_directory_uri(); ?>/img/instagram.svg" alt="facebook">
                </a>
                <a class="social-link" href="#">
                    <img src="<?= get_template_directory_uri(); ?>/img/facebook.svg" alt="facebook">
                </a>
            </div>
<!--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"-->
<!--                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                <img class="menu-icon" src="--><?//= get_template_directory_uri(); ?><!--/img/menu.svg" alt="menu icon" width="16"-->
<!--                height="16">-->
<!--            </button>-->
            <button class="navbar-toggler burger-btn">
                <img src="<?= get_template_directory_uri(); ?>/img/icon-menu.svg" alt="menu icon" width="16"
                     height="16">
            </button>
            <div class="close-menu">
                <img src="<?= get_template_directory_uri(); ?>/img/close-menu.svg" alt="menu icon" width="16"
                     height="16">
            </div>

            <!--navbar-->
            <?php wp_nav_menu([
                'menu'            => 'menu-superior',
                'theme_location'  => 'menu-superior',
                'depth'           => 2,
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarNavDropdown',
                'menu_class'      => 'navbar-nav',
                'dropdown_class'  => 'dropdown-menu',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ]); ?>
        </div>
    </nav>
</header>