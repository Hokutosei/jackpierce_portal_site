<?php
/**
 * The template for displaying Search Results pages.
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
                            <?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?>
                        </span>
                    </h1>
                </header><!-- .archive-header -->
                <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'page'); ?>
                    <?php endwhile; ?>
            <?php else : ?>

                <header class="entry-header">
                    <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
                </header>

                test
                <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
                <?php get_search_form(); ?>
            <?php endif; ?>

        </div>
        <div class="span3 pull-left this_main_sidebar">
            <?php get_sidebar(); ?>
        </div>

    </div>
<?php get_footer(); ?>
