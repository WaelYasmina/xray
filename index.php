<?php get_header(); ?>
<main class="articles">
    <div>
        <h1>Articles</h1>
        <ul>
            <?php if(have_posts()) :
                while(have_posts()) : the_post(); ?>
                    <li>
                        <section class="article">
                            <div class="image-container"><?php the_post_thumbnail(); ?></div>
                            <div class="article-info">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p>By <span><?php the_author(); ?></span> on <span><?php the_date(); ?></span></p>
                                <div class="description"><?php the_excerpt(); ?></div>
                                <div class="article-categories">
                                    <?php echo 'Categories: ' . get_the_category_list(', '); ?>
                                </div>
                            </div>
            </section>
                    </li>
                <?php endwhile;
            endif; ?>
        </ul>
    </div>
    <?php dynamic_sidebar('My Widget'); ?>
</main>
<?php get_footer(); ?>