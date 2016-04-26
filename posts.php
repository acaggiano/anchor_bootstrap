<?php theme_include('header'); ?>

<section class="container">

	<?php if(has_posts()): ?>
		<ul class="post-list">
			<?php posts(); ?>
			<?php $support_post = article_custom_field('support') ?> 
			<?php if($support_post != 'yes'): ?>
			<li class="featured-post">
				<article class="col-md-10">
					<h1>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h1>

					<div class="">
						<?php echo article_description(); ?>
					</div>

					<div class="article-data">
						<i class="fa fa-calendar" aria-hidden="true"></i> Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <i class="fa fa-user" aria-hidden="true"></i>
 <a href="#"><?php echo article_author('real_name'); ?></a>.
					</div>
				</article>
			</li>
			<?php endif; ?>
			<?php $i = 0; while(posts()): ?>
			<?php $support_post = article_custom_field('support') ?>
			<?php if($support_post != 'yes'): ?>
			<li>
				<article class="col-md-10">
					<h2>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h2>
						<div class=""><?php echo article_description(); ?></div>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">Read more</a>
						<div class="article-data">
						<i class="fa fa-calendar" aria-hidden="true"></i> Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"> Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by  <i class="fa fa-user" aria-hidden="true"></i>
<a href="#"><?php echo article_author('real_name'); ?></a>.
					</div>
				</article>
			</li>
			<?php endif; ?>
			<?php endwhile; ?>
		</ul>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="">
				<div class="previous">
					<?php echo posts_prev(); ?>
				</div>
				<div class="next">
					<?php echo posts_next(); ?>
				</div>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<div class="wrap">
			<h1>No posts yet!</h1>
			<p>Looks like you have some writing to do!</p>
		</div>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>
