<main class="page-events_content gap-top-md">
	<div class="container">
	    <div class="row gap-bottom-md">
            <div class="font-heat pos-rel" id="fragment_slider">
                <span class="fragment_link active" data-fragment-class="coming">Bevorstehend</span><span class="fragment_link" data-fragment-class="past">Zurückliegend</span>
                <span id="fragment_bar" class="coming"></span>
            </div>
        </div>
        <div id="page-events_animation_container">
            <!-- Events Filtered by coming or Past -->
            <?php foreach(cwo_getAllEvents() as $key => $filtered):?>
                <div class="page-events-filter<?php echo $key=="coming"?'':' hidden';?>" data-filter="<?php echo $key;?>">
                    <?php foreach($filtered as $event):?>
                    <div class="single_event gap-bottom-lg">
                        <div class="row single_event_content">
                            <!-- Datum -->
                            <div class="col-sm-1">
                                <span class="fontsize-headline-big"><?php echo $event->date_array[0];?></span><br/>
                                <span class="text-uppercase"><?php echo $event->date_array[1];?></span><?php echo $key=="past"?' <span>'.$event->date_array[2].'</span>':'';?>
                            </div>

                            <!-- Title -->
                            <div class="col-sm-3 col-md-4 pos-rel title-col">
                                <?php if(get_field('vereinsintern',$event->ID)):?>
                                    <img src="<?php echo CWO_SVG_URI;?>/vereinsintern.svg" class="vereinsintern_image" alt="CWO - Vereinsintern">
                                <?php endif;?>
                                <h2 class="font-heat fontsize-bigger"><?php echo get_the_title($event->ID);?></h2>
                            </div>

                            <!-- Infoblock -->
                            <div class="col-sm-4 col-md-3 col-lg-4">
                                <?php $the_info = cwo_buildList('infoblock_2',$event->ID);?>
                                <?php echo $the_info[0] ? $the_info[0] : null;?> <br class="hidden-xs"/>
                                <?php echo $the_info[1] ? $the_info[1] : null;?> <?php echo $the_info[2] ? $the_info[2] : null;?>
                            </div>

                            <!-- Uhrzeit -->
                            <div class="col-sm-1">
                                <?php the_field('einlass',$event->ID);?>
                            </div>

                            <!-- Button -->
                            <div class="col-sm-3 col-lg-2 text-right-sm">
                                <a href="<?php echo get_permalink($event->ID);?>" class="cwo-btn cwo-btn-red fadeLink">mehr erfahren</a>
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
            <?php endforeach;?>
        </div>
	</div>
</main>