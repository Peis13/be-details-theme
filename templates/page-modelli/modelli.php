<?php if (have_rows('modelli', 'option')): ?>
<div id="modelli" class="modelli sezione">

    <?php while (have_rows('modelli', 'option')): the_row();

    $offset = '';
    $sideEffect = 'right';
    if (get_row_index() % 2 == 0) {
        $offset = 'offset-lg-6';
        $sideEffect = 'left';
    } ?>

        <div class="modello mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 <?= $offset; ?>">
                        <a href="<?= get_sub_field('link_pagina_modello'); ?>"
                           class="link-cover-modello d-block overflow-hidden">
                            <div class="overlay"></div>
                            <img class="cover-modello <?= $sideEffect; ?> animated" src="<?= get_sub_field('cover_modello'); ?>" alt="be details sunglasses">

                            <div class="logo-image">
                                <img src="<?= get_sub_field('logo_modello'); ?>" class="mb-2" alt="logo">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
</div>
<?php endif; ?>
