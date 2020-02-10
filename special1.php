<?php
/*
Template Name: Special Page 1
*/
?>

<?php get_header(); ?>
<?php get_template_part('part1'); ?>
<main>
<?php if(have_posts()) :
    while(have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
</main>
<?php get_footer(); ?>