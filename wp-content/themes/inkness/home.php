<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inkness
 */
get_header();
?>
<div id="primary-home" class="content-area col-md-12">
    <main id="main" class="site-main row container" role="main">
        <!--        event filter button-LAKMAL-->
        <div class="row">
            <?php
            $id = 54;
            $post = get_post($id);
            $content = apply_filters('the_content', $post->post_content);
            echo $content;  
            ?>
        </div>
        <?php if (have_posts()) : ?>

            <?php
            /* Start the Loop */ $ink_count = 0;
            $ink_row_count = 0;
			echo "<div class='row-" . $ink_row_count . " row'>";
            ?>
            <?php
            while (have_posts()) : the_post();
                if ($ink_count == 0) {
                  //echo "<div class='row-" . $ink_row_count . " row'>";  
                }
                ?>


                <?php
                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('content', 'home');
                ?>

                <?php
                if ($ink_count == 3) {
                    //echo "</div>";
                    $ink_count = 0;
                    $ink_row_count++;
                } else {
                    $ink_count++;
                }

            endwhile;
			echo "</div>";
            ?>

            <?php inkness_pagination(); ?>

        <?php else : ?>

            <?php get_template_part('no-results', 'index'); ?>

<?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
$id43 = 43;
$post43 = get_post($id43);
$title43 = apply_filters('the_title', $post43->post_title);
$content43 = apply_filters('the_content', $post43->post_content);

$id45 = 45;
$post45 = get_post($id45);
$title45 = apply_filters('the_title45', $post45->post_title);
$content45 = apply_filters('the_content45', $post45->post_content);
?>
<article class="home-page-containt">
    <div class="article-wrapper">
        <div class="left-col col-md-8 col-xs-12">
            <h1><?php echo $title43; ?></h1>
            <div class="containt">
<?php echo $content43; ?>
            </div>
        </div>

        <div class="right-col col-md-4 col-xs-12">
<?php echo $content45; ?>
        </div>
    </div>
</article>


<?php get_footer(); ?>