<?php
/*
Template Name: Main Page
*/
?>

<?php get_header(); ?>
    <main class="home-container">
        <?php if(have_posts()) :
            while(have_posts()) : the_post(); ?>
                <section class="hero">
                    <img src="http://xraythemes.com/wp-content/uploads/2020/01/christopher-gower-m_HRfLhgABo-unsplash.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-content">
                        <h1>X-RAY THEMES</h1>
                        <p>You tell us about your business and we deliver the suitable WordPress theme.</p>
                        <a href="#">Book A Free Consultation</a>
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
                        <li>You book a consultation <span>for free</span>.</li>
                        <li>We make a 30 min call session so you provide us the necessary information about your business and the end goal of the website.</li>
                        <li>We'll keep in contact the whole process, sending you emails containing the different prototypes to get your feedback.</li>
                        <li>We schedule another 1 hour call session to show you how to deploy the theme and start publishing your content.</li>
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
                            <p>PRO</p>
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
                                <img src="http://xraythemes.com/wp-content/uploads/2020/01/andre-noboa-l6t3L6myh90-unsplash@2x.png" alt="">
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
                                <img src="http://xraythemes.com/wp-content/uploads/2020/01/brooke-cagle-e8KDU6J-Q4E-unsplash@2x.png" alt="">
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