<div class="fullPageWrapper">
	<div class="front-page_history bg-std puffer-both-xxl">
		<div class="container">
			<div class="row">
				<!-- Images -->
				<div class="col-md-2 hidden-xs hidden-sm">
					<img class="maxImage gap-bottom-md" src="<?php cwo_theACFImage(get_the_ID(),'bild_links-langlich');?>" alt="CWO - Bildergallerie">
					<!-- <a class="cwo-btn cwo-btn-red fullWidth fadeLink" href="<?php echo get_permalink(15);?>">Bildergalerie</a> -->
				</div>
				<div class="col-md-3 hidden-xs hidden-sm">
					<img class="maxImage gap-bottom-md" src="<?php cwo_theACFImage(get_the_ID(),'bild_rechts-oben');?>" alt="CWO - Bildergalerie">
					<img class="maxImage" src="<?php cwo_theACFImage(get_the_ID(),'bild_rechts-unten');?>" alt="CWO - Bildergalerie">
				</div>
				<!-- Middle -->
				<div class="col-md-2s front-page_history_middle gap-mobile-bottom-lg">
                    <span class="v-line visible-md visible-lg"></span>
					<h2 class="text-center fontsize-headline font-heat padded">
					    <span class="dashed_line"></span><span class="dashed_text">History</span><span class="dashed_line"></span>
                    </h2>
					<span class="v-line visible-md visible-lg"></span>
				</div>
				<!-- Text -->
				<div class="col-md-5">
					<img class="maxImage" src="<?php echo CWO_PNG_URI;?>/skull_history.png" alt="CWO - History">
					<?php $the_history = build_history_array();?>
					<div class="the_history gap-bottom-sm">
                        <?php foreach($the_history as $page):?>
                            <p class="history_page">
                            <?php echo $page;?>
                            </p>
                        <?php endforeach;?>
                    </div>
                    <ul class="list-inline the_history_navigation">
                        <?php foreach ($the_history as $key => $page):?>
                            <li data-index="<?php echo $key;?>"<?php echo $key===0 ? ' class="active"' : '';?>></li>
                        <?php endforeach;?>
                    </ul>
				</div>
			</div>
		</div>
	</div>
</div>