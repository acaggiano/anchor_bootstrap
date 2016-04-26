<ul class="side-list">
    <?php while(my_latest_posts(7)): // 7 articles ?>
		<?php $support_post = article_custom_field('support') ?> 
		<?php if($support_post != 'yes'): ?>
        	<li>
				<div class="media">
					<div class="media-left media-top">
						<?php $featuredimage = article_custom_field('featured_image'); ?>
						<?php if(!empty($featuredimage)): ?>
							<img src="<?php echo $featuredimage ?>" class="media-object side-thumb">
						<?php endif; ?>
					</div>
					<div class="media-body">
						<h4 class="media-heading">
							<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
						</h4>
						<div class=""><?php echo article_description(); ?> <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">Read More</a></div>
					</div>
				</div>
        	</li>
        <?php endif; ?>
    <?php endwhile; ?>
</ul>