<?php if (have_rows('foto_modello')): ?>
    <div id="contenuto-modello" class="contenuto-modello sezione">
        <div class="container">
            <?php while (have_rows('foto_modello')): the_row(); ?>
                <div class="row singolo-colore align-items-center">

                    <div class="col-md-6">
                        <img class="colore_modello" src="<?= get_sub_field('colore_modello'); ?>" alt="be details sunglasses colore modello">
                    </div>

                    <div class="col-md-6">
                        <img class="foto_modello" src="<?= get_sub_field('foto_modello'); ?>" alt="be details sunglasses foto modello">
                    </div>

                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>