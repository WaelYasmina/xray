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
                <div class="cards">
                    <p>BASIC</p>
                    <p>$449</p>
                    <ul>
                        <li>Theme</li>
                        <li>3 months support</li>
                        <li>Domain name</li>
                        <li>1 year hosting</li>
                    </ul>
                </div>
                <div class="cards">
                    <p>BASIC</p>
                    <p>$899</p>
                    <ul>
                        <li>Theme</li>
                        <li>1 year support</li>
                        <li>Domain name</li>
                        <li>2 years hosting</li>
                        <li>$100 premium plugins</li>
                    </ul>
                </div>
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
                <li>
                    <div class="testimonial-wrapper">
                        <img src="http://xraythemes.com/wp-content/uploads/2020/01/andre-noboa-l6t3L6myh90-unsplash@2x.png" alt="testimonial 1">
                        <div class="testimonial">
                            <p>John Doe</p>
                            <p>I needed a website for my photography business. So I decided to look for
someone professional to create it for me. That said,  I contacted the X-RAY team
and they delivered exactly what I was looking for.</p>
                        </div>
                    </div>
                </li>
                <hr>
                <li>
                    <div class="testimonial-wrapper">
                        <img src="http://xraythemes.com/wp-content/uploads/2020/01/brooke-cagle-e8KDU6J-Q4E-unsplash@2x.png" alt="testimonial 2">
                        <div class="testimonial">
                            <p>Janette Doe</p>
                            <p>These guys rock ! I've never thought I'd have such an amazing website for my
travel vlogs. I do really recommend working with them, they're so professional.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    <?php endwhile;
    endif; ?>
</main>
<?php get_footer(); ?>