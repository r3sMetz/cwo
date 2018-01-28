<div class="cwo_navbar">
	<div class="fullPageWrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-xs text-left-sm">
				    <?php if(!is_front_page()):?>
                        <a class="fadeLink" href="<?php echo home_url();?>">
                            <img src="<?php echo CWO_PNG_URI;?>/logo.png" alt="Celtic Warriors Otzenhausen">
                        </a>
				    <?php else:?>
                        <img src="<?php echo CWO_PNG_URI;?>/logo.png" alt="Celtic Warriors Otzenhausen">
					<?php endif;?>
				</div>
				<div class="col-sm-6 text-center-xs text-right-sm">
					<ul class="list-inline">
                        <?php if(!is_front_page()):?>
                            <li><a class="fadeLink whiteLink" href="<?php echo home_url();?>">Home</a></li>
                        <?php endif;?>
                        <?php foreach(r3_getMenue('HauptmenuDE') as $item):?>
                            <li><a class="fadeLink whiteLink" href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
                        <?php endforeach;?>
                    </ul>
				</div>
			</div>
		</div>
	</div>
</div>