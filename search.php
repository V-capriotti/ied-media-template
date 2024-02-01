<?php
/** Risultati ricerca
 */
get_header(); ?>

<main class="site-content" role="main">

    <div class="section-inner">
    <?php if (have_posts()) { ?>

        <header class="blog-entry__header">
            <?php get_search_form(); ?>
            <h3>Risultati della ricerca per: &laquo;<?php echo get_search_query(); ?>&raquo;</h3>

            
        </header>

        <ul class="post-list">
        <?php 
        // inizializzo loop.
        while(have_posts()) {
            the_post();
            get_template_part('template-parts/content-post');
        } // end while;
        ?>
        </ul>

     
        <?php } else { ?>
        <h3>SIamo spiacenti, ma la ricerca non ha prodotto risultati. Prova a cercare di nuovo</h3>
        <?php get_search_form(); ?>
        <?php } ?>
    </div>
</main>



<?php get_footer();