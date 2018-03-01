<div class="page_newsletter_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php while(have_posts()):the_post();?>
				<?php the_content();?>
				<?php endwhile;?>
				<?php wp_reset_postdata();?>
			</div>
		</div>
	</div>
</div>