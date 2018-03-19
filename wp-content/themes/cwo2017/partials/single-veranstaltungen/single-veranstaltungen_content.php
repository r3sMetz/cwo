<div class="single-veranstaltungen_content puffer-both-xl">
	<div class="container">
		<!-- Bandlogos-->
		<?if(get_field('alle_bandlogos')):?>
		<div class="row hidden-xs">
            <?foreach(get_field('alle_bandlogos') as $logo):?>
                <div class="col-sm-4 gap-bottom-md text-center">
                    <img class="maxImage" src="<?=$logo['url'];?>" alt="<?=$logo['title'];?>">
                </div>
            <?endforeach;?>
        </div
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

        <?if(get_field('groser_textblock')):?>
            <!-- Top Line -->
            <div class="row top-line">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <!-- Texting WYSIWYG -->
            <div class="row">
                <div class="col-md-9 gap-bottom-sm">
                    <?=cwo_knaupWYSIWYG(get_field('groser_textblock'));?>
                </div>
            </div>

            <!-- Bottom Line -->
            <div class="row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
        <?endif;?>
	</div>
</div>