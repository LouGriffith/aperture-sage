<?php
/**
 * Template Name: One Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'onepage'); ?>
<?php endwhile; ?>

