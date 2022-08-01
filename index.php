<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="components">
			<section class="post normal-page-content">
				<div class="wrapper">

						<div class="post-container">
							<?php get_template_part('loop'); ?>
						</div>

						<?php get_template_part('pagination'); ?>

				</div>
			</section>

		</div>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
