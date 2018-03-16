<div class="cwo_navbar">
	<div class="fullPageWrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-xs text-left-sm">
				    <?if(!is_front_page()):?>
                        <a class="fadeLink" href="<?=home_url();?>">
                            <img src="<?=CWO_PNG_URI;?>/logo.png" alt="Celtic Warriors Otzenhausen">
                        </a>
				    <?else:?>
                        <img src="<?=CWO_PNG_URI;?>/logo.png" alt="Celtic Warriors Otzenhausen">
					<?endif;?>
				</div>
				<div class="col-sm-6 text-center-xs text-right-sm">
					<ul class="list-inline">
                        <?if(!is_front_page()):?>
                            <li><a class="fadeLink whiteLink" href="<?=home_url();?>">Home</a></li>
                        <?endif;?>
                        <?foreach(r3_getMenue('HauptmenuDE') as $item):?>
                            <li><a class="<?=$item->classes[0]? $item->classes[0] : 'fadeLink';?> whiteLink" href="<?=$item->url;?>"><?=$item->title;?></a></li>
                        <?endforeach;?>
                    </ul>
				</div>
			</div>
		</div>
	</div>
</div>