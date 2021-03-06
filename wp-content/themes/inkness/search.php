<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Inkness
 */
get_header();
$s = get_search_query();
$args = array(
    'category_name' => $s
);
// The Query
$the_query = new WP_Query($args);
?>

<section id="primary" class="content-area col-md-8">
    <main id="main" class="site-main" role="main">

        <?php if ($the_query->have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php printf(__('Search Results for: %s', 'inkness'), '<span>' . get_search_query() . '</span>'); ?></h1>
            </header><!-- .page-header -->

            <?php /* Start the Loop */ ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <?php get_template_part('content', 'search'); ?>

            <?php endwhile; ?>

            <?php inkness_content_nav('nav-below'); ?>

        <?php else : ?>

            <?php get_template_part('no-results', 'search'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>