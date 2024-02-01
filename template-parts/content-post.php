<?php 
/**
 * post
 * */
?>

<li>
    <div class="post-thumb">
        <?php the_post_thumbnail('medium'); ?>
    </div>

    <div class="post-entry">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <small><?php //the_excerpt(); ?></small>
        <time datetime=""><?php the_time( 'F j, Y' ); ?></time>
        <p></p>
    </div>
</li>