<?php get_header();?>

<main class="site-content" role="main">

    <div class="section-inner">

        <?php
        //Array di parametri
        $args = array(
            'posts_per_page' => 1,
        );

        //memorizzo il risultato
        $post_in_evidenza = new WP_Query( $args );

        //Inizializzare il loop
        while( $post_in_evidenza->have_posts()) {
            $post_in_evidenza->the_post();
            //Memorizzo l'ID del post per evitare di stamparlo due volte
            $post_in_evidenza_id = $post->ID;
        ?>
        <article class="blog-entry content-block">
            <header class="blog-entry__header">
                <div class="blog-entry__header__category">
                   <?php the_category( ', ' ); ?>
                </div>
                <h1 class="blog-entry__header__title"><?php the_title(); ?></h1>
                <time datetime=""><?php the_time( 'F j, Y' ); ?></time>
            </header>
        </article>
        <?php } ?>

        <ul class="post-list">

            <?php if ( have_posts() ) {
                while( have_posts() ) {
                    the_post();

                    if ( $post_in_evidenza_id != $post->ID ) { 
                        get_template_part( 'template-parts/content-post');
                    }            
                }
            }  else { ?>
                    <h2> Siamo spiacenti ma non ci sono post da mostrare. </h2>
                <?php
            }
            ?>
        </ul>

        <div class="pagination">
            <a class="prev page-numbers" href="#">&laquo;</a>
            <a class="page-numbers" href="#">1</a>
            <a class="page-numbers" href="#">2</a>
            <span aria-current="page" class="page-numbers current">3</span>
            <a class="next page-numbers" href="http://localhost:8888/wordpress/page/3/">»</a>
        </div>

    </div>

</main>

<?php get_footer();