<?php get_header();
?>
<main class="site-content" role="main">

    <div class="section-inner">

        <article class="blog-entry content-block">
            <header class="blog-entry__header">
                <div class="blog-entry__header__category">
                    <a href="">Featured</a>
                </div>
                <h1 class="blog-entry__header__title">Worth A Thousand Words</h1>
                <time datetime="">April 9, 2020</time>
            </header>


        <ul class="post-list">
            <li>
                <div class="post-thumb">
                <img src="<?php bloginfo('template_directory');?>/assets/images/widget-1.jpg">
                </div>

                <div class="post-entry">
                    <a href="#">Ask HN: Does Anybody Still Use JQuery?</a>
                    <time datetime="">March 27, 2018</time>
                    <p></p>
                </div>
            </li>

            <li>
                <div class="post-thumb">
                <img src="<?php bloginfo('template_directory');?>/assets/images/widget-2.jpg">
                </div>

                <div class="post-entry">
                    <a href="#">Tell-A-Tool: Guide To Web Design And Development Tools</a>
                    <time datetime="">January 27, 2020</time>
                    <p></p>
                </div>
            </li>

            <li>
                <div class="post-thumb">
                <img src="<?php bloginfo('template_directory');?>/assets/images/widget-3.jpg">
                </div>

                <div class="post-entry">
                    <a href="#">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a>
                    <time datetime="">January 27, 2020</time>
                    <p></p>
                </div>
            </li>

            <li>
                <div class="post-thumb">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/widget-4.jpg">
                </div>

                <div class="post-entry">
                    <a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a>
                    <time datetime="">January 27, 2020</time>
                    <p></p>
                </div>

            </li>

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
?>


</body>
</html>