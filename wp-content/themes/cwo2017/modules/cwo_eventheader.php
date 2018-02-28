<header class="bg-std cwo_eventheader bg-events mobile-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Vereinsintern -->
                <? if (is_single() && get_field( 'vereinsintern') ): ?>
                    <img src="<?= CWO_SVG_URI; ?>/vereinsintern.svg" class="header_vereinsintern gap-bottom-md" alt="CWO - Vereinsintern">
                <?php endif; ?>

                <!-- Title -->
                <h1 class="font-demon fontsize-headline-big">
                    <?php the_title(); ?>
                </h1>
				<?php if ( is_single() ): ?>
					<!-- Datum -->
                    <h2 class="puffer-both-sm fontsize-headline"><?php the_field( 'datum' ); ?></h2>
				<?php endif; ?>
            </div>
        </div>
    </div>
</header>