<div class="page-events_content gap-top-md">
	<div class="container">
		<?php foreach(cwo_getAllEvents() as $event):?>
			<div class="row gap-bottom-xl">
				<div class="col-sm-1">
					<span><?php echo $event->data_array[0];?></span><br/>
					<span><?php echo $event->data_array[1];?></span>
				</div>
				<div class="col-sm-3">Titel</div>
				<div class="col-sm-4">Paragraph</div>
				<div class="col-sm-2">Uhrzeit</div>
				<div class="col-sm-2 text-right-sm">Button</div>
			</div>
		<?php endforeach;?>
	</div>
</div>