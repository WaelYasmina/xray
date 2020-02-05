<?php get_header(); ?>
<main class="articles">
    <h1><?php if(is_category()) {single_cat_title();}
    else if (is_tag()) {single_tag_title();}?></h1>
    <ul>
        <?php if(have_posts()) :
            while(have_posts()) : the_post(); ?>
                <li>
                    <div class="article">
                        <div class="image-container"><?php the_post_thumbnail(); ?></div>
                        <div class="article-info">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p>By <span><?php the_author(); ?></span> on <span><?php the_date(); ?></span></p>
                            <div class="description"><?php the_excerpt(); ?></div>
                            <div class="article-categories">
                                <?php echo get_the_category_list(', '); ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endwhile;
        endif; ?>
    </ul>
</main>
<?php get_footer(); ?>