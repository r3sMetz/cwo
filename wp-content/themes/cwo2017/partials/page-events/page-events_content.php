<div class="page-events_content puffer-both-lg">
    <div class="container">
		<? foreach ( cwo_getAllEvents() as $event ): ?>
            <div class="single_event">
                <div class="row">
                    <div class="col-md-12">
						<?php if ( get_field( 'vereinsintern', $event->ID) || 1 === 1 ):?>
                            <!-- <img src="<?=CWO_SVG_URI;?>/vereinsintern.svg" alt="CWO - Vereinsintern"> -->
                            <span style="background:red">Vereinsintern</span>
						<?php endif; ?>
                        <h2 class="dp-inline-block"><?= get_the_title( $event->ID ); ?></h2>
                        <h3 class="dp-inline-block"><? the_field( 'datum', $event->ID ); ?></h3>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        Spicy jalapeno bacon ipsum dolor amet corned beef hamburger tongue, shank swine tail sirloin ground round ham hock beef.
                        <a class="pull-right cwo-btn cwo-btn-red" href="<?the_permalink($event->ID);?>">Mehr erfahren</a>
                    </div>
                </div>
            </div>
		<? endforeach; ?>
    </div>
</div>