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
            <a class="navbar-brand" href="#">
                <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="logo" width="3177" height="2024">
            </a>
            <div class="social-list">
                <div class="social-item">
                    <img src="<?= get_template_directory_uri(); ?>/img/instagram.svg" alt="facebook">
                </div>
                <div class="social-item">
                    <img src="<?= get_template_directory_uri(); ?>/img/facebook.svg" alt="facebook">
                </div>
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
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>