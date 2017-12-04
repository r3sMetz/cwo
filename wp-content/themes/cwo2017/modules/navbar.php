<div class="cwo_navbar">
	<div class="fullPageWrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-xs text-left-sm">
					<img src="<?php echo CWO_PNG_URI;?>/logo_w_font.png" alt="Celtic Warriors Otzenhausen">
				</div>
				<div class="col-sm-6 text-center-xs text-right-sm">
					<ul class="list-inline">
                        <?php foreach(r3_getMenue('HauptmenuDE') as $item):?>
                            <li><a class="fadeLink whiteLink" href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
                        <?php endforeach;?>
                    </ul>
				</div>
			</div>
		</div>
	</div>
</div>