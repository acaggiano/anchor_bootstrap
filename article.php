<?php theme_include('header'); ?>
		<section class="container" id="article-<?php echo article_id(); ?>">
			<?php $featuredimage = article_custom_field('featured_image'); ?>
			<?php if(!empty($featuredimage)): ?>
				<div style="background-image: url(<?php echo $featuredimage ?>);" class="featured-image"></div>
			<?php endif; ?>
			<h1><?php echo article_title(); ?></h1>
			<article>
				<?php echo article_markdown(); ?>
			</article>

			<section class="footnote">
				<!-- Unfortunately, CSS means everything's got to be inline. -->
				<!-- <p>This article is my <?php /*echo numeral(article_number(article_id()), true); ?> oldest. It is <?php echo count_words(article_markdown()); ?> words long<?php if(comments_open()): ?>, and it’s got <?php echo total_comments() . pluralise(total_comments(), ' comment'); ?> for now.<?php endif; ?> <?php echo article_custom_field('attribution'); */?></p> -->
				<div class="article-data">
					<i class="fa fa-calendar" aria-hidden="true"></i> Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"> <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <i class="fa fa-user" aria-hidden="true"></i> <a href="#"><?php echo article_author('real_name'); ?></a>.
				</div>
			</section>
		</section>

		<?php if(comments_open()): ?>
		<section class="comments">
			<?php if(has_comments()): ?>
			<ul class="commentlist">
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
					<div class="wrap">
						<h2><?php echo comment_name(); ?></h2>
						<time><?php echo relative_time(comment_time()); ?></time>

						<div class="content">
							<?php echo htmlspecialchars(comment_text()); ?>
						</div>

						<span class="counter"><?php echo $i; ?></span>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<label for="name">Your name:</label>
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>

				<p class="email">
					<label for="email">Your email address:</label>
					<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
				</p>

				<p class="textarea">
					<label for="text">Your comment:</label>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
		<?php endif; ?>

<?php theme_include('footer'); ?>
