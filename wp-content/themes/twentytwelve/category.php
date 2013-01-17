<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
<div class="news_wrapper">
    <div class="span8 pull-left index_content">
        <i class="icon-chevron-right toggle_sidebar active_tog"></i>
        <br class="clearfloat">

        <?php if ( have_posts() ) : ?>
        <header class="archive-header">
            <h1 class="archive-title">
                <span>
                   <?php  printf( __( 'カテゴリ : %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
                </span>
            </h1>
            <?php if ( category_description() ) : // Show an optional category description ?>
            <div class="archive-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>
        </header><!-- .archive-header -->

        <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();
                /* Include the post format-specific template for the content. If you want to
                 * this in a child theme then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
                get_template_part( 'category', 'page' );
            endwhile;

            twentytwelve_content_nav( 'nav-below' );
        ?>

        <div class="pagination pagination-centered">
            <?php
            global $wp_query;

            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'format' => '?paged=%#%',
                'show_all' => False,
                'end_size' => 1,
                'mid_size' => 2,
                'prev_next' => True,
                'prev_text' => __('&laquo;'),
                'next_text' => __('&raquo;'),
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'type' => 'list'
            ) );
            ?>
        </div>

        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
    </div>
    <div class="pull-left this_main_sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
