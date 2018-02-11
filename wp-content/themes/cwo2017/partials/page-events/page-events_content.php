<div class="page-events_content gap-top-md">
	<div class="container">
		<?php foreach(cwo_getAllEvents() as $event):?>
			<div class="single_event gap-bottom-lg">
                <div class="row">
                    <div class="col-sm-4 pos-rel title-col">
                        <div class="the_date">
                        <span class="fontsize-headline-big"><?php echo $event->data_array[0];?></span><br/>
                        <span class="text-uppercase"><?php echo $event->data_array[1];?></span>
                        </div>
                        <h2 class="font-demon"><?php echo cwo_knaupTitle($event->ID);?></h2>
                    </div>
                    <div class="col-sm-5"><?php the_field('infoblock_2',$event->ID);?></div>
                    <div class="col-sm-1"><?php the_field('einlass',$event->ID);?>Uhr</div>
                    <div class="col-sm-2 text-right-sm">
                        <a href="<?php echo get_permalink($event->ID);?>" class="cwo-btn cwo-btn-red">mehr erfahren</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
            </div>
		<?php endforeach;?>
	</div>
</div>