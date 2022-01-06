<?php if (have_rows('modelli', 'option')): ?>
<div id="modelli" class="modelli">

    <?php while (have_rows('modelli', 'option')): the_row();

    $rowDirection = 'flex-row';
    $sideEffect = 'right';
    if (get_row_index() % 2 == 0) {
        $rowDirection = 'flex-row-reverse';
        $sideEffect = 'left';
    } ?>

        <div class="modello sezione">
            <div class="container">
                <div class="row <?= $rowDirection; ?>">
                    <div class="logo-modello col-lg-4 d-flex flex-column justify-content-center align-items-center">
                        <div class="logo-image">
                            <img src="<?= get_sub_field('logo_modello'); ?>" class="mb-2" alt="logo">
                        </div>
                        <a href="<?= get_sub_field('link_pagina_modello'); ?>" class="cta">Scopri &raquo;</a>
                    </div>

                    <div class="col-lg-8">
                        <a href="<?= get_sub_field('link_pagina_modello'); ?>" class="link-cover-modello d-block overflow-hidden">
                            <img class="cover-modello <?= $sideEffect; ?> animated" src="<?= get_sub_field('cover_modello'); ?>" alt="be details sunglasses">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
</div>
<?php endif; ?>