<?php if (have_rows('modelli', 'option')): ?>
    <div id="loghi" class="loghi sezione text-center">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <?php while (have_rows('modelli', 'option')): the_row(); ?>
                    <div class="col-sm-6 col-lg-3">
                        <a href="<?= get_sub_field('link_pagina_modello'); ?>" class="d-block logo-modello">
                            <img src="<?= get_sub_field('logo_modello'); ?>" alt="logo">
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="d-flex justify-content-end">
                <a href="<?= get_field('link_pagina_modelli'); ?>" class="cta">Scopri tutti i modelli &raquo;</a>
            </div>
        </div>
    </div>
<?php endif; ?>