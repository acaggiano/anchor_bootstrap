<?php theme_include('header'); ?>

<section class="container">
		<ul class="support-list">
			<?php while(my_latest_posts(7)): // 7 articles ?>
				<?php $support_post = article_custom_field('support') ?>
				<?php if($support_post == 'yes'): ?>
					<li>
						<article class="col-md-10">
							<div class="media">
								<div class="media-left media-top">
									<?php $featuredimage = article_custom_field('featured_image'); ?>
									<?php if(!empty($featuredimage)): ?>
										<img src="<?php echo $featuredimage ?>" class="media-object support-image">
									<?php endif; ?>
								</div>
								<div class="media-body">
									<h3 class="media-heading">
										<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
									</h3>
									<div class=""><?php echo article_description(); ?></div>
								</div>
							</div>
						</article>
					</li>
				<?php endif; ?>
			<?php endwhile; ?>
		</ul>
	</section>
<?php theme_include('footer'); ?>