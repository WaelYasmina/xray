<?php
/*
Template Name: Special Page 2
*/
?>

<?php get_header(); ?>
<main>
<?php if(have_posts()) :
    while(have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
</main>
<?php get_template_part('part1'); ?>
<?php get_footer(); ?>