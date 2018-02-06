<div class="fullPageWrapper">
	<div class="front-page_hq bg-std puffer-both-xxl">
		<div class="container">
			<div class="row gap-bottom-sm">
				<div class="col-md-12">
					<h2 class="font-demon fontsize-headline dashed-headline gap-bottom-lg text-center">
					<span class="dashed_line"></span><span class="dashed_text">Vorstand</span><span class="dashed_line"></span>
					</h2>
				</div>
			</div>
			<div class="the_hq pos-rel">
				<?php foreach(cwo_get_chunked_hq() as $row):?>
				<div class="row">
				    <?php foreach($row as $member):?>
					<div class="col-md-3 col-sm-6 text-center pos-rel">
						<img src="<?php echo $member['bild'];?>" alt="CWO - <?php echo $member['name'];?>">
						<div class="single_hq_content text-left">
							<h3 class="font-demon fontsize-headline gap-bottom-sm dashed-top-left"><?php echo $member['name'];?></h3>
							<p><?php echo $member['position'];?></p>
						</div>
					</div>
					<?php endforeach;?>
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</div>