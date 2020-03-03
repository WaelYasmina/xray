<?php
/*
Template Name: Home Template
*/
?>

<?php get_header(); ?>
<main class="home-container">
<?php if(have_posts()) :
    while(have_posts()) : the_post(); ?>
        <section class="hero">
            <?php $image = get_field('background'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <div class="overlay"></div>
            <div class="hero-content">
                <h1><?php the_field('title'); ?></h1>
                <p><?php the_field('slogan'); ?></p>
<a href="<?php the_field('consultations'); ?>">Book A Free Consultation</a>
            </div>
        </section>
        <section class="process">
            <div class="step-container">
                <div class="step-background">
                    <p>1</p>
                </div>
                <h2>The Process</h2>
            </div>
            <ul>
                <li><?php the_field('process_1'); ?></li>
                <li><?php the_field('process_2'); ?></li>
                <li><?php the_field('process_3'); ?></li>
                <li><?php the_field('process_4'); ?></li>
            </ul>
        </section>
        <section class="pricing">
            <div class="step-container">
                <div class="step-background">
                    <p>2</p>
                </div>
                <h2>Pricing</h2>
            </div>
            <div class="cards-container">
            <?php $cardsLoop = new wp_query(array(
                'post_type' => 'card',
                'posts_per_page' => 4
            ));?>

            <?php if($cardsLoop->have_posts()) :
            while($cardsLoop->have_posts()) : $cardsLoop->the_post(); ?>
                <div class="cards">
                    <p><?php the_field('pack_name'); ?></p>
                    <p><?php the_field('pack_price'); ?></p>
                    <ul>
                        <li><?php the_field('feature_1'); ?></li>
                        <li><?php the_field('feature_2'); ?></li>
                        <li><?php the_field('feature_3'); ?></li>
                        <li><?php the_field('feature_4'); ?></li>
                        <?php if(get_field('feature_5')) {echo '<li>'. get_field('feature_5'). '</li>'; } ?>
                    </ul>
                </div>
            <?php endwhile;
            endif; ?>
            </div>
        </section>
        <section class="testimonials">
            <div class="step-container">
                <div class="step-background">
                    <p>3</p>
                </div>
                <h2>Testimonials</h2>
            </div>
            <ul>
            <?php $testimonialsLoop = new wp_query(array(
                'post_type' => 'testimonial',
                'posts_per_page' => 4
            )); ?>

            <?php if($testimonialsLoop->have_posts()) :
            while($testimonialsLoop->have_posts()) : $testimonialsLoop->the_post(); ?>
                 <li>
                    <div class="testimonial-wrapper">
                        <?php $photo = get_field('photo'); ?>
                        <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>">
                        <div class="testimonial">
                            <p><?php the_field('name'); ?></p>
                            <p><?php the_field('testimonial'); ?></p>
                        </div>
                    </div>
                </li>
                <?php if(get_field('separator')) {echo '<hr>';} ?>
            <?php endwhile;
            endif; ?>
            </ul>
        </section>
    <?php endwhile;
    endif; ?>
</main>
<?php get_footer(); ?>