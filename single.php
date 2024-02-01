<?php
/**
 * Post singolo
 * 
 * Wordpress Template Hierarchy
 * https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
<main class="site-content" role="main">

    <div class="section-inner">
        <?php if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                ?>
                <article class="blog-entry content-block">
                    <header class="blog-entry__header">
                        <div class="blog-entry__header__category">
                            <a href=""><?php the_title(); ?></a>
                        </div>
                        <h1 class="blog-entry__header__title"><?php the_title(); ?></h1>
                        <time datetime=""><?php the_time( 'F j, Y' ); ?></time>
                    </header>
                    <?php the_post_thumbnail( 'custom-image');

                    the_content();
                    ?>
                    <?php get_sidebar();?>


                    </article>
                <?php
            }
        } ?>

        <?php if (has_tag()) { ?>
            <div class="tags-widget">
                <?php the_tags( '<ul><li>', '</li><li>', '<ul>'); ?>
            </div>
            <?php
        }
        ?>

    </div>
</main>
<?php get_footer();