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

                <div class="entry-meta">
                    <?php
                    // Informace o příspěvku - datum, autor
                    echo 'Publikováno: ' . get_the_date();
                    echo ' | Autor: ' . get_the_author();
                    ?>
                </div>
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

            <footer class="entry-footer">
                <?php
                // Kategorie a štítky
                $categories_list = get_the_category_list(', ');
                if ($categories_list) {
                    echo '<span class="cat-links">Kategorie: ' . $categories_list . '</span>';
                }

                $tags_list = get_the_tag_list('', ', ');
                if ($tags_list) {
                    echo '<span class="tags-links"> | Štítky: ' . $tags_list . '</span>';
                }
                ?>
            </footer>
        </article>

        <?php
        // Navigace mezi příspěvky
        the_post_navigation(array(
            'prev_text' => '&larr; Předchozí příspěvek',
            'next_text' => 'Následující příspěvek &rarr;'
        ));
    endwhile;
    ?>
</main>

<?php
get_footer();
?>
