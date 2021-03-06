<div class="fullPageWrapper puffer-both-xl">
	<div class="cwo_footer">
		<div class="container">
			<div class="row cwo_footer_content">
				<div class="col-md-3">
					<ul class="list-inline dashed-top-left half-width font-heat fontsize-bigger">
                        <li><a class="fadeLink whiteLink <?php echo get_the_ID()==342?'navactive':'';?>" href="<?php echo get_permalink(342);?>">Impressum</a></li>
                        <li><a class="fadeLink whiteLink <?php echo get_the_ID()==473?'navactive':'';?>" href="<?php echo get_permalink(473);?>">Datenschutz</a></li>
					</ul>
				</div>
				<div class="col-md-3">
				    <?php if(get_the_ID() === 282):?>
				        <span class="cwo-btn cwo-btn-red cwo_loc_back">Abbrechen</span>
				    <?php else:?>
					    <a href="<?php echo get_permalink(282);?>" class="cwo-btn cwo-btn-red fadeLink">Newsletter abonnieren</a>
					<?php endif;?>
				</div>
				<div class="col-md-3">
                    <img class="maxImage" src="<?php echo CWO_PNG_URI;?>/against_racism.png" alt="CWO - Against Racism">
                </div>
			</div>
			<div class="row gap-top-sm">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
		</div>
	</div>
</div>