<?php
/**
 * The main template file
 */

get_header(); // Načte header.php
?>

<main id="primary" class="site-main">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;

        // Navigace mezi příspěvky
        the_posts_navigation();

    else :
        ?>
        <article class="no-results">
            <header class="entry-header">
                <h1 class="entry-title">Nic nenalezeno</h1>
            </header>
            <div class="entry-content">
                <p>Bohužel, nic nebylo nalezeno.</p>
            </div>
        </article>
        <?php
    endif;
    ?>
</main>

<?php
get_footer(); // Načte footer.php
?>
