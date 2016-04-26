<?php theme_include('header'); ?>

		<section class="container">
			<div class="row">
			<article class="col-md-8">
			<?php echo page_content(); ?>
			</article>
			<div class="col-md-4">
			<aside>
				<div class="text-center">
					<h3><a href="posts">News</a></h3>
				</div>
				<?php theme_include('sidebar'); ?>
			</aside>
			</div>
		</section>

<?php theme_include('footer'); ?>