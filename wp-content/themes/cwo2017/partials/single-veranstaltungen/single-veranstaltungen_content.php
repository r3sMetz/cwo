<div class="single-veranstaltungen_content puffer-both-xl">
	<div class="container">
		<!-- Bandlogos-->
		<?if(get_field('alle_bandlogos')):?>
		<div class="row hidden-xs bandrow">
            <?foreach(get_field('alle_bandlogos') as $key => $logo):?>
                <div class="col-sm-4 gap-bottom-md text-center">
                    <?if(get_field('bandlink'.($key+1))):?>
                        <a href="<?the_field('bandlink'.($key+1));?>" target="_blank" class="se_bandlink">
                            <img class="maxImage" src="<?=$logo['url'];?>" alt="<?=$logo['title'];?>" data-link="<?the_field('bandlink'.($key+1));?>">
                        </a>
                    <?else:?>
                        <img class="maxImage" src="<?=$logo['url'];?>" alt="<?=$logo['title'];?>" data-link="<?the_field('bandlink'.($key+1));?>">
                    <?endif;?>
                </div>
            <?endforeach;?>
        </div>
        <?endif;?>
		<!-- Texting Top -->
		<div class="row">
		    <?if(get_field('infoblock_1')):?>
            <div class="col-sm-4 gap-mobile-bottom-md">
                <h2 class="font-heat fontsize-headline gap-bottom-sm"><?php the_field('uberschrift_infoblock_1');?></h2>
                <p>
                    <?foreach(cwo_buildList('infoblock_1',get_the_ID()) as $listpoint):?>
                        <?=$listpoint;?><br/>
                    <?endforeach;?>
                </p>
            </div>
            <?endif;?>
            <?if(get_field('infoblock_2')):?>
            <div class="col-sm-4">
                <h2 class="font-heat fontsize-headline gap-bottom-sm"><?php the_field('uberschrift_infoblock2');?></h2>
               <?foreach(cwo_buildList('infoblock_2',get_the_ID()) as $listpoint):?>
                    <?=$listpoint;?><br/>
                <?endforeach;?>
            </div>
            <?endif;?>
        </div>

        <?if(get_field('groser_textblock') || get_field('flyer')):?>
            <!-- Top Line -->
            <div class="row top-line">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <?php if(get_field('groser_textblock')):?>
            <!-- Texting WYSIWYG -->
            <div class="row">
                <div class="col-md-9 gap-both-sm">
                    <?=cwo_knaupWYSIWYG(get_field('groser_textblock'));?>
                </div>
            </div>
            <?php endif;?>


            <?php if(get_field('flyer')):?>
            <!-- Texting WYSIWYG -->
            <div class="row">
                <div class="col-md-8 gap-top-md">
                    <img class="maxImage" src="<?php echo get_field('flyer')['sizes']['medium_large'];?>" alt="Die Celtic Warriors Otzenhausen präsentieren: <?php the_title();?>">
                </div>
            </div>
            <?php endif;?>

            <!-- Bottom Line -->
            <div class="row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
        <?endif;?>

        <!-- Go Back -->
        <div class="row gap-top-sm">
            <div class="col-md-12">
                <a href="<?=get_permalink(13);?>" class="fadeLink cwo-btn cwo-btn-red"><i class="glyphicon glyphicon-circle-arrow-left"></i> Alle Veranstaltungen</a>
            </div>
        </div>
	</div>
</div>