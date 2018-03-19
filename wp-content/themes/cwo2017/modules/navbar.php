<div class="cwo_navbar">
	<div class="fullPageWrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text-center-xs text-left-sm font-heat" style="font-size:350%;">
				    <?if(!is_front_page()):?>
                        <a class="fadeLink" href="<?=home_url();?>">
                            CWO
                        </a>
				    <?else:?>
                        CWO
					<?endif;?>
				</div>
				<div class="col-sm-8 text-center-xs text-right-sm font-heat fontsize-bigger">
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