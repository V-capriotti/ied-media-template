<?php
/** 
 * Search form.
*/
?>

<div class="search-form">
    <form method="get" action="<?php bloginfo('url'); ?>">
    <input type="text" value="<?php get_search_query(); ?>" name="s" id="s" placeholder="Search&hellip;">
    <button type="submit"><i class="fa fa-search"></i></button>
    </form> 
</div>