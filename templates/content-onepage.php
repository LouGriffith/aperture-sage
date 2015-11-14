<?php $hero_image = wp_get_attachment_image_src(get_field('hero_image'), 'full'); ?>
<div class="hero" style="background-image:url(<?php echo $hero_image[0]; ?>)">
	<div class="container">
		<div class="hero-box"></div>
		<div class="hero-container">
			<h1><?php the_field('hero-headline'); ?></h1>
		</div>
	</div>
</div>
<!-- /end one-page-hero -->

<div class="container-fluid differentiators">
	<div class="container">
		<div clas="row">
			<div class="differentiators-copy">
				<h2><?php the_field('differentiator_headline'); ?></h2>
				<h4><?php the_field('differentiator_subline'); ?></h4>
				<p><?php the_field('differentiator_text'); ?></p>
			</div>

			<div class="differentiators-list">
				<!-- start differentiators -->
				<?php if( have_rows('differentiator') ): ?>
					<ul>
			 
					    <?php while( have_rows('differentiator') ): the_row(); ?>
					 
					        <li class="differentiator">
					        	<?php 
					        		$d_icon = get_sub_field('differentiator_icon');
					        		$d_headline = get_sub_field('differentiator_headline');
					        		$d_text = get_sub_field('differentiator_text');
					        	?>

				        		<div class="d-icon">
									<img src="<?php echo $d_icon ?>" alt="<?php echo $d_headline ?>" />
				        		</div>

				        		<div class="d-text">
									<h4><?php echo $d_headline ?></h4>
									<p><?php echo $d_text ?></p>
				        		</div>

					        </li>
					        
					    <?php endwhile; ?>
					 
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!-- /end one-page-differentiators-->

<div class="two-images">
	<div class="row">
		<?php $left_image = wp_get_attachment_image_src(get_field('left_image'), 'full'); ?>
		<div class="image-left" style="background-image:url(<?php echo $left_image[0]; ?>)">

		</div>

		<?php $right_image = wp_get_attachment_image_src(get_field('right_image'), 'full'); ?>
		<div class="image-left" style="background-image:url(<?php echo $right_image[0]; ?>)">
			
		</div>
	</div>
</div>
<!-- /end two-images-->

<?php $cta_background_image = wp_get_attachment_image_src(get_field('cta_background_image'), 'full'); ?>
<div class="call-to-action">
	<div class="container">
		<div class="cta-content">
			<h3><?php the_field('cta_headline'); ?></h3>
			<h2><?php the_field('cta_phone'); ?></h2>
	 	</div>
 	</div>
</div>
<!-- /end call-to-action-->