<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 
        <?php 
            if ( is_front_page() ) { // Pokud je to domovská stránka (statická stránka)
                echo get_the_title( get_option( 'page_on_front' ) ); // Získá název statické domovské stránky
            } else {
                wp_title( '|', true, 'right' ); // Standardní titulek pro ostatní stránky
            } 
        ?>
    </title>
</head>
<body>
    <?php

    get_header();
    ?>

    <main id="primary" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header>

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">',
                    'after'  => '</div>',
                ));
                ?>
            </div>
        </article>

        <?php
        endwhile;
        ?>
    </main>

    <?php
    get_footer();
    ?>

</body>
</html>

