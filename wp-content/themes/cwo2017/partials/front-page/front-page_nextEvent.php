<?php $nextEvent = cwo_nextEvent(); if($nextEvent):?>
<div class="front-page_nextEvent bg-std puffer-both-xxl">
	<div class="container">
		<div class="row gap-bottom-sm">
			<div class="col-md-12">
				<h2 class="font-heat fontsize-headline dashed-headline gap-bottom-lg text-center">
					<span class="dashed_line"></span>
					<span class="dashed_text">Next Event</span>
					<span class="dashed_line"></span>
				</h2>
			</div>
		</div>
		<!-- Prelines -->
		<div class="row gap-bottom-md">
			<div class="col-md-4">
				Die Celtic Warriors Otzenhausen präsentieren:
			</div>
			<div class="col-md-4 hidden-xs hidden-sm">
				Mit:
			</div>
			<div class="col-md-4 hidden-xs hidden-sm">
				Info:
			</div>
		</div>
		<!-- Next Event Data -->
		<div class="row">
			<div class="col-md-4 gap-mobile-bottom-lg">
			    <?php if(get_field('vereinsintern',$nextEvent)):?>
				    <img class="front-page_nextEvent_intern gap-bottom-md" src="<?php echo CWO_SVG_URI;?>/vereinsintern.svg" alt="CWO - Vereinsintern"/>
                <?php endif;?>
				<h3 class="font-heat fontsize-headline gap-bottom-lg"><?php the_field('datum',$nextEvent);?></h3>
				<h3 class="font-heat fontsize-headline-big"><?php echo get_the_title($nextEvent);?></h3>
			</div>
			<div class="col-md-4 gap-mobile-bottom-lg">
				<ul class="list-unstyled font-heat text-uppercase feature_list fontsize-bigger">
					<?php foreach(cwo_buildList('features',$nextEvent) as $feature):?>
					    <li><?php echo $feature;?></li>
					<?php endforeach;?>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="list-unstyled">
					<?php foreach(cwo_buildList('infoblock_1',$nextEvent) as $info):?>
					    <li><?php echo $info;?></li>
					<?php endforeach;?>
				</ul>
				<ul class="list-unstyled gap-bottom-md">
					<?php foreach(cwo_buildList('infoblock_2',$nextEvent) as $info):?>
					    <li><?php echo $info;?></li>
					<?php endforeach;?>
				</ul>
				<a href="<?php echo get_permalink($nextEvent);?>" class="cwo-btn cwo-btn-red fadeLink">mehr erfahren</a>
			</div>
		</div>
	</div>
</div>
<?php endif;?>