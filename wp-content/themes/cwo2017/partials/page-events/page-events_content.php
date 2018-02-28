<div class="page-events_content gap-top-md">
	<div class="container">
		<?php foreach(cwo_getAllEvents() as $event):?>
			<div class="single_event gap-bottom-lg">
                <div class="row single_event_content">
                    <div class="col-sm-1">
                        <span class="fontsize-headline-big"><?= $event->data_array[0];?></span><br/>
                        <span class="text-uppercase"><?= $event->data_array[1];?></span>
                    </div>
                    <div class="col-sm-3 pos-rel title-col">
                        <? if(get_field('vereinsintern',$event->ID)):?>
                            <img src="<?=CWO_SVG_URI;?>/vereinsintern.svg" class="vereinsintern_image" alt="CWO - Vereinsintern">
                        <?php endif;?>
                        <h2 class="font-demon"><?php echo cwo_knaupTitle($event->ID);?></h2>
                    </div>
                    <div class="col-sm-4 col-md-5">
                        <?php $the_info = cwo_buildList('infoblock_2',$event->ID);?>
                        <?php echo $the_info[0] ? $the_info[0] : null;?> <br class="hidden-xs"/>
                        <?php echo $the_info[1] ? $the_info[1] : null;?> <?php echo $the_info[2] ? $the_info[2] : null;?>
                    </div>
                    <div class="col-sm-1">
                        <?php the_field('einlass',$event->ID);?>Uhr
                    </div>
                    <div class="col-sm-3 col-md-2 text-right-sm">
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